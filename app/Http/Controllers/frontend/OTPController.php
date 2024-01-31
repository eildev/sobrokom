<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OTPData;
use App\Models\Order;
use App\Models\OrderBillingDetails;
use Illuminate\Support\Carbon;
class OTPController extends Controller
{
    public function storeOTP(Request $request){
        $otp = $this->otpGenarate($request->phone);

        $number = $otp->phone;
        $api_key = "0yRu5BkB8tK927YQBA8u";
        $senderid = "8809617615171";
        $message = "Your One Time Password (OPT) for Verification : ".$otp->otp.". This OPT is valid for 5 minutes. Please do not share OTP with anyone";
        $url = "http://bulksmsbd.net/api/smsapi";
        $data = [
            "api_key" => $api_key,
            'number' =>$number,
            'senderid' => $senderid,
            'message' => $message
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response, true);
        if($response['response_code'] == 202){
            return response()->json([
            'status' => 200,
            'message' =>'OTP has been Successfully Sent'
            ]);
        }
        else{
          return response()->json([
            'status' => 404,
            'message' => 'Bad Request',
            ]);
        }

    }
    public function otpGenarate($phone){
        $verificationCode = OTPData::wherePhone($phone)->latest()->first();
        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }
        return OTPData::create([
            'phone' => $phone,
            'otp' => rand(123456, 99999),
            'expire_at' => Carbon::now()->addMinutes(5)
        ]);
    }

    public function checkOTP(Request $request){
        $verificationCode = OTPData::where('phone',$request->phone)->where('otp',$request->otp)->first();
        $now = Carbon::now();
        if(!$verificationCode){
            return response()->json([
            'success' => false,
            'message' => 'Invalid OTP'
            ]);
        }
        else if($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return response()->json([
            'success' => false,
            'message' => 'OTP has been Expire'
            ]);
        }else{
            // @dd($request);


            // store order details
                $order = new Order;
                $order->user_identity = $request->phone;
                $order->invoice_number = $request->invoice_number;
                $order->product_quantity = $request->product_quantity;
                $order->product_total = $request->product_total;
                $order->coupon_id = $request->coupon_id;
                $order->discount = $request->discount;
                $order->sub_total = $request->sub_total;
                $order->shipping_method = $request->shipping_method;
                $order->shipping_amount = $request->shipping_amount;
                $order->grand_total = $request->grand_total;
                $order->payment_method = $request->payment_method;
                $order->payment_id = $request->payment_id;
                $order->save();


            // store billing details
                $order_billing_details = new OrderBillingDetails;
                $order_billing_details->phone = $request->phone;
                $order_billing_details->first_name = $request->first_name;
                $order_billing_details->last_name = $request->last_name;
                $order_billing_details->email = $request->email;
                $order_billing_details->address_1 = $request->address_1;
                $order_billing_details->address_2 = $request->address_2;
                $order_billing_details->city = $request->city;
                $order_billing_details->division = $request->division;
                $order_billing_details->post_code = $request->post_code;
                $order_billing_details->country = $request->country;
                $order_billing_details->order_notes = $request->order_notes;
                $order_billing_details->save();

            return response()->json([
            'status' => 200,
            'message' => 'Congratulation Your OTP Correct',
            'user' => $verificationCode
            ]);

        }

    }
}


            // $validator = Validator::make($request->all(), [
            //     'invoice_number' => 'required|max:50',
            //     'user_identity' => 'required|max:15',
            //     'product_quantity' => 'required|max:5',
            //     'product_total' => 'required||max:100',
            //     'sub_total' => 'required|max:5',
            //     'grand_total' => 'required'

            //     'first_name'
            //     'last_name'
            //     'email'
            //     'phone'
            //     'address_1'
            //     'address_2'
            //     'city'
            //     'division'
            //     'post_code'
            //     'country'
            //     'order_notes'
            // ]);

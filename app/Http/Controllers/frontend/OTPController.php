<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OTPData;
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
            return response()->json([
            'status' => 200,
            'message' => 'Congratulation Your OTP Correct',
            'user' => $verificationCode
            ]);
        }

    }
}

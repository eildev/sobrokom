<?php

namespace App\Http\Controllers\Backend;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{
    public function index(){
        $newOrders = Order::where("status", 'pending')->latest()->get();
        return view('backend.order.new-order', compact('newOrders'));
    }
    public function adminApprove($invoice){
        // dd($invoice);
        $newOrders = Order::where("invoice_number",$invoice)->latest()->first();
        $newOrders->status = "approve";
        $newOrders->update();

        $trackingUrl = 'http://127.0.0.1:8000/order-tracking';
        $number = $newOrders->user_identity;
        $api_key = "0yRu5BkB8tK927YQBA8u";
        $senderid = "8809617615171";
        $message = "Your order has been confirmed. your invoice number is : ".$invoice." you find your product using this invoice Number in here: ".$trackingUrl;
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

        // $url = 'https://sobrokom.store/order-tracking/invoice';
        // $data = [
        //     'name' => $request->first_name,
        //     'invoiceNumber' => $invoiceNumber,
        //     'trackingURL'=> $url
        // ];
        // Mail::to($request->email)->send(new OrderMail($data));


        $response = json_decode($response, true);
        if($response['response_code'] == 202){
            return back()->with('success','Order Successfully Approved');
        }
        else{
            return back()->with('warring','Something went wrong Order Not Approved');
        }

    }

    public function orderTracking(){
        return view('frontend/e-com/tracking-product');
    }
    public function orderTrackingInvoice(Request $request){
        $searchTag = $request->search;
        $trackes = Order::where('invoice_number', $request->search)->where('status', 'approve')
        ->get();
        return view('frontend/e-com/tracking-product', compact('trackes','searchTag'));
    }
}

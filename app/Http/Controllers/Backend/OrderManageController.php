<?php

namespace App\Http\Controllers\Backend;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderBillingDetails;
class OrderManageController extends Controller
{
    public function index(){
        $newOrders = Order::where("status", 'pending')->latest()->get();
        return view('backend.order.new-order', compact('newOrders'));
    }

    public function approvedOrders(){
        $approved_orders = Order::where("status", 'approve')->latest()->get();
        return view('backend.order.approved-order', compact('approved_orders'));
    }
    public function processedOrders(){
        $processed_orders = Order::where("status", 'processing')->latest()->get();
        return view('backend.order.processed-order', compact('processed_orders'));
    }
    public function deliveringOrders(){
        $delivering_orders = Order::where("status", 'delivering')->latest()->get();
        return view('backend.order.logistics', compact('delivering_orders'));
    }
    public function completedOrders(){
        $completed_orders = Order::where("status", 'completed')->latest()->get();
        return view('backend.order.completed-order', compact('completed_orders'));
    }


    public function orderProcessing($invoice){
        // dd($invoice);
        $processing_Orders = Order::where("invoice_number",$invoice)->latest()->first();
        // dd($processing_Orders);
        $processing_Orders->status = "processing";
        $processing_Orders->update();
        return back()->with('success','Order Status Updated Sucessfully');
    }
    public function orderDelivering($invoice){
        // dd($invoice);
        $orders_delivering = Order::where("invoice_number",$invoice)->latest()->first();
        // dd($processing_Orders);
        $orders_delivering->status = "delivering";
        $orders_delivering->update();
        return back()->with('success','Order Status Updated Sucessfully');
    }

    public function orderCompleted($invoice){
        $completed_Orders = Order::where("invoice_number",$invoice)->latest()->first();
        // dd($completed_Orders);
        $completed_Orders->status = "completed";
        $completed_Orders->update();
        return back()->with('success','Order Status Updated Sucessfully');
    }
    public function adminApprove($invoice){
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
        $email = OrderBillingDetails::where('order_id',$newOrders->id)->first();

        $url = 'https://sobrokom.store/order-tracking/invoice';
        $data = [
            'name' => $newOrders->first_name,
            'invoiceNumber' => $invoice,
            'trackingURL'=> $url
        ];
        Mail::to($email->email)->send(new OrderMail($data));

        $response = json_decode($response, true);
        if($response['response_code'] == 202){
            return back()->with('success','Order Successfully Approved');
        }
        else{
            return back()->with('warring','Something went wrong Order Not Approved');
        }

    }
    public function order($invoice){
        $newOrders = Order::where("invoice_number",$invoice)->latest()->first();
        $newOrders->status = "proccessing";
        $newOrders->update();
        return back()->with('success','Order Successfully Approved');
    }
    public function orderTracking(){
        return view('frontend/e-com/tracking-product');
    }
    public function orderTrackingInvoice(Request $request){
        $searchTag = $request->search;
        $trackes = Order::where('invoice_number', $request->search)->get();
        return view('frontend/e-com/tracking-product', compact('trackes','searchTag'));
    }
}

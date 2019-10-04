<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Order;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function getOrders()
    {
      return OrderResource::collection(Order::all());
    }


    public function createOrder(Request $request) {

        $orders = $request->json()->all();
        foreach ($orders['orders'] as $order) {
                Order::create( [
                    'item_name' =>  $order['item_name'],
                    'item_id'=>$order['item_id'],
                    'item_qty'=>$order['item_qty'],
                   'cust_name'=>$order['cust_name'],
                    'cust_mobile_no'=>$order['cust_mobile_no'],
                    'cust_email'=>$order['cust_email'],
                    'cust_address'=>$order['cust_address'],
                    'grand_total'=>$order['grand_total'],
                    'created_at'=>date('Y-m-d H:i:s')
                ]);
            }
          
       
        return response()->json([
            "message" => "order placed successfully",
            "status"=>true,
        ], 201);

       
    }
       
}

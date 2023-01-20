<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\orders;
use App\Models\AddTable;
use App\Models\Add_Staff;
use App\Models\Item;
use App\Models\ordered_items;

class manageOrders extends Controller
{
   
    public function ats($id)
    {   
        //get table id for dropdown list
    //    $table = orders::with('InfoTable')->get();
    //    // get staff id for dropdown list
    //     $staff = orders::with('AddStaff')->get();
    //     //get item id for dropdown list
    //     $item = orders::with('Item')->get();
       $customer_id=$id;
        $table= AddTable::all();
        $staff= Add_Staff::all();
        $item= Item::all();
        $data = compact('table', 'staff', 'item' ,'customer_id');
        return view('user/addOrder')->with($data);
    }
    public function store(Request $request){
        $order = new orders;
        $order->table_id = $request->table_id;
        $order->staff_id = $request->server_name;
        $order->item_id = $request->item_id;
        $order->customer_id=$request->customer_id;
        $order->totalPrice = 0;
        $order->orderStatus =0;
        $order->tax = 18;
        $order->totalPriceWithTax = 0;
        $order->billpaid = 0;
        $order->save();
        //find where ordered id is equal to customer id
        $order_item = orders::with('Item')->where('customer_id', $request->customer_id)->first();
        $id=$order_item->order_id;
        //get price from item table form item id
        $item = Item::where('item_id', $request->item_id)->first();
        $price=$item->price;
        //insert into ordered_items table
        $ordered_items= new ordered_items;
        $ordered_items->order_id =$id;
        $ordered_items->item_id = $request->item_id;
        $ordered_items->quantity = $request->quantity;
        $ordered_items->price = $price * $request->quantity;
        $ordered_items->save();
        
        return redirect('ordered_items/'.$id.'/'.$request->customer_id);
    }
    // public function displayOrder($order_id){
    //     $order = ordered_items::where('order_id', $order_id )->get();
    //     $data = compact('order');
    //     return view('user/displayOrders')->with($data);
    // }
    public function generate_bill(Request $request){

        $order_id=$request->order_id;
        $customer_id=$request->customer_id;
        $order = orders::where('order_id', $order_id )->first();
        $order->totalPrice = $request->totalPrice;
        $order->totalPriceWithTax =$request->totalPrice* 18/100 + $request->totalPrice;
        $order->save();
        return redirect('/generate_bill');
    }
    public function displayBills(){
        $order = orders::all();
        $data = compact('order');
        return view('generate_bill')->with($data);
    }
    public function printInvoice($order_id){

        $order = orders::with('customers')->where('order_id', $order_id )->get();
        
        $ordered_items = ordered_items::with('Items')->where('order_id', $order_id )->get();
        $data = compact('order','ordered_items');
        return view('print')->with($data);
    }
    public function billPay($order_id){
        $order = orders::where('order_id', $order_id )->first();
        $order->billpaid = 1;
        $order->save();
        return redirect('/generate_bill');
    }
}

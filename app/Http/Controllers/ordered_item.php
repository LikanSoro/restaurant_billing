<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ordered_items;
use App\Models\orders;
class ordered_item extends Controller
{
    public function in($order_id)
    {
       
        $o_id=$order_id;
        $item= Item::all();
        $order = ordered_items::with('Items')->where('order_id', $order_id )->get();
        //add total price from the ordered_items table
        $totalPrice=ordered_items::where('order_id', $order_id)->sum('price');
        $data = compact('order', 'item','o_id','totalPrice');
        return view('ordered_items')->with($data);
    }
    public function store(Request $request){
        $item = Item::where('item_id', $request->item_id)->first();
        $price=$item->price;
        $id=$request->order_id;
        $ordered_items= new ordered_items;
        $ordered_items->order_id =$id;
        $ordered_items->item_id = $request->item_id;
        $ordered_items->quantity = $request->quantity;
        $ordered_items->price = $price*$request->quantity;
        $ordered_items->save();
        $data= compact('id');
        //return in($id);
        return redirect('ordered_items/'.$id);
    }
}

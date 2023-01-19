<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class itemsController extends Controller
{
    public function index(){
        return view('addItem');
    }
    public function addItemDetails(Request $request){

        //insert quary
    $item = new Item;
    $item->i_name = $request['i_name'];
    $item->i_desc = $request['i_desc'];
    $item->price = $request['i_price'];  
    $item->save();

    return redirect('displayItem');
}
public function displayItem(){
    $items = Item::all();
    $data = compact('items');
    return view('displayItem')->with($data);

}
public function deleteItem($id){

    Item::where('item_id',$id)->delete();
    return redirect('displayItem');
   
}

}

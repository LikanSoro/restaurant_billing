<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\orders;
use App\Models\AddTable;
use App\Models\Add_Staff;
use App\Models\Item;


class manageOrders extends Controller
{
   
    public function ats()
    {   
        //get table id for dropdown list
    //     $table = orders::with('InfoTable')->get();
    //    // get staff id for dropdown list
    //     $staff = orders::with('AddStaff')->get();
    //     //get item id for dropdown list
    //     $item = orders::with('Item')->get();
        $table= AddTable::all();
        $staff= Add_Staff::all();
        $item= Item::all();
        $data = compact('table', 'staff', 'item');
        return view('user/addOrder')->with($data);
    }
    public function addOrder(Request $request){
        $order = new orders;
        $order->table_id = $request->table_id;
        $order->staff_id = $request->staff_id;
        $order->item_id = $request->item_id;
        
        $order->order_status = $request->order_status;
        $order->save();
        return redirect('displayOrder');
    }
}

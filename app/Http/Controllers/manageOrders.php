<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class manageOrders extends Controller
{
   
    public function ats()
    {   
        //get table id for dropdown list
        $table_id = orders::all();
        $data = compact('table_id');
        return view('user/addOrder')->with($data);
    }
}

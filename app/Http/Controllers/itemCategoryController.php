<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddItemC;


class itemCategoryController extends Controller
{
    public function index(){
        return view('addItemCategory');
    }
    public function addItemCat(Request $request){

        $itemc = new AddItemC;
        $itemc->cat_name = $request['category'];
        $itemc->added_by = $request['addedby'];
        $itemc->save();

        return redirect('displayItemCategory');
    }

    public function displayItemC(){
        $itemcat = AddItemC::all();
        $data = compact('itemcat');
        return view('displayItemCategory')->with($data);
    }
    public function deleteItemC($id){

        AddItemC::where('ic_id',$id)->delete();
        return redirect('displayItemCategory');
       
    }
}

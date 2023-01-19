<?php

namespace App\Http\Controllers;

use App\Models\AddTable;

use Illuminate\Http\Request;

class addTableController extends Controller
{
    // public function addTable(){

    //     $aTable= new AddTable;
    //     $aTable->billPaid = NULL;
    //     $aTable->save();
    // }

    public function index(){
        return view('addTable');
    }
    public function addTableDetails(Request $request){

        //insert quary
    $aTable = new AddTable;
    $aTable->tableName = $request['tableName'];
    // $aTable->i_desc = $request['i_desc'];
    // $aTable->price = $request['i_price'];  
    $aTable->save();

    return redirect('manageTables');
}
public function displayTables(){
    $aTables = AddTable::all();
    $data = compact('aTable');
    return view('manageTables')->with($data);

}
public function deleteItem($id){

    AddTable::where('id',$id)->delete();
    return redirect('manageTables');
   
}
}

<?php

namespace App\Http\Controllers;

use App\Models\AddTable;

use Illuminate\Http\Request;

class addTableController extends Controller
{
    public function addTable(){

        $aTable= new AddTable;
        $aTable->billPaid = NULL;
        $aTable->save();
        return redirect('manageTables'); 
    }
    public function displayTables(){
        $tables = AddTable::all();
        $data = compact('tables');
        return view('user/manageTables')->with($data);
    }
    public function dTable($t_id){
      
        AddTable::where('table_id',$t_id)->delete();

        return redirect('manageTables');
    }
}

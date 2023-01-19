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
    }
}

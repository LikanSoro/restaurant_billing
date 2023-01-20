<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add_Staff;

class staffController extends Controller
{
    public function index(){
        return view('addStaff');
    }

    public function addStaffDetails(Request $request){

            //insert quary
        $staff = new Add_Staff;
        $staff->name = $request['name'];
        $staff->job_role = $request['jobrole'];
        $staff->joining_date = $request['joiningdate'];
        $staff->contact = $request['contact'];
        $staff->address = $request['address'];  
        $staff->save();

        return redirect('displayStaff');
    }
    public function displayStaff(){
        $staffs = Add_Staff::all();
        $data = compact('staffs');
        return view('displayStaff')->with($data);

    }
    public function deleteStaff($id){

        Add_Staff::where('staff_id',$id)->delete();
        return redirect('displayStaff');
       
    }
    public function editStaff(Request $request,$id){
        $staff = Add_Staff::where('staff_id',$id)->first();
        $staff->name = $request['name'];
        $staff->job_role = $request['jobrole'];
        
        $staff->contact = $request['contact'];
        $staff->address = $request['address'];
        $staff->save();
        return redirect('displayStaff');
        
    }
}

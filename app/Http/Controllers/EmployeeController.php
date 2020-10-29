<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        return view('website.pages.registration');
    }

        public function all(){
            $ass=Employee::all();
            return view('website.pages.all',['collection'=>$ass]);
        }

    public function store(Request $rq){
        $name=$rq->name;
        $email=$rq->email;
        $dob=$rq->date_of_birth;
        $gender=$rq->gender;
        $status=$rq->status;
        $salary=$rq->salary;

        $obj=new Employee();
        $obj->name=$name;
        $obj->email=$email;
        $obj->date_of_birth=$dob;
        $obj->gender=$gender;
        $obj->status=$status;
        $obj->salary=$salary;

        if($obj->save()){
            return redirect()->back()->with('success','Inserted successfully');
        }
    }
}

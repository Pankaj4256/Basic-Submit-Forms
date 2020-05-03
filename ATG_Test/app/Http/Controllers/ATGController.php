<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ATGModel;
use Session;

class ATGController extends Controller
{
    //
    function save(Request $req){

        $model= new ATGModel;
        $model->Name=$req->name;
        $model->Email=$req->email;
        $model->Pincode=$req->pincode;
        if($model->save()==1){
            return redirect()->back() ->with('alert', 'Submitted Successfully!');
        }
        else{
            return redirect('/');
        }

        $this->validate($req,['name'=>'required'],['name.required'=>'Name is required cannot be empty.']);

        $this->validate($req,['email'=>'required|email'],['email.required'=>'Email is required cannot be empty.','email'=>'This email is  not valid.' ]);

        $this->validate($req,['pincode'=>'required|digits:6'],['pincode.required'=>'Pincode is required cannot be empty.' ]);

    }
}


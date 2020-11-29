<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdata;
class ATGController extends Controller
{
    function main(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|min:5',
                'email'=>'required|min:5|unique:information',
                'pin'=>'required|min:6|max:6'
            ]
            );
        // echo "hello";
        $user=new userdata;
        $user->Name=$request->name;        //$request->name of the field and $user->name of database field
        $user->Email=$request->email;       //$request->name of the field and $user->name of database field
        $user->Pincode=$request->pin;
        $user->save();
      return  redirect('/form')->with('status','SuccessFull!!');

    }
    // function val(Request $request)
    // {

    // }
}

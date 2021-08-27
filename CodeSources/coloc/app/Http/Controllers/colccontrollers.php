<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class colccontrollers extends Controller
{
    //
    function save(Request $req){
        $data=new user;
        $data->email = $req->email;
        $data->password = $req->password;
        echo $data->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prf_profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AddUserController extends Controller
{
    //
    function addUser(Request $req){
        
        request()->validate([
            'username'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user= new prf_profile;
        $user = prf_profile::where(['prf_email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {   
            $user= new prf_profile;
            $user->prf_first_name=$req->prenom ;
            $user->prf_last_name=$req->username;
            $user->prf_email=$req->email;
            $user->prf_password=$req->password;
            $user->id_typeuser=$req->type_user;
            $user->save();
            $req->session()->put('first_name' , $user['prf_first_name']);
            $req->session()->put('last_name' , $user['prf_last_name']);
            
            return redirect('/connected');
        }
        else{
            $req->session()->flash('notification', 'Your email and password is already exist!');
            return redirect('/registre');
        }
        return redirect('/connected');
    }
   
}

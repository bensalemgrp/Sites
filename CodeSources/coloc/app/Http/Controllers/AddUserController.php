<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AddUserController extends Controller
{
    //
    function addUser(Request $req){
        
        $user= new User;
        $req->session()->put('nom_connected' , $user['username']);
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {   
            $user= new User;
            $user->username=$req->username;
            $user->email=$req->email;
            $user->password=$req->password;
            $user->TypeUser=$req->type_user;
            $user->save();
            $req->session()->put('user',$user);
            $req->session()->put('nom_connected' , $user['username']);
            return redirect('/connected');
        }
        else{
            $req->session()->flash('notification', 'Your email and password is already exist!');
            return redirect('/registre');
        }
        return redirect('/connected');
    }
}

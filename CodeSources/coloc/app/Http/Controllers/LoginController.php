<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function VerifierUser(Request $req){
        
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {  
             $req->session()->flash('notification', 'you do not have an account with this email !');
            return redirect('/mdp_oublié');
        }
        else{
            $req->session()->put('user',$user);
            $req->session()->put('verifier_email' , $user['email']);
            return redirect('/code');
        }
    }
    function login(Request $req){
        
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->password))
        {   
            
            $req->session()->flash('notification', 'Your email and password is does exist!');
            return redirect('/login');
        }
        else{
            $req->session()->put('user',$user);
            $req->session()->put('nom_connected' , $user['username']);

            return redirect('/connected');
        }
    }
}

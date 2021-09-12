<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prf_profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Fortify;

class LoginController extends Controller
{
    //
    function VerifierUser(Request $req){
        
        $user = prf_profile::where(['prf_email'=>$req->email])->first();
        if(!$user || Hash::check($req->password,$user->prf_password))
        {  
             $req->session()->flash('notification', 'you do not have an account with this email !');
            return redirect('/mdp_oublié');
        }
        else{
            $req->session()->put('user',$user);
            $req->session()->put('verifier_email' , $user['prf_email']);
            return redirect('/code');
        }

    }
    function login(Request $req){
        
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = prf_profile::where(['prf_email'=>$req->email])->first();
        
         
        if(!$user || Hash::check($req->password,$user->prf_password))
        {    
            $req->session()->flash('notification', 'Your email is not exist!');
            return redirect('/login');
        }
        else{
           if ($user['prf_password']==$req['password']) {
            $req->session()->put('user',$user);
            $req->session()->put('first_user_name' , $user['prf_first_name']);
            $req->session()->put('last_user_name' , $user['prf_last_name']);
            $req->session()->put('first_name' , $user['prf_first_name']);
            $req->session()->put('last_name' , $user['prf_last_name']);
            $req->session()->put('prf_email' , $user['prf_email']);
            return redirect('/connected');

            if ($user['id_typeuser']=='Particulier') {
                $req->session()->put('profile','profile_particulier');
            }else{
                $req->session()->put('profile','profile_agence');
            }
            
           }else{
            $req->session()->flash('notification', 'Your password is incorrect !');
            return redirect('/login');
           }
        }
        
    }
    
    
}

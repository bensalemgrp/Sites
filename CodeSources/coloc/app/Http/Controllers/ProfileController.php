<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prf_profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
class ProfileController extends Controller
{
    //
    
    function ProfileParticulier(Request $req){
        request()->validate([
            'email'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'dateN'=>'required',
            'Sexe'=>'required',
            'activiter'=>'required',
            'telephone'=>'required',
            'addresse'=>'required',
            /*'pays'=>'required',
            'departement' =>'required',
            'ville'=>'required',*/
        ]);
        $user= DB::select('SELECT * from prf_profiles ');
        $user = prf_profile::where(['prf_email'=>$req->email])->first();
        if(!$user )
        {     
            $req->session()->flash('notification', 'Your email and password is does exist!');
        }else{
            $profile=DB::table('prf_profiles')
            ->where('prf_email', $req->email)
            ->update(['prf_first_name'=>$req->nom,
                    'prf_last_name' => $req->prenom,
                    'prf_phone' => $req->telephone,
                    'prf_adress' => $req->addresse,
                    'prf_date_naissance' => $req->dateN, 
                    'prf_sexe' => $req->Sexe,
                    'prf_activity' => $req->activiter,
                    'prf_nameofcompany'=>$req->NomEntreprise,
                    'prf_NumSIRN'=>$req->NumeroSiren,
                    'prf_siteweb'=>$req->Siteweb,
                ]);
        
        
            
            $req->session()->put('first_name'     , $req->nom);
            $req->session()->put('last_name'   , $req->prenom);
            $req->session()->put('telephone'     ,$req->telephone);
            $req->session()->put('NumeroSiren' ,$req->NumeroSiren);
        }
        return redirect()->back();
    }  
    function ProfileAgence(Request $req){
        request()->validate([
            'email'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'dateN'=>'required',
            'Sexe'=>'required',
            'activiter'=>'required',
            'telephone'=>'required',
            'addresse'=>'required',
            /*'pays'=>'required',
            'departement' =>'required',
            'ville'=>'required',*/
        ]);
        $user= DB::select('SELECT * from prf_profiles ');
        $user = prf_profile::where(['prf_email'=>$req->email])->first();
        if(!$user )
        {     
            $req->session()->flash('notification', 'Your email and password is does exist!');
        }else{
            $profile=DB::table('prf_profiles')
            ->where('prf_email', $req->email)
            ->update(['prf_first_name'=>$req->nom,
                    'prf_last_name' => $req->prenom,
                    'prf_phone' => $req->telephone,
                    'prf_adress' => $req->addresse,
                    'prf_date_naissance' => $req->dateN, 
                    'prf_sexe' => $req->Sexe,
                    'prf_activity' => $req->activiter,
                    'prf_nameofcompany'=>$req->NomEntreprise,
                    'prf_NumSIRN'=>$req->NumeroSiren,
                    'prf_siteweb'=>$req->Siteweb,
                ]);
        
                return$req->NumeroSiren;
            
            $req->session()->put('first_name'  , $req->nom);
            $req->session()->put('last_name'   , $req->prenom);
            $req->session()->put('telephone'   ,$req->telephone);
            $req->session()->put('NumeroSiren' ,$req->NumeroSiren);
        }
        return redirect('/profile_agence');

    }  
}

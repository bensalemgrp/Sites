<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    
    function ProfileParticulier(Request $req){
        
        $user= DB::select('SELECT * from users ');
        
        $username=$req->nom;
        $prenom=$req->prenom;
        $dateN=$req->dateN;
        $Sexe=$req->Sexe;
        $activiter=$req->activiter;
        $pays=$req->pays;
        $addresse=$req->addresse;
        $telephone=$req->telephone;
        
        $profile=DB::table('users')
        ->where('email', $req->email)
        ->update(['prenom' => $prenom,
                'dateN' => $dateN, 
                'Sexe' => $Sexe,
                'activiter' => $activiter,
                'pays' => $pays,
                'addresse' => $addresse,
                'telephone' => $telephone,
                
            ]);
        $req->session()->put('user',$user);
        $user= DB::select('SELECT * from users ');
        
        $req->session()->put('prenom'     , $prenom);
        $req->session()->put('username'   , $username);
        $req->session()->put('email'     , $req->email);
        $req->session()->put('telephone'     , $telephone);
    
        return redirect('/profile_particulier');
    }  
    function ProfileAgence(Request $req){
        
        $user= DB::select('SELECT * from users ');
       
        $username=$req->nom;
        $prenom=$req->prenom;
        $dateN=$req->dateN;
        $Sexe=$req->Sexe;
        $activiter=$req->activiter;
        $pays=$req->pays;
        $addresse=$req->addresse;
        $telephone=$req->telephone;
        $NomEntreprise=$req->NomEntreprise;
        $NumeroSiren=$req->NumeroSiren;
        
        $profile=DB::table('users')
        ->where('email', $req->email)
        ->update(['prenom' => $prenom,
                'dateN' => $dateN, 
                'Sexe' => $Sexe,
                'activiter' => $activiter,
                'pays' => $pays,
                'addresse' => $addresse,
                'telephone' => $telephone,
                'NomEntreprise'=>$NomEntreprise,
                'NumeroSiren'=>$NumeroSiren
            ]);
        $req->session()->put('user',$user);
        $user= DB::select('SELECT * from users ');
            
        $req->session()->put('prenom'     , $prenom);
        $req->session()->put('username'   , $username);
        $req->session()->put('email'     , $req->email);
        $req->session()->put('telephone'     , $telephone);
        $req->session()->put('NumeroSiren'    , $NumeroSiren);
    
        return redirect('/profile_agence');
    }  
}

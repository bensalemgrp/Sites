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
    public function Profile(Request $req){
        
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image->extension();  
         
            $request->image->move(public_path('images'), $imageName);
      
            /* Store $imageName name in DATABASE from HERE */
        
            return back()
                ->with('success','You have successfully upload image.')
                ->with('image',$imageName); 
        
    }
    function ProfileParticulier(Request $req){
        
        $user= DB::select('SELECT * from prf_profiles ');
        $user = prf_profile::where(['prf_email'=>$req->email_user])->first();
        if(!$user )
        {     
            $req->session()->flash('notification', 'Your email is incorrect!');
        }else{
            $profile=DB::table('prf_profiles')
            ->where('prf_email', $req->email)
            ->update(['prf_first_name'=>$req->nom,
                    'prf_last_name' => $req->prenom,
                    'prf_phone' => $req->telephone,
                    'prf_adress' => $req->addresse,
                    'prf_ville' => $req->ville,
                    'prf_date_naissance' => $req->dateN,  
                    'prf_sexe' => $req->Sexe,
                    'prf_activity' => $req->activiter,
                
                ]);
            $req->session()->put('first_name'     , $req->prenom);
            $req->session()->put('last_name'   , $req->username);
            $req->session()->put('telephone'     , $req->telephone);
        }
        
        $req->session()->put('first_name' , $user['prf_first_name']);
        $req->session()->put('last_name' , $user['prf_last_name']);
       
        
    
        return redirect('/profile_particulier');
    }  
    function ProfileAgence(Request $req){
        
        $user= DB::select('SELECT * from prf_profiles ');
       
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
        
        $profile=DB::table('prf_profiles')
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
        $user= DB::select('SELECT * from prf_profiles');
            
        $req->session()->put('prenom'     , $prenom);
        $req->session()->put('username'   , $username);
        $req->session()->put('email'     , $req->email);
        $req->session()->put('telephone'     , $telephone);
        $req->session()->put('NumeroSiren'    , $NumeroSiren);
    
        return redirect('/profile_agence');
    }  
    public function profile_img(){
        
    }
}

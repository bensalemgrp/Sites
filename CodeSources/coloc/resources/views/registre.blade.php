<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_registre.css">
    <title>inscription</title>
</head>
<body>
@extends('master')
@section('content')
<div class="formulaire">
    <form action="registre" method="POST">
        @csrf
        <p class="erreur">{{session('notification')}}</p><br>
        <p class="titre"><a href="login" class="titre_login" >Connection </a>  &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="" class="titre_registre"> Inscription</a></p>
        <hr>
        
        <div class="sous_formulaire">
            <ul class="user_id">
               <li> 
                    <label for="" class="nom_registre"> Nom</label><br><br>
                    @error('username')
                        <div class="invalid-feedback_user">
                            {{$errors->first('username')}}
                        </div>
                    @enderror
                    <input type="text"  placeholder="Nom" name="username" class="input @error('username') is_invalid @enderror"><br>
                </li>
                <li> 
                     <label for="" class="prenom_registre">Prenom</label><br><br>
                     @error('prenom')
                         <div class="invalid-feedback_user">
                             {{$errors->first('prenom')}}
                         </div>
                     @enderror
                     <input type="text"  placeholder="prenom" name="prenom" class="input @error('prenom') is_invalid @enderror"><br>
                 </li>
            </ul>

            <label for="" class="mail_registre"> Email</label><br><br>
            @error('email')
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            @enderror
            <input type="text"  placeholder="abc@exemle.com" name="email" class="input @error('email') is_invalid @enderror"><br>
        
            <label for="" class="mdp_registre">Mot de passe</label><br><br>
            @error('password')
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            @enderror
            <input type="password"  placeholder="Mot de passe" name="password" class="input @error('password') is_invalid @enderror"><br>
            
            <div class="span">
                
                <input  type="radio" id="particulier_radio" name="type_user" value="Particulier" checked>
                <label class="particulier" name="Particulier">Particulier</label>
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <input  type="radio"  style="background-color: #000;" id="agence_radio" name="type_user" value="Agence">
                <label class="agence" name="Agence">Agence</label><br>
            </div>
               
            <button ><a href="home_connected"><b> Inscription</b></a></button>
        </div>
    </form>

   

</div>
@endsection
</body>
</html>
	


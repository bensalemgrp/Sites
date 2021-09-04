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
        <p class="titre"><a href="login" class="titre_login" >Connection </a>  &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="" class="titre_registre"> Inscription</a></p>
        <hr>
        <div class="sous_formulaire">
            
            <p class="erreur">{{session('notification')}}</p>
            <label for="" class="nom_registre"> Nom</label><br><br>
            <input type="text"  placeholder="Nom" name="username"><br>
            

            <label for="" class="mail_registre"> Email</label><br><br>
            <input type="text"  placeholder="abc@exemle.com" name="email"><br>
        
            <label for="" class="mdp_registre">Mot de passe</label><br><br>
            <input type="password"  placeholder="Mot de passe" name="password"><br>
            
            <div class="span">
                
                <input  type="radio" id="particulier_radio" name="type_user" value="Particulier" checked>
                <label class="particulier">Particulier</label>
                &nbsp;&nbsp; &nbsp;&nbsp;
                <input  type="radio"  style="background-color: #000;" id="agence_radio" name="type_user" value="Agence">
                <label class="agence">Agence</label><br>
                   
                <button ><a href="home_connected"><b> Inscription</b></a></button>
            </div>
        </div>
    </form>

   

</div>
@endsection
</body>
</html>
	


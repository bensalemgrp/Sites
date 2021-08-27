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
    <p class="titre"><a href="login" class="titre_login" >Connection </a>  &nbsp;&nbsp;&nbsp;&nbsp;
       <a href="" class="titre_registre"> Inscription</a></p>
   <hr>
   <div class="sous_formulaire">
        <label for="" class="nom_registre"> Nom</label><br><br>
        <input type="text"  placeholder="Nom"><br>
        

        <label for="" class="mail_registre"> Email</label><br><br>
        <input type="text"  placeholder="abc@exemle.com"><br>
    
        <label for="" class="mdp_registre">Mot de passe</label><br><br>
        <input type="text"  placeholder="Mot de passe"><br>
        
        <div class="span">
            <label class="agence">
                <input  type="radio" style="background-color: #000;" id="agence_span" name="a">
                <span >Agence </span>
            </label>
            
            <label class="particulier">
                <input  type="radio" id="particulier_span" name="a">
                <span >Particulier </span>
            </label><br>
            <button ><a href="home_connected"><b> Inscription</b></a></button>
        </div>
    </div>
</div>
@endsection
</body>
</html>
	


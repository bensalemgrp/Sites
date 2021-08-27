<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_login.css">
    <title>connecter</title>
</head>
<body class="body_formulaire">
@extends('master')
@section('content')
<form action="submit" method="POST">
    @csrf
    <div class="formulaire">
        <p class="titre" ><a href="" class="titre_login"> Connection </a>&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="registre"  class="titre_registre"  >Inscription</a> </p>
        <hr>
        <div class="sous_formulaire">
            <label for="" class="mail_login"> Email</label><br>
            <input type="email" name="email"  placeholder="abc@exemle.com"><br>
        
            <label for="" class="mdp_login">Mot de passe</label><br>
            <input type="password" name="password"  placeholder="mot de passe"><br>
            <div>
                <p class="mdp_oublié" ><a href="mdp" ><b> Mot de passe oublié?</b></a></p><br>
                <button type="submit"><a href="home_connected"><b>Connecter</b> </a></button>
            </div>
        </div>
    </div>
</form>
@endsection
</body>
</html>
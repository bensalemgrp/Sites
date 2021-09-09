<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<form action="login" method="POST">
    @csrf
    <div class="formulaire">
        <p class="erreur">{{session('notification')}}</p><br>
        <p class="titre" ><a href="" class="titre_login"> Connection </a>&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="registre"  class="titre_registre"  >Inscription</a> </p>
        <hr>
        <div class="sous_formulaire">
            
            <label for="" class="mail_login"> Email</label><br>
            @error('email')
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            @enderror
            <input type="email" name="email" class="input @error('email') is_invalid @enderror"  placeholder="abc@exemle.com"><br>
            
           
            <label for="" class="mdp_login">Mot de passe</label><br>
            @error('password')
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
            @enderror
            <input type="password" name="password" class="input @error('password') is_invalid @enderror" placeholder="mot de passe"><br>
            

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
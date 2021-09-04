<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_mdp_oublié.css">
    <title>mdp</title>
</head>
<body class="body_formulaire">
@extends('master')
@section('content')
<div class="formulaire">
    <form action="mdp_oublié" method="POST">
        @csrf
        <h3 > Mot de passe oublié </h3>
        <p > Entrez l'adresse e‑mail ou votre numéro associée à votre compte <br><b style="color: red">{{session('notification')}}</b> </p>
        
        <div class="sous_formulaire">
            <label for="" class="mail"> Email / numéro</label><br>
            <input type=""  placeholder="Email / numéro ..." name="email"><br>
            <button type="submit"><a href="code"> continuer</a></button>
            
        </div>
    </form>
</div>
@endsection
</body>
</html>
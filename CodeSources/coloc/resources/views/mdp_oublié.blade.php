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
    
    <h3 > Mot de passe oublié </h3>
    <p > Entrez l'adresse e‑mail ou votre numéro associée à votre compte</p>
        
    <div class="sous_formulaire">
        <label for="" class="mail"> Email / numéro</label><br>
        <input type=""  placeholder="Email / numéro ..."><br>
        <button type="submit"><a href="code"> continuer</a></button>
        
    </div>
</div>
@endsection
</body>
</html>
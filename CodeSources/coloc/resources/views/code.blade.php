<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_code.css">
    <title>mdp</title>
</head>
<body class="body_formulaire">
@extends('master')
@section('content')

<div class="formulaire">
    
    <h3 > Code de vérification</h3>
    <p >La sécurité de vos informations personnelles est essentielle. Nous vérifions 
        donc que vous êtes bien à l'origine de cette demande</p>
        
    <div class="sous_formulaire">
        
        <button type="submit"><a href="saisir_code">Recevoir un code de vérification</a></button>
    </div>
</div>
@endsection
</body>
</html>

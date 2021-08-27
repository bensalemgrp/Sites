<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_saisir_code.css">
    <title>mdp</title>
</head>
<body class="body_formulaire">
@extends('master')
@section('content')

<div class="formulaire">
    <h3 >Modifier mon mot de passe</h3>
    <p >Saisissez le code de vérification reçu sur l'adresse e‑mail <b>exemple@123.com</b></p>
    <ul class="codes">
        <li><input type="" placeholder="0"></li>
        <li><input type="" placeholder="0"></li>
        <li><input type="" placeholder="0"></li>
        <li><input type="" placeholder="0"></li>
        <li><input type="" placeholder="0"></li> 
        <li><input type="" placeholder="0"></li> 
    </ul><br>
    <div class="renvoyer_code" >
        <p >Je n'ai rien reçu <a href=""><b> Me renvoyer le code</b></a></p>
    </div>
    <button type="submit"><a href="nouveau_mdp"> continuer</a></button>
   
</div>
@endsection
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_nouveau_mdp.css">
    <title>mdp</title>
</head>
<body class="body_formulaire">
@extends('master')
@section('content')
<div class="formulaire">
    
    <h3 > Mot de passe oublié </h3>
        
    <div class="sous_formulaire">
        <label for="" class="mdp">Nouveau mot de passe</label><br>
        <input type="password"  placeholder="Nouveau mot de passe"><br>
        <button type="submit"><a href="login">Reconnecter</a></button>
        
    </div>
</div>
@endsection
</body>
</html>
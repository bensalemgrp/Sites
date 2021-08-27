<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_profile_particulier.css">
    <title>connecter</title>
</head>
<body >
@extends('master')
@section('content')    
<div class="profile">
    <div class="cercle"><a href=""><i class="fas fa-camera "></i></a></div>
   
</div>
<div class="formulaire_profile">
    <ul class="ul1">
        <li class="li1"> 
            <ul class="sous_formulaire1">
                <li><label for="" class="Prénom"> Prénom</label></li>
                <li><label for="" class="nom"> Nom</label></li>
                <li><label for="" class="nom">Date de naissance</label></li>
                <li><label for="" class="nom">Sexe</label></li>
                <li><label for="" class="nom">Activité</label></li>
                <li><label for="" class="nom">Pays </label></li>
                <li><label for="" class="nom">E-mail</label></li>
                <li><label for="" class="nom">Téléphone (facultatif)</label></li>
            </ul>
        </li> 
        <li class="li2">
            <ul class="sous_formulaire2">
                <li><input type="text"  placeholder="Prénom"></li>
                <li><input type="text"  placeholder="Nom"></li>
                <li><input type="date"  placeholder="Date de naissance"></li>
                <li><input type="nom"></li>
                <li><input type="" ></li>
                <li><input type="nom"  placeholder="Nom"></li>
                <li><input type="nom"  placeholder="exemple@123.com"></li>
                <li><input type="nomber"></li>
            </ul>
        </li>
    </ul>
    <div class="Désactiver_Supprimer">
        <ul>   
            <li><input type="checkbox"><label for="">Désactiver</label></li>
            <li><input type="checkbox"><label for="">Supprimer</label></li>
        </ul> 
    </div>
</div>

<div class="pub"></div>
@endsection
</body>
</html>
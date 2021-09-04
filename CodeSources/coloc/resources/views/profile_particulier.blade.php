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
@extends('master_connected')
@section('content')   

    <div class="profile">
        <form action="profile_particulier" method="POST">
        @csrf 
        <ul class="particulier">
            <li><div class="cercle"><a href=""><i class="fas fa-camera "></i></a></div></li>
            <li>
                <ul class="donner_particulier">
                    <li><p id="label"> Prénom: </p>            <p class="information_particulier">{{session('prenom')}}</p></li>
                    <li><p id="label"> Nom:</p>                <p class="information_particulier">{{session('username')}}</p></li>
                    <li><p id="label"> email:</p>               <p class="information_particulier">{{session('email')}}</p></li>
                    <li><p id="label"> Téléphone (facultatif):</p> <p class="information_particulier">{{session('telephone')}}</p></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="formulaire_profile_particulier">
        <ul class="ul1">
            <li class="li1"> 
                <ul class="sous_formulaire1">
                    {{session('notification')}}
                    <li><label for="" class="nom"> email</label></li>
                    <li><label for="" class="nom"> Nom</label></li>
                    <li><label for="" class="Prénom"> Prénom</label></li>
                    <li><label for="" class="nom">Date de naissance</label></li>
                    <li><label for="" class="nom">Sexe</label></li>
                    <li><label for="" class="nom">Activité</label></li>
                    <li><label for="" class="nom">Pays </label></li>
                    <li><label for="" class="nom">addresse </label></li>
                    <li><label for="" class="nom">Téléphone (facultatif)</label></li>
                </ul>
            </li> 
            <li class="li2">
                <ul class="sous_formulaire2">
                    <li><input name="email" type="email"  placeholder="email"></li>
                    <li><input name="nom" type="text"  placeholder="Nom"></li>
                    <li><input name="prenom" type="text"  placeholder="Prénom"></li>
                    <li><input name="dateN" type="date"  placeholder="Date de naissance"></li>
                    <li><input name="Sexe" type="nom"></li>
                    <li><input name="activiter" type="text" ></li>
                    <li><input name="pays" type="text" ></li>
                    <li><input name="addresse" type="text"  placeholder=""></li>
                    <li><input name="telephone" type="nomber"></li>
                </ul>
            </li>
        </ul>
        <button type="submit" class="enregistre">Enregistre</button>
        <div class="Désactiver_Supprimer">
            <ul>   
                <li><input type="checkbox" ><label for="">Désactiver</label></li>
                <li><input type="checkbox"><label for="">Supprimer</label></li>
            </ul> 
        </div>
    </form>
    </div>
    

@endsection
</body>
</html>
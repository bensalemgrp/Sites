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
<div class="box_desactiver " id="desactiver">
    <i class="fas fa-exclamation-triangle"></i>
    <p class="text_desactiver">voulez-vous désactivé votre profile?<br>
        vos profile seront invisible si vous le désactiver </p><br>
        <button class="botton_desactiver" type="submit">Désactivé</button>
        <a href=""><button class="botton_annuler" type="submit"> Annuler</button></a>
</div>
    <div class="profile">
        <form action="profile_particulier" method="POST" enctype="multipart/form-data">
        @csrf 
        <ul class="particulier">
            
            <li>
                <div class="cercle">
                    <input type="file" class="my_file" name="photo">
                </div>
            </li>
            <li>
                <table class="donner_particulier">
                    <tr>
                        <td>Prénom:</td>
                        <td>{{session('first_name')}}</td>
                    </tr>
                    <tr>
                        <td>Nom:</td>
                        <td>{{session('last_name')}}</td>
                    </tr>
                    <tr >
                        <td>email:</td>
                        <td name="email_user">{{session('prf_email')}}</td>
                    </tr>
                    <tr>
                        <td> Téléphone (facultatif):</td>
                        <td >{{session('telephone')}}</td>
                    </tr>
                </table>
            </li>
        </ul>
        
    </div>
    
    <div class="formulaire_profile_particulier">
        <p class="erreur">{{session('notification')}}</p><br>
        <ul class="ul1">
            <li class="li1"> 
                <ul class="sous_formulaire1">
                    
                    <li><label for="" class="nom"> Email</label></li>
                    <li><label for="" class="nom"> Nom</label></li>
                    <li><label for="" class="Prénom"> Prénom</label></li>
                    <li><label for="" class="nom">Date de naissance</label></li>
                    <li><label for="" class="nom">Sexe</label></li>
                    <li><label for="" class="nom">Activité</label></li>
                    <li><label for="" class="nom">Ville </label></li>
                    <li><label for="" class="nom">addresse </label></li>
                    <li><label for="" class="nom">Téléphone (facultatif)</label></li>
                </ul>
            </li> 
            <li class="li2">
                <ul class="sous_formulaire2">
                    <li><input name="email" type="text"  placeholder="{{session('prf_email')}}"></li>
                    <li><input name="nom" type="text"  placeholder="Nom"></li>
                    <li><input name="prenom" type="text"  placeholder="Prénom"></li>
                    <li><input name="dateN" type="date"  placeholder="Date de naissance"></li>
                    <li><input name="Sexe" type="nom"></li>
                    <li><input name="activiter" type="text" ></li>
                    <li><input name="ville" type="text" ></li>
                    <li><input name="addresse" type="text"  placeholder=""></li>
                    <li><input name="telephone" type="nomber"></li>
                </ul>
            </li>
        </ul>
        <button type="submit" class="enregistre">Enregistre</button>
        <div class="Désactiver_Supprimer">
            <ul>   
                <a href="#desactiver" style="text-decoration: none;color:black"><li><input type="checkbox" ><label for="">Désactiver</label></li></a>
                <li><input type="checkbox"><label for="">Supprimer</label></li>
            </ul> 
        </div>
    </form>
    </div>
    

@endsection
</body>
</html>
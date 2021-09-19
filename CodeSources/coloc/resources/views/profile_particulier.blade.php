<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_profile.css">
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

<div class="box_desactiver " id="supprimer">
    <i class="fas fa-exclamation-triangle"></i>
    <p class="text_desactiver">voulez-vous supprimer votre profile?<br>
        vos profile seront introuvable si vous le supprimer </p><br>
        <button class="botton_desactiver" type="submit">Désactivé</button>
        <a href=""><button class="botton_annuler" type="submit"> Annuler</button></a>
</div>

    
<form action="profile_particulier" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="profile">
        <ul class="particulier">
            
            <li>
                <div class="cercle">
                    <div class="image-preview" id="imagePreview">
                        <img  src="" alt="Image Preview" class="image-preview__image">
                        <input type="file" name="inpFile" id="inpFile">
                    </div>
                </div>
                <button class="send_image">send</button>
                <script src="/user_logo.js"></script>
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
        <table class="formulaire">
            <tr>
                <td>Email</td>
                <td>
                    <input name="email" class="@error('email') is_invalid @enderror" type="text"  placeholder="{{session('prf_email')}}">
                    @error('email')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                        {{$errors->first('email')}}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td> Nom</td>
                <td><input name="nom" class="@error('nom') is_invalid @enderror" type="text"  placeholder="Nom">
                    @error('nom')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                        <p>{{$errors->first('nom')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td> Prénom</td>
                <td>
                    <input name="prenom"class="@error('prenom') is_invalid @enderror" type="text"  placeholder="Prénom">
                    @error('prenom')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                      <p> {{$errors->first('prenom')}} !</p> 
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td>
                    <input name="dateN" class="@error('dateN') is_invalid @enderror" type="date"  placeholder="Date de naissance">
                    @error('dateN')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('dateN')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td>
                    <input name="Sexe" class="@error('Sexe') is_invalid @enderror" type="nom">
                    @error('Sexe')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('Sexe')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Activité</td>
                <td>
                    <input name="activiter"class="@error('activiter') is_invalid @enderror" type="text" >
                    @error('activiter')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('activiter')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Téléphone (facultatif)</td>
                <td>
                    <input name="telephone"class="@error('telephone') is_invalid @enderror" type="nomber">
                    @error('telephone')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('telephone')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>addresse </td>
                <td><input name="addresse"class="@error('addresse') is_invalid @enderror" type="text"  placeholder="">
                    @error('addresse')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('addresse')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <select name="pays" id="" class="@error('pays') is_invalid @enderror">
                        <option value="" selected disabled>pays</option>
                    </select>
                    @error('pays')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('pays')}}!</p>
                    </div>
                    @enderror
                </td>
                <td>
                    <select name="departement" id=""class="@error('departement') is_invalid @enderror" >
                        <option value="" selected disabled>departement</option>
                    </select>
                    @error('departement')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('departement')}}!</p>
                    </div>
                    @enderror
                </td>
                <td>
                    <select name="ville" id="" class="@error('ville') is_invalid @enderror">
                        <option value="" selected disabled>ville</option>
                    </select>
                    @error('ville')
                    <div class="invalid-feedback" style="color: red;font-size:12px;">
                       <p> {{$errors->first('ville')}}!</p>
                    </div>
                    @enderror
                </td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td><a href="#desactiver" style="text-decoration: none;color:black">Désactiver</a></td>
                <td><a href="#supprimer" style="text-decoration: none;color:black">Supprimer</a></td>
            </tr>
            <button type="submit" class="enregistreP">Enregistre</button>
        </table>        
                   
        
         
    </div>
</form>

@endsection
</body>
</html>
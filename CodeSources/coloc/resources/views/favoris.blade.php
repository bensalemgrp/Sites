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
<form action="profile_particulier" method="POST">
    @csrf 
    <div class="profile">
        <ul class="particulier">
            <li><div class="cercle"><a href=""><i class="fas fa-camera "></i></a></div></li>
            <li>
                <ul class="donner_particulier">
                    <li><p id="label"> Prénom: </p>            <p class="information">{{session('prenom')}}</p></li>
                    <li><p id="label"> Nom:</p>                <p class="information">{{session('username')}}</li>
                    <li><p id="label"> email:</p>               <p class="information">{{session('email')}}</li>
                    <li><p id="label"> Date de naissance:</p>   <p class="information">{{session('dateN')}}</li>
                    <li><p id="label"> Sexe:</p>               <p class="information">{{session('Sexe')}}</li>
                    <li><p id="label"> Activité:</p>            <p class="information">{{session('activiter')}}</li>
                    <li><p id="label"> Pays:</p>                <p class="information">{{session('pays')}}</li>
                    <li><p id="label"> addresse:</p>            <p class="information">{{session('addresse')}}</li>
                    <li><p id="label"> Téléphone (facultatif):</p> <p class="information">{{session('telephone')}}</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="formulaire_profile"></div>
</form>

@endsection
</body>
</html>
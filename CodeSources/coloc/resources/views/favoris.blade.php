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
<form action="profile_particulier" method="POST">
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
    <div class="favoris_contenu" >
        <div class="favoris_titre"><h3>Favoris</h3></div>
       
    </div>
</form>

@endsection
</body>
</html>
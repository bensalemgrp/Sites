<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style_header.css">
    <script src="https://kit.fontawesome.com/a8768abbf0.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class="header1">
        <form action="header_connected" method="POST">
            @csrf
        <ul class="header1-ul">
            <li>
                <div class="deposer">
                    <a href="annonce" ><label  >Déposer une annonce</label></a>
                </div>
            </li> 
            <li>
                <input type="" id="rech" placeholder="rechercher..." >
                <i class="fab fa-sistrix"></i>
            </li>
            <li>
                <ul class="header1-connect">
                    <li><i class="fas fa-heart"></i></li>
                    <li><i class="fas fa-bell"></i></li>
                    <li>
                        <a >
                            <i class="fas fa-user fa-customize"></i>
                            <a href="#demo"><p id="connect2">{{session('first_user_name') }} {{session('last_user_name') }} </p></a><br>
                            
                        </a>
                    </li>
                </ul>
                
            </li>
        </ul>
        
    </form>
    <a href="#">
    <div class="box" id="demo">
        <hr class="hr_user_left">
        <hr class="hr_user_right">
        <div class="hr">
            <div class="img_utilisateur">
                <i class="fas fa-user fa-customize" id="fa-user"></i>
            </div>
        </div>
       
            <div id="profile"><a href="{{session('profile')}}" >Profile</a></div><br>
            <div id="deconnecter"><a href="/">Déconnecter</a></div>
        </div>
    </div></a>
    
</body>
</html>
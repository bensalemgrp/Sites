<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style_home.css">
    <title>home</title>
</head>
<body>
@extends('master')
@section('content')
    <div class="body">
        <div>
            <ul class="filtre">
                <li>
                    <div class="multiselect1">
                        <input type="" id="recherche2" placeholder="rechercher..." >
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox1" onclick="showcheckboxes1()">
                            <select name="" id="">
                                <option value="" id="option">Tous loyers</option>
                            </select>
                            
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes1">
                            <label for="">Budget </label>
                            <input type="number" id="min" placeholder="Min">
                            <input type="number" id="max" placeholder=" Max">
                        </div><br>
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox2" onclick="showcheckboxes2()">
                            <select name="" id="">
                                <option value="">Tous types</option>
                            </select>
                            
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes2">
                            <label for="" id="">Annonce</label>
                            <label for=""><input type="checkbox" id="">colocations </label>
                            <label for=""><input type="checkbox" id="">sous-locations </label>
                            <label for=""><input type="checkbox" id="">chambre chez l'habitant </label>
                            <label for=""><input type="checkbox" id="">locations </label>
                            <label for=""><input type="checkbox" id="">h??bergements provisoires </label><br>
                            
                            <label for=""id="">Annonceurs </label>
                            <label for=""><input type="checkbox" id="">locataire </label>
                            <label for=""><input type="checkbox" id="">propri??taires </label>
                            <label for=""><input type="checkbox" id="">agences </label>
                            <label for=""><input type="checkbox" id="">r??sidence </label>
                            <label for=""><input type="checkbox" id="">sites patrtenaires </label><br>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox3" onclick="showcheckboxes3()">
                            <select name="" id="">
                                <option value="">Toutes disponibilit??s</option>
                            </select>
                            
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes3">
                            <input type="date" id="">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox4" onclick="showcheckboxes4()">
                            <select name="" id="">
                                <option value="">Tous occupants</option>
                            </select>
                            
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes4">
                            <label for=""><input type="checkbox" id="">logement vide</label>
                            <label for=""><input type="checkbox" id="">1 occupant </label>
                            <label for=""><input type="checkbox" id="">2 occupant </label>
                            <label for=""><input type="checkbox" id="">3 occupant </label>
                            <label for=""><input type="checkbox" id="">4 occupant </label>
                            <label for=""><input type="checkbox" id="">5 occupant </label>
                            <label for=""><input type="checkbox" id="">6 occupant et + </label><br>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox5" onclick="showcheckboxes5()">
                            <select name="" id="">
                                <option value="">Tous logements</option>
                            </select>
                    
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes5">
                            <label for=""><input type="checkbox" id="">Appartement</label>
                            <label for=""><input type="checkbox" id="">Maisons</label>
                            <label for=""><input type="checkbox" id="">Studios</label>
                            <label for=""><input type="checkbox" id="">Duplex</label>
                            <label for=""><input type="checkbox" id="">Lofts/ateliers</label>
                            <label for=""><input type="checkbox" id="">Manoirs/hotels particuller</label>
                            <label for=""><input type="checkbox" id="">Chalets</label>
                            <label for=""><input type="checkbox" id="">Bateaux/p??niches</label>
                            <label for=""><input type="checkbox" id="">Fermes</label>
                            <label for=""><input type="checkbox" id="">Immeubles</label><br>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="multiselect">
                        <div class="selectbox6" onclick="showcheckboxes6()">
                            <select name="" id="">
                                <option value="" >Tous types</option>
                            </select>
                            
                            <div class="overselect"></div>
                        </div>
                        <div id="checkboxes6">
                            <label for="" id="">Nombre de pi??ces</label>
                            <div>
                                <label for=""><input type="checkbox" id="">1 pi??ce</label>
                                <label for=""><input type="checkbox" id="">2 pi??ce</label>
                                <label for=""><input type="checkbox" id="">3 pi??ce</label>
                                <label for=""><input type="checkbox" id="">4 pi??ce</label>
                            </div>
                            <div>
                                <label for=""><input type="checkbox" id="">5 pi??ce</label>
                                <label for=""><input type="checkbox" id="">6 pi??ce</label>
                                <label for=""><input type="checkbox" id="">7 pi??ce</label>
                                <label for=""><input type="checkbox" id="">8 pi??ce</label>
                            </div>
                            <div class="surface">
                                <label for="" id="titre">Surface du logement</label>
                                <input type="number" id="min" placeholder="Min">
                                <input type="number" id="max" placeholder="Max">
                            </div>
                            <div class="surface">
                                <label for="" id="titre">Surface de la chambre</label>
                                <input type="number" id="min" placeholder="Min">
                                <input type="number" id="max" placeholder="Max">
                            </div>
                            <div class="surface">
                                <label for="" id="">Date de publication</label>
                                
                                <select name="" id="select_date">
                                    <option value="">Tout dates</option>
                                    <option value="">Moins d'un mois </option>
                                    <option value="">Moins de 2 semaines</option>
                                    <option value="">Moins d'une semaine</option>
                                    <option value="">Moins de 3 jours</option>
                                    <option value="">Ajout??es aujourd'hui</option>
                                </select>
                            </div>
                            
                            <label for=""id="">Commodit??s </label>
                            <label for=""><input type="checkbox" id="">Meubl?? </label>
                            <label for=""><input type="checkbox" id="">Accessibilit?? handicap??</label>

                            <label for="" id="">R??gles Particuli??res </label>
                            <label for=""><input type="checkbox" id="">Filles uniquement </label>
                            <label for=""><input type="checkbox" id="">Gar??ons uniquement </label>
                            <label for=""><input type="checkbox" id="">Fumeurs autoris??s</label>
                            <label for=""><input type="checkbox" id="">Animaux autoris??s </label>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
   
        <div class="all_publicit??s">
            <div class="p1"></div>
            <div class="p2"></div>
            <div class="p3"></div>
            <div class="p4"></div>
            <div class="contenu">
                <div class="annonce1"></div>
            </div>
            <div class="p6"></div>
        </div>
    </div>

    @endsection
    <script src="/js/js_home.js"></script>

</body>

</html>
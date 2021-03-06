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
@extends('master_connected')
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
                            <label for="one">Budget </label>
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
                            <label for="" id="titre">Annonce</label>
                            <label for=""><input type="checkbox" id="one">colocations </label>
                            <label for=""><input type="checkbox" id="two">sous-locations </label>
                            <label for=""><input type="checkbox" id="three">chambre chez l'habitant </label>
                            <label for=""><input type="checkbox" id="one">locations </label>
                            <label for=""><input type="checkbox" id="one">h??bergements provisoires </label><br>
                            
                            <label for=""id="titre">Annonceurs </label>
                            <label for=""><input type="checkbox" id="one">locataire </label>
                            <label for=""><input type="checkbox" id="one">propri??taires </label>
                            <label for=""><input type="checkbox" id="one">agences </label>
                            <label for=""><input type="checkbox" id="one">r??sidence </label>
                            <label for=""><input type="checkbox" id="one">sites patrtenaires </label><br>
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
                            <label for=""><input type="checkbox" id="one">logement vide</label>
                            <label for=""><input type="checkbox" id="two">1 occupant </label>
                            <label for=""><input type="checkbox" id="two">2 occupant </label>
                            <label for=""><input type="checkbox" id="two">3 occupant </label>
                            <label for=""><input type="checkbox" id="two">4 occupant </label>
                            <label for=""><input type="checkbox" id="two">5 occupant </label>
                            <label for=""><input type="checkbox" id="two">6 occupant et + </label><br>
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
                            <label for=""><input type="checkbox" id="one">Appartement</label>
                            <label for=""><input type="checkbox" id="two">Maisons</label>
                            <label for=""><input type="checkbox" id="two">Studios</label>
                            <label for=""><input type="checkbox" id="two">Duplex</label>
                            <label for=""><input type="checkbox" id="two">Lofts/ateliers</label>
                            <label for=""><input type="checkbox" id="two">Manoirs/hotels particuller</label>
                            <label for=""><input type="checkbox" id="two">Chalets</label>
                            <label for=""><input type="checkbox" id="two">Bateaux/p??niches</label>
                            <label for=""><input type="checkbox" id="two">Fermes</label>
                            <label for=""><input type="checkbox" id="two">Immeubles</label><br>
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
                            <label for="" id="titre">Nombre de pi??ces</label>
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
                                <label for="one" id="titre">Surface du logement</label>
                                <input type="number" id="min" placeholder="Min">
                                <input type="number" id="max" placeholder="Max">
                            </div>
                            <div class="surface">
                                <label for="one" id="titre">Surface de la chambre</label>
                                <input type="number" id="min" placeholder="Min">
                                <input type="number" id="max" placeholder="Max">
                            </div>
                            <div class="surface">
                                <label for="one" id="titre">Date de publication</label>
                                
                                <select name="" id="select_date">
                                    <option value="">Tout dates</option>
                                    <option value="">Moins d'un mois </option>
                                    <option value="">Moins de 2 semaines</option>
                                    <option value="">Moins d'une semaine</option>
                                    <option value="">Moins de 3 jours</option>
                                    <option value="">Ajout??es aujourd'hui</option>
                                </select>
                            </div>
                            
                            <label for=""id="titre1">Commodit??s </label>
                            <label for=""><input type="checkbox" id="one">Meubl?? </label>
                            <label for=""><input type="checkbox" id="one">Accessibilit?? handicap??</label>

                            <label for="" id="titre1">R??gles Particuli??res </label>
                            <label for=""><input type="checkbox" id="one">Filles uniquement </label>
                            <label for=""><input type="checkbox" id="one">Gar??ons uniquement </label>
                            <label for=""><input type="checkbox" id="one">Fumeurs autoris??s</label>
                            <label for=""><input type="checkbox" id="one">Animaux autoris??s </label>
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
                <div></div>
                <div class="annonce1"></div>
                <div class="annonce2"></div>
            </div>
            <div class="p6"></div>
        </div>
    </div>

    @endsection
    <script src="/js/js_home.js"></script>

</body>

</html>
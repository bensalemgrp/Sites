<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/annonce.css">

    <title>Document</title>
</head>
<body>
    @extends('master_connected')
    @section('content')
    <h2 id="title">Deposer votre Annonce</h2>


    <form action="annonce" method="POST">
        @csrf
      <fieldset>




 <!---photo--->
 <label>Photo:</label>
 <div class="block">
 <label  class=" @error('photo') is-invalid @enderror" for="inputUp" class="input-label"></label>
 <div class="row col-md-12 ml-auto mr-auto preview "><img src="/img/th.jfif" style="height: 150px;margin-left:25%;margin-top:7%" id="avatar"></div>
 </div>
 <input type="file" accept="image/png, image/jpeg/*" onchange="previewFiles() " id="inputUp" multiple>
 @error('photo')
 <div class="invalid-feed">
    <p>{{ $errors->first('photo') }}</p>
 </div>
 @enderror
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
 <script src="/js/script.js"></script>
 <script src='https://unpkg.com/tippy.js@4'></script>
 <br><br><br><br><br><br>


         <!--typeAnnonce-->

         <label for="typeAnnonce" class=" @error('typeAnnonce') is-invalid @enderror">Type d'Annonce : <em>*</em></label>
         <select name="typeAnnonce" id="typeAnnonce">
       <option>Location</option>
       <option>Colocation</option>

          @error('typeAnnonce')
          <div class="invalid-feed">
              <p>{{ $errors->first('typeAnnonce') }}</p>
          </div>
          @enderror
         </select>
          <br><br><br>


           <!--categorie-->
          <label for="categorie" class=" @error('categorie') is-invalid @enderror">Catégorie : <em>*</em></label>
          <input id="categorie" name="categorie" placeholder="Entrer categorie" type="text"><br>
          @error('categorie')
          <div class="invalid-feed">
              <p>{{ $errors->first('categorie') }}</p>
          </div>
          @enderror
          <br><br><br>

           <!--Adresse-->
          <label for="Adresse" class=" @error('adresse') is-invalid @enderror"><i class="fas fa-map-marker-alt"></i> Adresse :</label>
          <select id="Adresse"  name="adresse">
            <option></option>
          </select>
          @error('adresse')
          <div class="invalid-feed">
              <p>{{ $errors->first('adresse') }}</p>
          </div>
          @enderror<br><br><br>





           <!--prix-->
          <label for="prix" class=" @error('prix') is-invalid @enderror">Prix<em>*</em></label>
          <input id="prix" type="number" placeholder="prix en euro" name="prix">
          @error('prix')
          <div class="invalid-feed">
              <p>{{ $errors->first('prix') }}</p>
          </div>
          @enderror<br><br><br>


           <!--caution-->
          <label for="caution" class=" @error('caution') is-invalid @enderror">Caution :<em>*</em></label>
          <input id="caution" type="number" placeholder="caution en euro" name="caution">
          @error('caution')
          <div class="invalid-feed">
              <p>{{ $errors->first('caution') }}</p>
          </div>
          @enderror<br><br><br>


           <!--charge-->
          <label for="charge" class=" @error('charge') is-invalid @enderror">charges :<em>*</em></label>
          <input id="charge" type="number" placeholder="charge en euro"  name="charge">
          @error('charge')
          <div class="invalid-feed">
              <p>{{ $errors->first('charge') }}</p>
          </div>
          @enderror<br><br><br>
        <hr><br>




        <h2>Détails :</h2><br><br><br>

          <!--nombrePiece-->
          <label for="nombrePiece" class=" @error('nombrePiece') is-invalid @enderror">Nombre de piéce :</label>
          <input id="nombrePiece" type="number" placeholder="Combien de piece .." name="nombrePiece">
          @error('nombrePiece')
          <div class="invalid-feed">
              <p>{{ $errors->first('nombrePiece') }}</p>
          </div>
          @enderror
          <br><br><br>


         <!--nombrePersonne-->
         <label for="nombrePersonne" class=" @error('nombrePersonne') is-invalid @enderror">Nombre de personne :<em>*</em></label>
         <input id="nombrePersonne" type="number" placeholder=" Combien de personne" name="nombrePersonne">
         @error('nombrePersonne')
         <div class="invalid-feed">
            <p>{{ $errors->first('nombrePersonne') }}</p>
         </div>
         @enderror
         <br><br><br>

          <!--surface-->
          <label for="surface" class=" @error('surface') is-invalid @enderror">Surface :</label>
          <input type="number" placeholder="surface en m²" name="surface" id="surface">
          @error('surface')
          <div class="invalid-feed">
              <p>{{ $errors->first('surface') }}</p>
          </div>
          @enderror<br><br><br>


          <!--dateDisponibilité-->
          <label for="dateDispo" class=" @error('dateDispo') is-invalid @enderror">Date de disponibilié :</label>
          <input type="date" name="dateDispo" id="dateDispo">
          @error('dateDispo')
          <div class="invalid-feed">
              <p>{{ $errors->first('dateDispo') }}</p>
          </div>
          @enderror<br><br><br>


          <!--GES-->
          <label for="GES" class=" @error('GES') is-invalid @enderror">GES :</label>
          <select id="GES" name="GES">
            <option>A </option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
          </select>
          @error('GES')
          <div class="invalid-feed">
              <p>{{ $errors->first('GES') }}</p>
          </div>
          @enderror<br><br><br>


          <!--etage-->
          <label for="etage" class=" @error('etage') is-invalid @enderror">Nombre d'Etage :</label>
          <input type="number" name="etage" placeholder="Combien d'étage ... à quel étage" id="etage">
          @error('etage')
          <div class="invalid-feed">
              <p>{{ $errors->first('etage') }}</p>
          </div>
          @enderror<br><br><br>


          <!--description-->
          <label class=" @error('description') is-invalid @enderror">Description :</label><br><br>
          <textarea id="comments" placeholder="décrire votre annonce" name="description"></textarea>
          @error('description')
          <div class="invalid-feed">
              <p>{{ $errors->first('description') }}</p>
          </div>
          @enderror
          <br><br><br><br><br><br><br><br><br><br><br><br>



         <button type="submit" id="sauvegarde">Sauvegarde</button>
         <button type="submit" id="Annuler"><a href="connected">Annuler</a></button>

        <br><br><br>
     </fieldset>

    </form>
    @endsection
</body>
</html>

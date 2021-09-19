<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/annonce.css">

</head>
<body>
    @extends('master_connected')
    @section('content')

    <form action="annonce" method="post" enctype="multipart/form-data">
       {{ csrf_field()}}
    <fieldset id="part-photo">
        <div class="block">
            <div class="preview"> <img src="/img/pic.png" id="pic-icon"> </div>
        </div><br>
            <label for="file" class="label-file">Ajouter une image</label>
            <input id="file" class="input-file" type="file"  accept="image/png, image/jpeg/*" onchange="previewFiles() " name="img_id_images[]" class=" @error('img_id_images') is-invalid @enderror" value="{{ old('img_id_images') }}" multiple>
            @error('img_id_images')
            <div class="invalid-feed">
               <p>{{ $errors->first('img_id_images') }}</p>
            </div>
            @enderror
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
            <script src="/js/script.js"></script>
            <script src='https://unpkg.com/tippy.js@4'></script>

    </fieldset>

    <fieldset>

        <label for="titre-annonce">Titre : </label>&nbsp;
        <input id="titre-annonce" type="text" name="ann_titre" class=" @error('ann_titre') is-invalid @enderror" value="{{ old('ann_titre') }}">
        @error('ann_titre')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_titre') }}</p>
        </div>
        @enderror
        <script src="/js/script.js"></script>

        <br><br>

        <label for="type_annonce">Type d'annonce : </label> &nbsp;&nbsp;
        <select id="type_annonce" name="tya_id_annonce" class=" @error('tya_id_annonce') is-invalid @enderror" value="{{ old('tya_id_annonce') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélectionner--</option>
                @foreach($tya_annonce as $list)
                    <option value="{{$list->tya_id_annonce}}">{{$list->description}}</option>
                @endforeach
        </select>
            @error('tya_id_annonce')
            <div class="invalid-feed">
               <p>{{ $errors->first('tya_id_annonce') }}</p>
            </div>
            @enderror

        <br><br>
        <label for="type_logement">Type du logement: </label> &nbsp;&nbsp;
        <select id="type_logement" name="tyl_id_typelogement" class=" @error('tyl_id_typelogement') is-invalid @enderror" value="{{ old('tyl_id_typelogement') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --Sélectionner--</option>
            @foreach($tyl_typelogement as $list)
            <option value="{{$list->tyl_id_typeLogement}}">{{$list->description}}</option>
        @endforeach
        </select>
        @error('tyl_id_typelogement')
        <div class="invalid-feed">
           <p>{{ $errors->first('tyl_id_typelogement') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="type-bien">Type de bien: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="type-bien" name="tyb_id_bien" class=" @error('tyb_id_bien') is-invalid @enderror"  value="{{ old('tyb_id_bien') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --Sélectionner--</option>
            @foreach($tyb_typebien as $list)
            <option value="{{$list->tyb_id_bien}}">{{$list->description}}</option>
        @endforeach
        </select>
        @error('tyb_id_bien')
        <div class="invalid-feed">
           <p>{{ $errors->first('tyb_id_bien') }}</p>
        </div>
        @enderror


    </fieldset>


    <fieldset>
        <p class="icon"><i class="fas fa-map-marker-alt"></i></p>
        <h3 id="Adresse">ADRESSE</h3><br><br>
        <label for="pays">Pays :</label>
        <select id="pays" name="pay_id" class="@error('pay_id') is-invalid @enderror" value="{{ old('pay_id') }}">
            <option value="">&nbsp;  Sélèctionner</option>
            @foreach($pay_pays as $list)
            <option value="{{$list->pay_id}}">{{$list->description}}</option>
        @endforeach
    </select>
        @error('pay_id')
        <div class="invalid-feed">
           <p>{{ $errors->first('pay_id') }}</p>
        </div>
        @enderror
  <br><br>


        <label for="region">Région :</label>
        <select id="region" name="reg_id" class=" @error('reg_id') is-invalid @enderror" value="{{ old('reg_id') }}">
            <option value="">&nbsp;  Sélèctionner</option>
        </select>
        @error('reg_id')
        <div class="invalid-feed">
           <p>{{ $errors->first('reg_id') }}</p>
        </div>
        @enderror


    <br> <br>


    <label for="departement">Départements :</label>
    <select id="departement" name="dep_id" class=" @error('dep_id') is-invalid @enderror" value="{{ old('dep_id') }}">
        <option value="">&nbsp;  Sélèctionner</option>
    </select>
    @error('dep_id')
    <div class="invalid-feed">
       <p>{{ $errors->first('dep_id') }}</p>
    </div>
    @enderror
<br> <br>

    <label for="ville">ville :</label>
    <select id="ville" name="ville_id" class=" @error('ville_id') is-invalid @enderror" value="{{ old('ville_id') }}">
        <option value="">&nbsp;  Sélèctionner</option>
    </select>
    @error('ville_id')
    <div class="invalid-feed">
       <p>{{ $errors->first('ville_id') }}</p>
    </div>
    @enderror
    <br>
<br>

<label for="adresse">Adresse :</label>

<input id="adresse" type="text" name="ann_address" class=" @error('ann_adresse') is-invalid @enderror" value="{{ old('ann_adresse') }}">
@error('ann_address')
<div class="invalid-feed">
   <p>{{ $errors->first('ann_address') }}</p>
</div>
@enderror
<br>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

		<script>
		jQuery(document).ready(function(){
			jQuery('#pays').change(function(){
				let cid=jQuery(this).val();
				jQuery('#region').html('<option value="">Select City</option>')
				jQuery.ajax({
					url:'/getState',
					type:'post',
					data:'cid='+cid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#region').html(result)
					}
				});
			});

            jQuery('#region').change(function(){
				let kid=jQuery(this).val();
				jQuery('#departement').html('<option value="">Select dep</option>')
				jQuery.ajax({
					url:'/getDepartement',
					type:'post',
					data:'kid='+kid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#departement').html(result)
					}
				});
			});

			jQuery('#departement').change(function(){
				let sid=jQuery(this).val();
				jQuery.ajax({
					url:'/getCity',
					type:'post',
					data:'sid='+sid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#ville').html(result)
					}
				});
			});

		});


		</script>


<br>
    </fieldset>

    <fieldset>

        <h3 id="Piece">PIECE</h3><br><br>

        <label for="piece"> Nombre de Pièce :</label>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        <input type="number" id="piece" name="ann_nombrePiece" class=" @error('ann_nombrePiece') is-invalid @enderror" value="{{ old('ann_nombrePiece') }}">
        @error('ann_nombrePiece')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_nombrePiece') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="chambre"> Nombre de chambre :</label>
        <input type="number" id="chambre" name="ann_nombreChambre" class=" @error('ann_nombreChambre') is-invalid @enderror" value="{{ old('ann_nombreChambre') }}">
        @error('ann_nombreChambre')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_nombreChambre') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="occupant"> Nombre d'occupant :</label>
        <input type="number" id="occupant" name="ann_nbrdOccupant" class=" @error('ann_nbrdOccupant') is-invalid @enderror" value="{{ old('ann_nbrdOccupant') }}">
        @error('ann_nbrdOccupant')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_nbrdOccupant') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="meuble">Meublé :</label>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="meuble" name="ann_meuble" class=" @error('ann_meuble') is-invalid @enderror" value="{{ old('ann_meuble') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_meuble')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_meuble') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="surface"> Surface :</label>
        <input type="number" id="surface" name="ann_surface" placeholder="en m²" class=" @error('ann_surface') is-invalid @enderror" value="{{ old('ann_surface') }}">
        @error('ann_surface')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_surface') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="etage"> Nombre d'étage :</label>
        <input type="number" id="etage" name="ann_numEtage" placeholder=" Combien / à quel étage?" class=" @error('ann_numEtage') is-invalid @enderror" value="{{ old('ann_numEtage') }}">
        @error('ann_numEtage')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_numEtage') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="date"> Date de disponibilité :</label>
        <input type="date" id="date" name="ann_disponible" class=" @error('ann_disponible') is-invalid @enderror" value="{{ old('ann_disponible') }}">
        @error('ann_disponible')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_disponible') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="construction"> Année de Construction :</label>
        <input type="number" id="construction" name="ann_anneeConstruction" class=" @error('ann_anneeConstruction') is-invalid @enderror" value="{{ old('ann_anneeConstruction') }}">
        @error('ann_anneeConstruction')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_anneeConstruction') }}</p>
        </div>
        @enderror
        <br><br>

    </fieldset>

    <fieldset>

        <h3 id="Loyer">LOYER</h3><br><br>

        <label for="prix">Prix : </label>&nbsp;
        <input id="prix" type="number" name="ann_prix" class=" @error('ann_prix') is-invalid @enderror" value="{{ old('ann_prix') }}">
        @error('ann_prix')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_prix') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="caution">Caution : </label>&nbsp;
        <input id="caution" type="number" name="ann_caution" class=" @error('ann_caution') is-invalid @enderror" value="{{ old('ann_caution') }}">
        @error('ann_caution')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_caution') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="charge">Charge : </label>&nbsp;
        <input id="charge" type="number" name="ann_charge" class=" @error('ann_charge') is-invalid @enderror" value="{{ old('ann_charge') }}">
        @error('ann_charge')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_charge') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="frais">Frais Agence : </label>&nbsp;
        <input id="frais" type="number" name="ann_fraisAgence" class=" @error('ann_fraisAgence') is-invalid @enderror" value="{{ old('ann_fraisAgence') }}">
        @error('ann_fraisAgence')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_fraisAgence') }}</p>
        </div>
        @enderror
        <br><br>

    </fieldset>

    <fieldset>

        <h3 id="Détail">Autre Détails :</h3><br><br>


        <label for="GES">GES : </label>&nbsp;
        <select id="GES" name="ann_classGES" class=" @error('ann_classGES') is-invalid @enderror" value="{{ old('ann_classGES') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            <option>G</option>
        </select>
        @error('ann_classGES')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_classGES') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="energie">Classe énérgie : </label>&nbsp;
        <select id="energie" name="ann_classEnergie" class=" @error('ann_classEnergie') is-invalid @enderror" value="{{ old('ann_classEnergie') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            <option>G</option>

        </select>
        @error('ann_classEnergie')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_classEnergie') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="handicap">Accessibilité Handicap : </label>&nbsp;
        <select id="handicap" name="ann_accessibiliteHandicap" class=" @error('ann_accessibiliteHandicap') is-invalid @enderror" value="{{ old('ann_accessibiliteHandicap') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_accessibiliteHandicap')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_accessibiliteHandicap') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="fille">Filles uniquement : </label>&nbsp;
        <select id="fille" name="ann_fillesUuniquement" class=" @error('ann_fillesUuniquement') is-invalid @enderror" value="{{ old('ann_fillesUuniquement') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_fillesUuniquement')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_fillesUuniquement') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="garçon">Garçons uniquement : </label>&nbsp;
        <select id="garçon" name="ann_GarçonsUniquement" class=" @error('ann_GarçonsUniquement') is-invalid @enderror" value="{{ old('ann_GarçonsUniquement') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_GarçonsUniquement')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_GarçonsUniquement') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="animaux">Animaux autorisés : </label>&nbsp;
        <select id="animaux" name="ann_AnimauxAutorises" class=" @error('ann_AnimauxAutorises') is-invalid @enderror" value="{{ old('ann_AnimauxAutorises') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_AnimauxAutorises')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_AnimauxAutorises') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="fumeurs">Fumeurs autorisés : </label>&nbsp;
        <select id="fumeurs" name="ann_FumeursAutorises" class=" @error('ann_FumeursAutorises') is-invalid @enderror" value="{{ old('ann_FumeursAutorises') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_FumeursAutorises')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_FumeursAutorises') }}</p>
        </div>
        @enderror
        <br><br>

        <label for="ascenceur">Ascenceur: </label>&nbsp;
        <select id="ascenceur" name="ann_ascenceur" class=" @error('ann_ascenceur') is-invalid @enderror" value="{{ old('ann_ascenceur') }}">
            <option value="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  --Sélèctionner-- </option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('ann_ascenceur')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_ascenceur') }}</p>
        </div>
        @enderror
        <br><br>


    </fieldset>

    <fieldset>

        <h3 id="Message">MESSAGE</h3>
        <p class="icon"><i class="far fa-edit"></i></p><br><br>
        <label for="message"></label>
        <textarea id="message" placeholder="Décrire votre annonce" class=" @error('ann_description') is-invalid @enderror" name="ann_description" value="{{ old('ann_description') }}"></textarea>
        @error('ann_description')
        <div class="invalid-feed">
           <p>{{ $errors->first('ann_description') }}</p>
        </div>
        @enderror
         <br><br>

        <button type="submit" id="sauvegarde">Sauvegarde</button>
        <button type="submit" id="Annuler"><a href="connected">Annuler</a></button>
    </fieldset>

</form>

@endsection
</body>
</html>

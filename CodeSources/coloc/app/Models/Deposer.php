<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposer extends Model
{
    use HasFactory;

    protected $table = 'ann_annonce';
    protected $fillable = ['ann_ref','ann_dateCreation','ann_dateModification','ann_dateValidite','img_id_images', 'ann_titre','tya_id_annonce'
    ,'tyl_id_typelogement','tyb_id_bien','pay_id','reg_id','dep_id','ville_id','ann_adresse','ann_nombrePiece','ann_nombreChambre',
    'ann_nbrdOccupant','ann_meuble','ann_surface','ann_numEtage','ann_disponible','ann_prix','ann_caution','ann_charge','ann_classGES',
    'ann_classEnergie','ann_accessibiliteHandicap','ann_fillesUuniquement','ann_GarçonsUniquement','ann_AnimauxAutorises',
    'ann_FumeursAutorises','ann_fraisAgence','prf_id','ann_ascenceur','ann_description','ann_anneeConstruction'];
}

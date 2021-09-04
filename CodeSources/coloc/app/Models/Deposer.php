<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposer extends Model
{
    use HasFactory;

    protected $table = 'annonce';
    protected $fillable = ['typeAnnonce', 'categorie','localisation','photo','adresse','GES','piece','prix','nombrePersonne','dateDispo','surface','description'];
}

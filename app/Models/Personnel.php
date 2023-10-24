<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable=['Matricule','nom','prenom','telephone','email','cin','date_Ambauche','date_Ambauche','departement_id','image'];

    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id');
    }

}

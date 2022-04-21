<?php

namespace App\Models\SitioClinico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SitioClinico\Proyect_Problema;

class Proyect extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sc_proyect';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION DE UNO A MUCHOS NORMAL
    public function problema(){
        return $this->hasMany(Proyect_Problema::class);
    }
    
}
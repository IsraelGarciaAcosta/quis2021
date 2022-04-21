<?php

namespace App\Models\SitioClinico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resg_Material extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sc_resguardo_material';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    
}
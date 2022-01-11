<?php

namespace App\Models\Documentos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos_instructivos extends Model
{
    // use HasFactory;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'documentos_instructivos';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];
}

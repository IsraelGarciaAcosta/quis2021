<?php

namespace App\Models\SitioClinico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seg_Seguimiento extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sc_seguimiento_seg';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION DE UNO A MUCHOS INVERSA
    public function seguimiento(){
        return $this->belongsTo(Seguimiento::class,'seguimiento_id');
    }
    
}
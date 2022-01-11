<?php

namespace App\Models\Administracion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Documentos\Formato;
use App\Models\Documentos\Documentos_formatos;

class Proyecto extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'proyectos';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION MUCHOS A MUCHOS
    public function formats(){
        return $this->belongsToMany(Documentos_formatos::class, 'formato', 'proyecto_id', 'documento_formato_id')
        ->withPivot('datos', 'datos_json');
    }

    //RELACION DE UNO A MUCHOS NORMAL
    public function formatos(){
        return $this->hasMany(Formato::class);
    }
    
}
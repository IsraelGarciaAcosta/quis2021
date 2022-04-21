<?php

namespace App\Models\SitioClinico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SitioClinico\Seg_Seguimiento;

class Seguimiento extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sc_seguimiento';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION DE UNO A MUCHOS NORMAL
    public function seguimiento(){
        return $this->hasMany(Seg_Seguimiento::class);
    }
    
}
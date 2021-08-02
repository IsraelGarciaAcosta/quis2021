<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'empresas';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION MUCHOS A MUCHOS
    public function menus(){
        return $this->belongsToMany(Menu::class,'empresa_menu')
            ->withPivot('menu_id');
    }
}
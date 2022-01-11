<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Empresas\Empresa;
use App\Models\Documentos\Formato; 
use App\Models\Documentos\Documentos_formatos; 

class Menu extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'menus';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    //HABILITAR ASIGNACION MASIVA
    protected $guarded = ['id', 'created_at', 'update_at'];

    //RELACION MUCHOS A MUCHOS
    public function submenus(){
        return $this->belongsToMany(Submenu::class,'submenu_menu')
            ->withPivot('submenu_id');
    }
    
    public function empresas(){
        return $this->belongsToMany(Empresa::class,'empresa_menu')
            ->withPivot('empresa_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'menu_user')
            ->withPivot('user_id');
    }

    public function formats(){
        return $this->belongsToMany(Documentos_formatos::class, 'formato', 'menu_id', 'documento_formato_id')
        ->withPivot('datos', 'datos_json');
    }

    /*/RELACION DE UNO A MUCHOS NORMAL
    public function submenus(){
        return $this->hasMany(Submenu::class);
    }*/

    public function formatos(){
        return $this->hasMany(Formato::class);
    }
}
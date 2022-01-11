<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

use App\Models\Empresas\Empresa;
use App\Models\Documentos\Formato;
use App\Models\Documentos\Documentos_formatos;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_image(){ //metodo para la imagen de usuario
        return "https://picsum.photos/300/300";
    }

    public function adminlte_desc(){ //metodo para rol de usuario
        return "Administrador";
    }

    public function adminlte_profile_url(){ //metodo para perfil de usuario
        return "profile";
      // return view('dashboard.profile');
    }


    //RELACION MUCHOS A MUCHOS
    public function menus(){
        return $this->belongsToMany(Menu::class,'menu_user')
            ->withPivot('menu_id');
    }

    public function empresas(){
        return $this->belongsToMany(Empresa::class,'empresa_user')
            ->withPivot('empresa_id');
    }

    public function formats(){
        return $this->belongsToMany(Documentos_formatos::class, 'formato', 'user_id', 'documento_formato_id')
        ->withPivot('datos', 'datos_json');
    }

    //RELACION DE UNO A MUCHOS NORMAL
    public function formatos(){
        return $this->hasMany(Formato::class);
    }

}

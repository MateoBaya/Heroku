<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;

    
    public $id;
    public $usuario;
    public $clave;
    public $nombre;
    public $apellido;
    public $tipoUsuario;
    public $estatus;
    public $perfil;


    protected $primaryKey = 'id';
    protected $table = 'usuarios';
    public $incrementing = true;
    public $timestamps = false;

    const DELETED_AT = 'fechaBaja';

    protected $fillable = [
        'usuario', 'tipoUsuario', 'estatus', 'perfil', 'fechaBaja'
    ];

}

?>
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mesa extends Model
{
    use SoftDeletes;

    public $id;
    public $estado;
    public $idPedido;



    protected $table = 'mesas';

    protected $fillable = [
        'estado', 'idPedido'
    ];
}
?>
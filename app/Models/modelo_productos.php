<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class modelo_productos extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primarykey = 'idproducto';
    protected $fillable=['nombre','descripcion','preciounit','cantidad'];
    protected $guarded=[];
    public $timestamps=false;

    public function getKeyName(){
        return "idproducto";
    }
}

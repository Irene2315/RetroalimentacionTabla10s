<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CantidadProducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'hora',
        'cantidad',
        'idProducto'
    ];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
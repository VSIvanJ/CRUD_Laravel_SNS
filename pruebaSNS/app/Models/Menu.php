<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_menu';
    public $timestamps = true;
    protected $fillable = ['nombre','precio'];


    // Relación con el modelo Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_menu');
    }

}

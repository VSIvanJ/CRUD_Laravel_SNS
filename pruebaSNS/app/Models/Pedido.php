<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedido';
    public $timestamps = true;
    protected $fillable = ['id_menu', 'cliente'];

    // Relación con el modelo Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

}

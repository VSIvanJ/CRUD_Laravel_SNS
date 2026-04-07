<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Aws\Sns\SnsClient;

class PedidoController extends Controller
{
    public function registroPedido (Request $request){
        $pedido = new Pedido();
        //Validacion
        $request->validate([
            'id_menu' => 'required|exists:menus,id_menu',
        ]);
        $pedido->id_menu = $request->input('id_menu');
        $pedido->cliente = $request->input('cliente');
        $pedido->save();
        return redirect()->route('Menus.inicio');
    }
    
    public function mostrarLista(){
        $pedidos = Pedido::all();
        return view('Pedidos.lista', ['pedidos' => $pedidos]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Aws\Sns\SnsClient;

class MenuController extends Controller
{
    public function registroMenu (Request $request){
        $menu = new Menu();
        $menu->nombre = $request->input('nombre');
        $menu->precio = $request->input('precio');
        $menu->save();
        return redirect()->route('Menus.inicio');
    }

    public function mostrarLista(){
        $menus = Menu::all();
        return view('Menus.lista', ['menus' => $menus]);
    }
}

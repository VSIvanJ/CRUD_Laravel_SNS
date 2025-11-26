<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use Aws\Sns\SnsClient;
class TramiteController extends Controller
{
    public function registroTramite (Request $request){
        $tramite = new Tramite();
        $tramite->nombre = $request->input('nombre');
        $tramite->estado = $request->input('estado');
        $tramite->save();
        

        return redirect()->route('Tramites.Inicio');
    }

    public function consultaTramite(Request $request)
    {
        $id = $request->input('id');
        $tramite = Tramite::find($id);

        // Si no existe, regresar mensaje
        if (!$tramite) {
            return back()->with('error', 'No existe un trámite con ese ID');
        }

        // Enviar mensaje SNS
        $sns = new SnsClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
        ]);

        $sns->publish([
            'TopicArn' => env('AWS_SNS_TOPIC_ARN'),
            'Message' => "CONSULTA DE TRÁMITE:\nNombre: {$tramite->nombre}\nEstado: {$tramite->carrera}",
        ]);

        // Enviar los datos a la vista
        return view('Tramites.lista', ['tramite' => $tramite]);
    }

}

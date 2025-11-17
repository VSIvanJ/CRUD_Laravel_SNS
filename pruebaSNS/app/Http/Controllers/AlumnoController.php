<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Aws\Sns\SnsClient;

class AlumnoController extends Controller
{
    public function registroAlumno (Request $request){
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->carrera = $request->input('carrera');
        $alumno->save();
        

        //APARTADO SNS PARA ENVIAR EMAILS
        $sns = new SnsClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
        ]);

        $sns->publish([
            'TopicArn' => env('AWS_SNS_TOPIC_ARN'),
            'Message' => "REGISTRO EXITOSO:\nAlumno: {$alumno->apellido}, {$alumno->nombre}\nCarrera: {$alumno->carrera}",
        ]);

        return redirect()->route('Alumnos.lista');
    }

    public function listaAlumnos (){
        $alumnos = Alumno::all();
        return view('Alumnos.lista', ['alumnos' => $alumnos]);
    }

    public function actualizarAlumno (Request $request){
        $alumno = Alumno::find($request->input('id'));
        $alumno->carrera = $request->input('carrera');
        $alumno->save();

        //APARTADO SNS PARA ENVIAR EMAILS
        $sns = new SnsClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
        ]);

        $sns->publish([
            'TopicArn' => env('AWS_SNS_TOPIC_ARN'),
            'Message' => "DATOS ACTUALIZADOS:\nAlumno: {$alumno->apellido}, {$alumno->nombre}\n Nueva Carrera: {$alumno->carrera}",
        ]);

        return redirect()->route('Alumnos.lista');
    }

    public function eliminarAlumno (Request $request){
        $alumno = Alumno::find($request->input('id'));
        $m = $alumno->apellido.', '.$alumno->nombre;
        $alumno->delete();

        //APARTADO SNS PARA ENVIAR EMAILS
        $sns = new SnsClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
        ]);

        $sns->publish([
            'TopicArn' => env('AWS_SNS_TOPIC_ARN'),
            'Message' => "ALUMNO ELIMINADO: $m",
        ]);

        return redirect()->route('Alumnos.lista');
    }
}

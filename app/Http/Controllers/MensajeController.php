<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use PDF;

class MensajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $mensajes = DB::table('mensajes')->paginate(5);

        return view('mensaje.mensajes', ['mensajes' => $mensajes]);
    }

    public function crear()
    {
        $destinatarios = DB::table('profesores')
            ->where('id_prof', '<>', Auth::user()->id_prof)
            ->select('id_prof', 'nombre')
            ->get();

        return view('mensaje.crear', ['destinatarios' => $destinatarios]);
    }

    public function nuevoCampo(Request $request)
    {
        $fecha = date('Y-m-d h:i:s');
        DB::table('mensajes')->insert(
            ['id_remitente' => Auth::user()->id_prof,
                'id_destinatario' => $request->destinatario,
                'titulo' => $request->titulo,
                'cuerpo' => $request->cuerpo,
                'fecha_mensaje' => $fecha]
        );

        return redirect()
            ->route('mensaje.listar')
            ->with(['mensaje' => 'Mensaje enviado correctamente']);
    }

    public function detalle($id)
    {
        $mensaje = DB::table('mensajes')->where('id_men', '=', $id)->get();
        
        return view('mensaje.detalle', ['mensaje' => $mensaje]);
    }

    public function eliminar($id)
    {
        DB::table('mensajes')->where('id_men', '=', $id)->delete();

        return redirect()
            ->route('mensaje.listar')
            ->with(['mensaje' => 'Mensaje eliminado correctamente']);

    }

    public function pdf()
    {

        $mensajes = DB::table('mensajes')->orderBy('fecha_mensaje')->get();

        $pdf = Pdf::loadView('mensaje.pdf', ['mensajes' => $mensajes]);

        return $pdf->stream();
    }
}

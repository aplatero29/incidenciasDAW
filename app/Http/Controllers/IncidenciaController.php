<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use PDF;
use Incidencia;

class IncidenciaController extends Controller
{
    public function listar()
    {
        $incidencias = DB::table('incidencias')->paginate(2);

        return view('incidencia.incidencias', ['incidencias' => $incidencias]);
    }

    public function nuevoCampo(Request $request)
    {
        $fecha = date('Y-m-d h:i:s');
        DB::table('incidencias')->insert(
            ['id_prof' => Auth::user()->id_prof, 'asunto' => $request->asunto,
             'cuerpo' => $request->cuerpo, 'fecha_creacion' => $fecha]
        );
        $this->listar();
    }

    public function formulario()
    {
        return view('incidencia.nueva');
    }

    public function eliminar($id)
    {
        DB::table('incidencias')->where('id_inci', '=', $id)->delete();
        $this->listar();
    }
}

<?php

namespace App\Http\Controllers;

use App;
use Auth;
use DB;
use Excel;
use Illuminate\Http\Request;
use PDF;

class IncidenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $incidencias = '';
        if (Auth::user()->admin == 0) {
            $incidencias = DB::table('incidencias')->where('id_prof', Auth::user()->id_prof)->paginate(5);
        } else {
            $incidencias = DB::table('incidencias')->paginate(5);
        }

        return view('incidencia.incidencias', ['incidencias' => $incidencias]);
    }

    public function detalles($id)
    {
        $incidencia = DB::table('incidencias')->where('id_inci', '=', $id)->get();
        return view('incidencia.detalle', ['incidencia' => $incidencia]);
    }

    public function nuevoCampo(Request $request)
    {
        $fecha = date('Y-m-d h:i:s');
        DB::table('incidencias')->insert(
            ['id_prof' => Auth::user()->id_prof, 'asunto' => $request->asunto,
                'cuerpo' => $request->cuerpo, 'fecha_creacion' => $fecha]
        );

        return redirect()
            ->route('incidencia.listar')
            ->with(['mensaje' => 'Incidencia añadida correctamente']);
    }

    public function formulario()
    {
        return view('incidencia.nueva');
    }

    public function eliminar($id)
    {
        DB::table('incidencias')->where('id_inci', '=', $id)->delete();

        return redirect()
            ->route('incidencia.listar')
            ->with(['mensaje' => 'Incidencia eliminada correctamente']);

    }

    public function pdf()
    {
        $incidencias = DB::table('incidencias')->orderBy('id_inci')->get();

        $pdf = Pdf::loadView('incidencia.pdf', ['incidencias' => $incidencias]);

        return $pdf->stream();
    }

    public function exportarExcel()
    {
        $incidencias = DB::table('incidencias')->get();

        $export = view('incidencia.pdf', ['incidencias' => $incidencias]);

        return Excel::download($export, 'incidencias.xlsx');

    }
}

<?php

namespace App\Http\Controllers;

use App;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Incidencia;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use PDF;
use Excel;

class IncidenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $incidencias = DB::table('incidencias')->paginate(5);

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

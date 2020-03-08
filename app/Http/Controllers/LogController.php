<?php

namespace App\Http\Controllers;

use DB;
use PDF;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $logs = DB::table('logs')->paginate(5);

        return view('log.logs', ['logs' => $logs]);
    }

    public function pdf()
    {
        $logs = DB::table('logs')->orderBy('fecha_accion')->get();

        $pdf = Pdf::loadView('log.pdf', ['logs' => $logs]);

        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}

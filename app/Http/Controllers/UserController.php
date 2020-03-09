<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\User;
use Auth;
use DB;
use Excel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $profesores = '';
        if (Auth::user()->admin == 0) {
            $profesores = DB::table('profesores')->where([
                ['departamento', '=', Auth::user()->departamento],
                ['id_prof', '<>', Auth::user()->id_prof],
            ])
                ->paginate(5);

        } else {
            $profesores = DB::table('profesores')->paginate(5);
        }
        return view('profesor.profesores', ['profesores' => $profesores]);
    }

    public function hacerAdmin($id)
    {
        $resultado = DB::table('profesores')
            ->where('id_prof', '=', $id)
            ->update(['admin' => 1]);
        if ($resultado == 1) {
            return redirect()
                ->route('profesor.profesores')
                ->with(['mensaje' => 'Operación de mejora de permisos realizada correctamente']);
        }
    }

    public function detalles($id)
    {
        $profesor = DB::table('profesores')->where('id_prof', '=', $id)->get();
        return view('profesor.detalle', ['profesor' => $profesor]);
    }

    public function eliminar($id)
    {
        DB::table('profesores')->where('id_prof', '=', $id)->delete();

        return redirect()
            ->route('profesor.profesores')
            ->with(['mensaje' => 'Usuari@ eliminad@ correctamente']);

    }

    public function formularioNuevo()
    {
        return view('profesor.nuevo');
    }

    public function update()
    {

    }

    public function nuevo(Request $request)
    {
        $fecha = date('Y-m-d H:i:s');
        route('register', $request);
        /* User::create([
        'nombre' => $request->nombre,
        'dni' => $request->dni,
        'email' => $request->email,
        'usuario' => $request->user,
        'password' => Hash::make($request->password),
        'departamento' => $request->departamento,
        'admin' => '0',
        ]); */
        return redirect()
            ->route('usuario.listar')
            ->with(['mensaje' => 'Operación realizada correctamente']);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request)
    {

        if ($request->excel) {

            Excel::import(new UsersImport, $request->excel/* request()->file($request->excel)->getRealPath() */);
            return redirect()
                ->route('usuario.listar')
                ->with(['mensaje' => 'Operación de inserción de datos mediante Excel realizada correctamente']);
        }
    }
    public function formularioImportar()
    {
        return view('profesor.import');
    }

}

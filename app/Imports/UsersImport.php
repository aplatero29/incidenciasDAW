<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'nombre' => $row[0],
            'dni' => $row[1],
            'email' => $row[2],
            'usuario' => $row[3],
            'password' => Hash::make($row[4]),
            'departamento' => $row[5],
            'admin' => '0'
        ]);
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:9',
            'email' => 'required|string|email|max:255|unique:profesores',
            'usuario' => 'required|string|max:20',
            'password' => 'required|string|min:6',
            'departamento' => 'required|string|max:255'
        ];
    }
}

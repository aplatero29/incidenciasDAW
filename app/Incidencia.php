<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencias';

    public function user()
    {
        return $this->belongsTo('App\User','id_prof');
    }
}

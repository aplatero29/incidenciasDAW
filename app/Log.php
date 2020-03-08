<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User','id_prof');
    }
}

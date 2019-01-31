<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = array('name');

    public function professor()
    {
        return $this->belongsTo('App\Professores');
    }
}

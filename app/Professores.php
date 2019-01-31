<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    protected $fillable = array('name', 'idade','materia');

    public function turma()
    {
        return $this->hasOne('App\Turma');
    }

}

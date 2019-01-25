<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
  protected $fillable = array('name', 'idade','matricula');
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{//definção dos campos que podem ser preenchidos
  protected $fillable = ['titulo','descricao','status'];

}

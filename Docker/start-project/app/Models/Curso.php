<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function nivel() {
        return $this->belongsTo('App\Models\Nivel');
    }

    public function eixo() {
        return $this->belongsTo('App\Models\Eixo');
    }

    public function turma() {
        return $this->hasManyTo('App\Models\Turma');
    }

    public function aluno() {
        return $this->hasManyTo('App\Models\Aluno');
    }

    public function categoria() {
        return $this->hasManyTo('App\Models\Categoria');
    }

    public function user() {
        return $this->hasMany('App\Models\User');
    }
}

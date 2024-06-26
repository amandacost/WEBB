<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function curso() {
        return $this->belongsTo('App\Models\Curso');
    }

    public function categoria() {
        return $this->hasMany('App\Models\Categoria');
    }
}

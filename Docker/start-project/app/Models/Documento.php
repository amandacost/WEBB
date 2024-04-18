<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }

}

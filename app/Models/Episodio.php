<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'temporada', 'numero', 'assistido', 'serie_id'
    ];

    public function serie(){
        return $this->belongsTo('App\Models\Serie');
    }

    public function getAssistidoAttribute($assistido) : bool{
        return $assistido;
    }
}

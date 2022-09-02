<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    //Relacion uno a uno inversa

    protected $guarded = ['id'];
    public function lesson(){
        return $this->belongsTo('App\Models\Lesson');
    }
}

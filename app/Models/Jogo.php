<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'gênero',
        'ano_de_lançamento',
        'valor',
    ];
    
    public $timestamps = false;
}

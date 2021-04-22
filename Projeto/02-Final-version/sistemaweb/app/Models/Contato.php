<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 'cargo'];


    public function entidades()
    {
        return $this->hasMany(Entidade::class);
    }
    
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    public function treinos()
    {
        return $this->hasMany(Treino::class);
    }
}

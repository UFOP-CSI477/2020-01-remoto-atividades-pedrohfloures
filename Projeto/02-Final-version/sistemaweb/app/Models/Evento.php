<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'datainicio', 'datafim', 'tipo', 'local', 'valor', 'descricao', 'contato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class);
    }
}

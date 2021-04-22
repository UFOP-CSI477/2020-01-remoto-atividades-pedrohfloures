<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpnj', 'descricao', 'endereco', 'contato_id'];
    
    public function contato()
    {
        return $this->belongsTo(Contato::class);
    }
}

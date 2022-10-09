<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class chamado extends Model
{
    protected $fillable = [
        'tipo_serviço',
        'descricao',
        'img_descricao',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

   
}

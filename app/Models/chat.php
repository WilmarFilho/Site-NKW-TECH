<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = [
        'resposta',
        'user_id',
        'chamado_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

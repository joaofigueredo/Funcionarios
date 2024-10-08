<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [];

    use HasFactory;

    public function funcionario()
    {
        return $this->hasMany(Funcionario::class);
    }
}

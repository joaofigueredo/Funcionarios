<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'salario', 'cargo_id'];
    use HasFactory;

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}

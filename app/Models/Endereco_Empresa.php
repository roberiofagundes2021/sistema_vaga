<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco_Empresa extends Model
{
  protected $fillable = [
  'pais',
  'estado',
  'cidade',
  'bairro',
  'rua',
  'numero',
  'empresa_id'];


  public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id','id');
    }
}

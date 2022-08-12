<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco_user extends Model
{
  protected $fillable = [
  'pais',
  'estado',
  'cidade',
  'bairro',
  'rua',
  'numero',
  'user_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
  protected $fillable = [
  'descricao',
  'quantidade',
  'user_id',
  'empresa_id'];
}

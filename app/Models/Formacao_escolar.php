<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacao_escolar extends Model
{
  protected $fillable = [
  'ensino',
  'data_inicio',
  'data_terminio',
  'nome_curso',
  'instituicao',
  'user_id'];
}

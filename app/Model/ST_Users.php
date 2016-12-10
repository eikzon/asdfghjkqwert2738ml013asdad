<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ST_Users extends Model
{
  protected $table = 'users';
  protected $fillable = ['name', 'email', 'password', 'username'];
}

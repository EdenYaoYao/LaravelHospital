<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $table = 'depts';

    protected $fillable = ['name'];
}

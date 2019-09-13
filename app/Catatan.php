<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $fillable = ['title', 'desc', 'category', 'photo'];
}

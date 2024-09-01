<?php

namespace ResierPackage\Models;

use Illuminate\Database\Eloquent\Model;

class ResierImage extends Model
{
    protected $fillable = ['filename', 'path'];
}
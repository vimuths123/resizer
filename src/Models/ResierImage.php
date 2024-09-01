<?php

// Models/ResierImage.php

namespace YourNamespace\Resier\Models;

use Illuminate\Database\Eloquent\Model;

class ResierImage extends Model
{
    protected $fillable = ['filename', 'path'];
}
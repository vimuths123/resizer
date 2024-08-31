<?php

namespace ResierPackage\Models;

use Illuminate\Database\Eloquent\Model;

class ResierModel extends Model
{
    public static function getExampleData()
    {
        return [
            'title' => 'Welcome to Resier Package',
            'description' => 'This is a simple example page from the Resier Package.'
        ];
    }
}
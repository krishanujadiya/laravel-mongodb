<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mongodb';
    protected $gaurd = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table='services';
    protected $primarykey='id';
    protected $filltable=['categories_id', 'name','description','services_image',];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    use HasFactory;
    protected $table='pricing';
    protected $primarykey='id';
    protected $filltable=['services_id','validity','price'];
}

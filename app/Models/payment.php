<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $primarykey='id';
    protected $filltable=['users_id','amount','description','date','card_number'];
}

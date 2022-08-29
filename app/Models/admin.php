<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
     protected $table='admin';
     protected $primarykey='id';
     protected $filltable=['first_name','last_name','phone_number','email','password' ];

     protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

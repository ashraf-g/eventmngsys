<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Customer extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'customers';

    // Specify the fillable fields
    protected $fillable = [
        'user_id',       
        'phoneno',
        'otp',
    ];

   
}


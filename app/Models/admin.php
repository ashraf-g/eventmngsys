<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'admins';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'otp',
    ];

   

    // Optional: You might add methods for authentication or relationships here
}

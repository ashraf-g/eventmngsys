<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Vendor extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'vendors';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'shop_name',
        'address',
        'otp',
    ];


   
}

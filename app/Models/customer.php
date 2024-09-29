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
        'customerid',
        'username',
        'password',
        'email',
        'phoneno',
        'otp',
    ];

    // Mutator to hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    // Define a relationship to the User model if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'customerid');
    }
}


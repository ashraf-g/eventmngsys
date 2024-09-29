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
        'vendorid',
        'name',
        'email',
        'phno',
        'password',
        'shop_name',
        'address',
        'otp',
    ];

    // Hash the password when setting it
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    // Define any relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'vendorid');
    }
}

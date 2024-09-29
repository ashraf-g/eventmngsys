<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventid',
        'vendor_id',
        'event_name',
        'description',
        'capacity',
        'price',
    ];

    // Define relationships
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'eventid');
    }
}

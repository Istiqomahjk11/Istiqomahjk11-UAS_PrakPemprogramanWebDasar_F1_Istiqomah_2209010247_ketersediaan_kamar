<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingRooms;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'address',
        'phone_number',
        'email',
    ];

    public function bookingRooms()
    {
        return $this->hasMany(BookingRooms::class, 'patient_id', 'id');
    }
}

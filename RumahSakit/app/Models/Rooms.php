<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingRooms;
use App\Models\RoomLevels;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'level',
        'status'
    ];

    public function bookingRooms()
    {
        return $this->hasMany(BookingRooms::class, 'room_id', 'id');
    }

    public function level()
    {
        return $this->hasOne(RoomLevels::class, 'id', 'level');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patients;
use App\Models\Rooms;

class BookingRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'patient_id',
        'check_in_date',
        'check_out_date'
    ];

    public function room()
    {
        return $this->hasOne(Rooms::class, 'id', 'room_id');
    }

    public function patient()
    {
        return $this->hasOne(Patients::class, 'id', 'patient_id');
    }
}

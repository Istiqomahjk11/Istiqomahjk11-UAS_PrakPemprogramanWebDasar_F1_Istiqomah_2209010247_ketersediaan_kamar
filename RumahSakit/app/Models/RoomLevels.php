<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rooms;

class RoomLevels extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function room()
    {
        return $this->hasOne(Rooms::class, 'level', 'id');
    }
}

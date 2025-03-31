<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Booking extends Model
{
    use HasFactory, FilterQueryString;
    //
    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_date',
    ];

    protected $filters = [
        'sort',
        'between',
        'like',
    ];

    public function room()
    {   
        /// id column from Room table is now connected to room_id column in the Booking table
        return $this->hasOne('App\Models\Room','id', 'room_id');
    }
}

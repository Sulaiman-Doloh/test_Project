<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parking extends Model
{
    use HasFactory;
    protected $primaryKey = 'ParkingID';
    protected $filable = ['TypeID ',
                        // 'Price',
                         'stetas'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserve_parking extends Model
{
    use HasFactory;
    protected $primaryKey = 'ParID';
    protected $filable = ['CarRegistration',
                          'Paystatus',
                          'PayID',
                          'Img_payment',
                          'Time_in',
                          'Time_out',
                          'ParkingID',
                          'Price',
                          'PayTheFine',
                          'UserId'];
                         
}

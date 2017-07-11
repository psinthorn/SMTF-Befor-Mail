<?php

namespace App\Models;
 use Illuminate\Database\Eloquent\Model;


class TourReservation extends Model {

    protected $table = 'transfer_reservation';

    protected $fillable = [

        'fName',
        'lName',
        'email',
        'mobile',
        'flight',
        'hotelName',
        'noPassanger',
        'transferId',
        'transferRate',
        'tourId',
        'tourRate',
        'additionalRequest',


    ];


}
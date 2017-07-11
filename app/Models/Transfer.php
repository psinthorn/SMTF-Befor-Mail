<?php

namespace App\Models;
 use Illuminate\Database\Eloquent\Model;


class Transfer extends Model {

   protected $table = 'transfer';

   protected $fillable = [

        'rank_order',
        'pickup_from',
        'pickup_to',
        'sedan_rate',
        'suv_rate',
        'minibus_rate',


   ];


}

class TransferReservation extends Model {

    protected $talble = 'transferReservation';

    protected $fillable = [

        'fName',
        'lName',
        'email',
        'mobile',
        'flight',
        'hotelName',
        'noPassanger',
        'transID',
        'transRate',
        'additionalRequest',


    ];


}
<?php

namespace App\Models;
 use Illuminate\Database\Eloquent\Model;


class Tour extends Model {

   protected $table = 'tours';

   protected $fillable = [


        'rank_order',
        'tour_name',
        'tour_desc',
        'tour_ldesc',
        'tour_pic',
        'itinerary',
        'rate1',
        'rate2',
        'rate3',
        'public',


   ];


}
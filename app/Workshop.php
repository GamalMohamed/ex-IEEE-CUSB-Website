<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
   protected  $fillable=[
       'name','committeeId','description','tag','numberOfSeats',
       'startDate','endDate','numberOfParticipants','isSponsored'
   ];
}

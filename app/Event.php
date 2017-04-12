<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['name','date','place',
        'description','tag','isFeatured','sponsors','host'];


}

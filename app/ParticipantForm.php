<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantForm extends Model
{
    protected $fillable =['nat_id','first_name','last_name',
    'age','email','mobile','gender','university','major'];



}

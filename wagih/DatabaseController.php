<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function get()
    {
      $member = DB::table($name)->where('email', $email)->first();
      return $member;
    }
    public function index()
    {
         $members = DB::table($name)->get();
         return $members;
    }
    public function put()
    {
        DB::table($name)->insert(
            ['NatID' => Input::get('NatID'), 'Fname' => Input::get('Fname'), 'Lname' => Input::get('Lname'),
            'age' => Input::get('age'), 'email' => Input::get('email'), 'pic' => Input::get('pic'),
            'mobile' => Input::get('mobile'), 'gender' => Input::get('gender'), 'university' => Input::get('university'),
            'major' => Input::get('major'),
            ]);
    }
    
    public function delete()
    {
        DB::table($name)->where('email', $email)->delete();
    }
}

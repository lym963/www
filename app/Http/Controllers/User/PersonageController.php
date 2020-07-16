<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonageController extends Controller
{
    public function personage(){
        return  view("personage.index");
    }
}

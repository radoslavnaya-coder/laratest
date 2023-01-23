<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    //вывод всех досок на экран
    public function index(){
        return desk::all();
    }
}

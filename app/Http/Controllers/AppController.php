<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class AppController extends Controller
{
    public function index(){
        return View('index');
    }
}

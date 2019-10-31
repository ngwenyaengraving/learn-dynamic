<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class LearnController extends BaseController {




    public static function home() {

        return View::make('welcome');

    }



}

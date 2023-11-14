<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservesController extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
}

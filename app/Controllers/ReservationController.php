<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservationController extends BaseController
{
    public function index()
    {
        return view('pages/reservation');
    }
    public function create()
    {

    }
}

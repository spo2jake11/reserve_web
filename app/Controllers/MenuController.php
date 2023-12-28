<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuController extends BaseController
{
    public function index()
    {
        return view("pages/menu");
    }
}

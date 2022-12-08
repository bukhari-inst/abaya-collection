<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/landing_page');
    }

    public function category()
    {
        return view('pages/users/customer/category');
    }
}
<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('pages/users/admin/index');
    }
}
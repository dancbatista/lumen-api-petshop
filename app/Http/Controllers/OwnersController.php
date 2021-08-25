<?php

namespace App\Http\Controllers;

use App\Owner;

class OwnersController
{
    public function index()
    {
        return Owner::all();
    }
}

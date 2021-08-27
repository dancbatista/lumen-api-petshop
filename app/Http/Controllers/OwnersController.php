<?php

namespace App\Http\Controllers;

use App\Owner;

class OwnersController extends BaseController
{
    public function __construct()
    {
        $this->classe = Owner::class;
    }
}

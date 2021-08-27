<?php

namespace App\Http\Controllers;

use App\Pet;

class PetsController extends BaseController
{
    public function __construct()
    {
        $this->classe = Pet::class;
    }
}

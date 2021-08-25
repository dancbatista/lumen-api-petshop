<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnersController
{
    public function index()
    {
        return Owner::all();
    }

    public function store(Request $request)
    {
        return response()->json(
            Owner::create([
                "name" => $request->name,
                "phone" => $request->phone,
            ]),
            status: 201
        );
    }

    public function show(int $id)
    {
        $owner = Owner::find($id);
        if (is_null($owner)) {
            return response()->json("", status: 204);
        }
        return response()->json($owner);
    }
}

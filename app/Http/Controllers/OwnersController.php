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
        return response()->json(Owner::create($request->all()), status: 201);
    }

    public function show(int $id)
    {
        $owner = Owner::find($id);
        if (is_null($owner)) {
            return response()->json("", status: 204);
        }
        return response()->json($owner);
    }

    public function update(int $id, Request $request)
    {
        $owner = Owner::find($id);
        if (is_null($owner)) {
            return response()->json(
                ["erros" => "Recurso não encontrado!"],
                status: 404
            );
        }
        $owner->fill($request->all());
        $owner->save();

        return $owner;
    }
}

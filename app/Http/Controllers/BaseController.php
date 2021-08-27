<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController
{
    protected $classe;
    public function index()
    {
        return $this->classe::all();
    }

    public function store(Request $request)
    {
        return response()->json(
            $this->classe::create($request->all()),
            status: 201
        );
    }

    public function show(int $id)
    {
        $resource = $this->classe::find($id);
        if (is_null($resource)) {
            return response()->json("", status: 204);
        }
        return response()->json($resource);
    }

    public function update(int $id, Request $request)
    {
        $resource = $this->classe::find($id);
        if (is_null($resource)) {
            return response()->json(
                ["error" => "Recurso não encontrado!"],
                status: 404
            );
        }
        $resource->fill($request->all());
        $resource->save();

        return $resource;
    }

    public function destroy(int $id)
    {
        $numberOfResourcesRemoved = $this->classe::destroy($id);
        if ($numberOfResourcesRemoved === 0) {
            return response()->json(
                ["error" => "Recurso não encontrado"],
                status: 404
            );
        }

        return response()->json("", status: 204);
    }
}

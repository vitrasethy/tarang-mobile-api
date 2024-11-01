<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportTypeRequest;
use App\Http\Resources\SportTypeResource;
use App\Models\SportType;

class SportTypeController extends Controller
{
    public function index()
    {
        return SportTypeResource::collection(SportType::all());
    }

    public function store(SportTypeRequest $request)
    {
        return new SportTypeResource(SportType::create($request->validated()));
    }

    public function show(SportType $sportType)
    {
        return new SportTypeResource($sportType);
    }

    public function update(SportTypeRequest $request, SportType $sportType)
    {
        $sportType->update($request->validated());

        return new SportTypeResource($sportType);
    }

    public function destroy(SportType $sportType)
    {
        $sportType->delete();

        return response()->json();
    }
}

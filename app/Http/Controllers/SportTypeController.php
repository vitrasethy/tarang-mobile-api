<?php

namespace App\Http\Controllers;

use App\Http\Requests\SportTypeRequest;
use App\Http\Resources\SportTypeResource;
use App\Models\SportType;

class SportTypeController extends BaseController
{
    public function index()
    {
        return $this->successResponse(SportTypeResource::collection(SportType::all()));
    }

    public function store(SportTypeRequest $request)
    {
        return $this->successResponse(new SportTypeResource(SportType::create($request->validated())));
    }

    public function show(SportType $sportType)
    {
        return $this->successResponse(new SportTypeResource($sportType));
    }

    public function update(SportTypeRequest $request, SportType $sportType)
    {
        $sportType->update($request->validated());

        return $this->successResponse(new SportTypeResource($sportType));
    }

    public function destroy(SportType $sportType)
    {
        $sportType->delete();

        return $this->successResponse([]);
    }
}

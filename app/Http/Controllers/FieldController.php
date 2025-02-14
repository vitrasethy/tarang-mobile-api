<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Http\Resources\FieldResource;
use App\Models\Field;
use App\Models\SportType;

class FieldController extends BaseController
{
    public function index()
    {
        return $this->successResponse(FieldResource::collection(Field::with('sportType')->get()));
    }

    public function store(FieldRequest $request)
    {
        return $this->successResponse(new FieldResource(Field::create($request->validated())));
    }

    public function show(Field $field)
    {
        return $this->successResponse(new FieldResource($field->load('sportType')));
    }

    public function update(FieldRequest $request, Field $field)
    {
        $field->update($request->validated());

        return $this->successResponse(new FieldResource($field));
    }

    public function destroy(Field $field)
    {
        $field->delete();

        return $this->successResponse([]);
    }

    public function indexBySportType(SportType $type)
    {
        $fields = Field::where('sport_type_id', $type->id)->with('sportType')->get();

        return $this->successResponse(FieldResource::collection($fields));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Http\Resources\FieldResource;
use App\Models\Field;

class FieldController extends BaseController
{
    public function index()
    {
        return $this->successResponse(FieldResource::collection(Field::all()));
    }

    public function store(FieldRequest $request)
    {
        return $this->successResponse(new FieldResource(Field::create($request->validated())));
    }

    public function show(Field $field)
    {
        return $this->successResponse(new FieldResource($field));
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
}

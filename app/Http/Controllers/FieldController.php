<?php

namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Http\Resources\FieldResource;
use App\Models\Field;

class FieldController extends Controller
{
    public function index()
    {
        return FieldResource::collection(Field::all());
    }

    public function store(FieldRequest $request)
    {
        return new FieldResource(Field::create($request->validated()));
    }

    public function show(Field $field)
    {
        return new FieldResource($field);
    }

    public function update(FieldRequest $request, Field $field)
    {
        $field->update($request->validated());

        return new FieldResource($field);
    }

    public function destroy(Field $field)
    {
        $field->delete();

        return response()->json();
    }
}

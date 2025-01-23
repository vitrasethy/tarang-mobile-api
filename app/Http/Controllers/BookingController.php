<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Resources\BookingResource;
use App\Models\Booking;

class BookingController extends BaseController
{
    public function index()
    {
        return $this->successResponse(BookingResource::collection(Booking::all()));
    }

    public function store(BookingRequest $request)
    {
        return $this->successResponse(new BookingResource(Booking::create($request->validated())));
    }

    public function show(Booking $booking)
    {
        return $this->successResponse(new BookingResource($booking));
    }

    public function update(BookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());

        return new BookingResource($booking);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return response()->json();
    }
}

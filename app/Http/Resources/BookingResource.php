<?php

namespace App\Http\Resources;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

/** @mixin Booking */
class BookingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'start_date' => Carbon::parse($this->start_date)->toDayDateTimeString(),
            'end_date' => Carbon::parse($this->end_date)->toDayDateTimeString(),

            'field' => new FieldResource($this->whenLoaded('field')),
        ];
    }
}

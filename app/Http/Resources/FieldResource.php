<?php

namespace App\Http\Resources;

use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Field */
class FieldResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sportType' => new SportTypeResource($this->whenLoaded('sportType')),
            'open_time' => $this->open_time,
            'close_time' => $this->close_time
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiscountResource extends JsonResource
{
    #[OA\Schema(
        schema: 'GenreResource',
        type: 'object',
        properties: [
            new OA\Property(property: 'id', type: 'integer', example: 1),
            new OA\Property(property: 'percentage', type: 'float', example: 20),
            new OA\Property(property: 'valid_at', type: 'timestamp', example: 12/02/2026),
            new OA\Property(property: 'expires_at', type: 'timestamp', exmaple: 12/06/2026),
            new OA\Property(property: 'active', type: 'boolean', exmaple: 1)
        ]
    )]
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'percentage' => $this->percentage,
            'valid_at' => $this->valid_at,
            'expires_at' => $this->expires_at,
            'active' => $this->active
        ];
    }
}

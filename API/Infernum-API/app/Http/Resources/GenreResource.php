<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

class GenreResource extends JsonResource
{

    #[OA\Schema(
        schema: 'GenreResource',
        type: 'object',
        properties: [
            new OA\Property(property: 'id', type: 'integer', example: 1),
            new OA\Property(property: 'type', type: 'string', example: 'Accion')
        ]
    )]
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'type' => $this->type
        ];
    }
}

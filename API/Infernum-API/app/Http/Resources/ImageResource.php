<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;


#[OA\Schema(
    schema: 'ImageResource',
    type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'url', type: 'string', example: 'https://image.com'),
        new OA\Property(property: 'type', type: 'enum', example: 'portrait')
    ]
)]
class ImageResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'url' => $this->url,
            'type' => $this->type
        ];
    }
}

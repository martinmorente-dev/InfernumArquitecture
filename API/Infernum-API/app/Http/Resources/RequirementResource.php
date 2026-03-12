<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;


#[OA\Schema(
    schema: 'RequirementResource',
    type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'type', type: 'enum', example: 'min'),
        new OA\Property(property: 'os', type: 'string', example: 'Windows 10'),
        new OA\Property(property: 'ram', type: 'string', example: '16 GB'),
        new OA\Property(property: 'gpu', type: 'string', example: 'Nvidia Geforce 3060'),
        new OA\Property(property: 'storage', type: 'string', example: '10GB')
    ]
)]
class RequirementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'type' => $this->type,
            'os' => $this->os,
            'ram' => $this->ram,
            'gpu' => $this->gpu,
            'storage' => $this->storage
        ];
    }
}

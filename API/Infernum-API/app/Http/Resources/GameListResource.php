<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ImageResource;
use App\Http\Resources\DiscountResource;
use App\Http\Resources\GenreResource;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'GameListResource',
    type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'name', type: 'string', example: 'Dark Souls'),
        new OA\Property(property: 'short_description', type: 'string', example: 'es un aclamado juego de rol de acción (ARPG) de fantasía oscura, desarrollado por FromSoftware'),
        new OA\Property(property: 'price', type: 'float', example: 39.99),
        new OA\Property(property: 'final_price', type: 'float', example: 20.99),
        new OA\Property(property: 'genres', ref: '#/components/schemas/GenreResource'),
        new OA\Property(property: 'images', ref: '#/components/schemas/ImageResource'),
        new OA\Property(property: 'requirements', ref: '#/components/schemas/RequirementResource'),
        new OA\Property(property: 'discounts', ref: '#/components/schemas/DiscountResource')
    ]
)]
class GameListResource extends JsonResource
{
 
    public function toArray(Request $request): array
    {
        $discount = $this->activeDiscounts()->first();

        $finalPrice = $discount ? $this->price - ($this->price * $discount->percentage / 100) : $this->price;
        
        return [

            'id' => $this->id,
            'name' => $this->name,
            'short_description' => $this->short_description,
            'price' => $this->price,
            'final_prince' => $finalPrice,
            'genres' => GenreResource::collection(
                $this->whenLoaded('genres')
            ),
            'images' => ImageResource::collection(
                $this->whenLoaded('images')
            ),
            'discount' => new DiscountResource(
                $this->whenLoaded('discounts')
            )
        ];
    }
}

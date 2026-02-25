<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\GenreResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\RequirementResource;
use App\Http\Resources\DiscountResource;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'GameResource',
      type: 'object',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'name', type: 'string', example: 'Dark Souls'),
        new OA\Property(property: 'short_description', type: 'string', example: 'es un aclamado juego de rol de acción (ARPG) de fantasía oscura, desarrollado por FromSoftware'),
        new OA\Property(property: 'long_description', type: 'string', example: 'Los juegos de Dark Souls se juegan en tercera persona y se centran en explorar entornos interconectados mientras se lucha contra enemigos con armas y magia . Los jugadores luchan contra jefes para avanzar en la historia, a la vez que interactúan con personajes no jugables.'),
        new OA\Property(property: 'price', type: 'float', example: 39.99),
        new OA\Property(property: 'final_price', type: 'float', example: 20.99),
        new OA\Property(property: 'genres', ref: '#/components/schemas/GenreResource'),
        new OA\Property(property: 'images', ref: '#/components/schemas/ImageResource'),
        new OA\Property(property: 'requirements', ref: '#/components/schemas/RequirementResource'),
        new OA\Property(property: 'discounts', ref: '#/components/schemas/DiscountResource')
    ]
)]

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $discount = $this->activeDiscounts;

        $finalPrice = $discount ? $this->price - ($this->price * $discount->percentage / 100) : $this->price;

        return[
            'id' => $this->id,
            'name' => $this->name,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'price' => $this->price,
            'final_prince' => $finalPrice,
            'genres' => GenreResource::collection(
                $this->whenLoaded('genres')
            ),
            'images' => ImageResource::collection(
                $this->whenLoaded('images')
            ),
            'requirements' => RequirementResource::collection(
                $this->whenLoaded('requirements')
            ),
            'discounts' => new DiscountResource(
                $this->whenLoaded('discounts')
            )
        ];
    }
}

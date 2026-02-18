<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\GenreResource;
App\Http\Resources\ImageResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'name' => $this->name,
            'shortDescription' => $this->shortDescription,
            'longDescription' => $this->longDescription,
            'price' => $this->price,
            'genre' => $this->GenreResource::collection(
                $this->whenLoaded('genres');
            ),
            'images' => $this->ImageResource::collection(
                $this->whenLoaded('images_games');
            ),
            'requirements' => $this-> RequirementResource::collection(
                $this->whenLoaded('requirements');
            )
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Resources\GameResource;
use App\Http\Resources\GameListResource;

use Illuminate\Http\JsonResponse;

use OpenApi\Attributes as OA;

class GameController extends Controller
{

    #[OA\Get(
        path: '/v1/games/details/{id}',
        operationId: 'details',
        tags: ['Game'],
        summary: 'Obtener juego',
        parameters: [
            new OA\Parameter(
                name: 'id',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'integer', example: 1)
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Juego obtenido',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Succesfull'),
                        new OA\Property(property: 'game', ref: '#/components/schemas/GameResource')
                    ]
                )
            ),
            new OA\Response(
                response: 404,
                description: 'Juego no encontrado'
            )
        ]
    )]
    public function details(int $id): JsonResponse
    {
        $game = Game::with(['genres', 'images', 'requirements', 'discounts'])->find($id);

        if (!$game)
            return response()->json(['status' => 'Error: Game not found'], 404);
        return response()->json([
            'status' => 'Succesfull',
            'game' => new GameResource($game)
        ], 200);
    }

    #[OA\Get(
        path: '/v1/games/all/{pagination}',
        operationId: 'all',
        tags: ['Game'],
        summary: 'Obtener juego',
        parameters: [
            new OA\Parameter(
                name: 'pagination',
                in: 'path',
                required: false,
                schema: new OA\Schema(type: 'integer', example: 1)
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Juegos obtenidos',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Succesfull'),
                        new OA\Property(property: 'game', ref: '#/components/schemas/GameListResource'),
                        new OA\Property(
                            property: 'pagination',
                            type: 'object',
                            properties: [
                                new OA\Property(property: 'current_page', type: 'integer', example: 1),
                                new OA\Property(property: 'total', type: 'integer', example: 1),
                                new OA\Property(property: 'per_page', type: 'integer', example: 10),
                                new OA\Property(property: 'last_page', type: 'integer', example: 1),
                                new OA\Property(property: 'from', type: 'integer', example: 1),
                                new OA\Property(property: 'to', type: 'integer', example: 1),
                                new OA\Property(property: 'has_next_page', type: 'boolean', example: false),
                            ]
                        )
                    ]
                )
            )
        ]
    )]
    public function all(int $pagination = 10): JsonResponse
    {
        $games = Game::with(['genres', 'images', 'discounts'])->paginate($pagination);

        return response()->json([
            'status' => 'Succesfull',
            'game' => GameListResource::collection($games),
            'pagination' => [
                'current_page' => $games->currentPage(),
                'total' => $games->total(),
                'per_page' => $games->perPage(),
                'last_page' => $games->lastPage(),
                'from' => $games->firstItem(),
                'to' => $games->lastItem(),
                'has_next_page' => $games->hasMorePages()
            ]
        ]);
    }
    

}

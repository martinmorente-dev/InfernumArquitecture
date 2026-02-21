<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Resources\GameResource;
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
        $game = Game::with(['genres', 'images', 'requirements'])->find($id);

        if (!$game)
            return response()->json(['status' => 'Error: Game not found'], 404);

        return response()->json([
            'status' => 'Succesfull',
            'game' => new GameResource($game)
        ], 200);
    }



}

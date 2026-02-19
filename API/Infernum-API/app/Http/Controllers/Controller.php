<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: 'Infernum API',
    version: '0.1',
    description: 'Documentación de la API Infernum'
)]
#[OA\Server(
    url: 'http://localhost:1606/api',
    description: 'Servidor API'
)]
#[OA\SecurityScheme(
    securityScheme: 'sanctum',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'Sanctum',
    description: '**🔐 AUTORIZAR - Introduce tu TOKEN AQUÍ**\n\n1. **POST /v1/login** → copia `token`\n2. **PEGA aquí:** `Bearer 1|abc123...`\n3. **Clic Authorize** ✅\n\n**EJEMPLO:** `Bearer 1|abc123def456ghi789`',
)]
abstract class Controller
{
    //
}

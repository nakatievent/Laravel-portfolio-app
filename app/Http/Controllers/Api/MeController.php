<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        // $user = $request->user();

        return new JsonResponse([
            'data' => [
                'id' => 1,
                'name' => 'test',
                'email' => 'test',
            ],
            // 'data' => [
            //     'id' => $user->id,
            //     'name' => $user->name,
            //     'email' => $user->email,
            // ],
        ]);
    }
}

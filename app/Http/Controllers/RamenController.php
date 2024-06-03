<?php

namespace App\Http\Controllers;

use App\Models\Broth;
use App\Models\Protein;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RuntimeException;
use Symfony\Component\Process\ExecutableFinder;

class RamenController extends Control
{
    public function getBroths(): JsonResponse
    {
        return response()->json(Broth::all());
    }

    public function getProteins(): JsonResponse
    {
        return response()->json(Protein::all());
    }

    public function createOrder(Request $request): JsonResponse
    {
        $response = Http::withHeaders([
            'x-api-key' => 'ZtVdh8XQ2U8pWI2gmZ7f796Vh8GllXoN7mr0djNf',
        ])->post('https://api.tech.redventures.com.br/orders/generate-id');

        if ($response->successful()) {
            $orderNumber = $response->json()['order_number'];

            return response()->json([
                'message' => 'Order created successfully',
                'order_number' => $orderNumber,
            ]);
        }

        return response()->json([
            'message' => 'Failed to create order',
            'error' => $response->json(),
        ], $response->status());
    }
}

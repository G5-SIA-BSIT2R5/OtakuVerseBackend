<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeQuoteController extends Controller
{
    /**
     * Fetch a random anime quote from AnimeChan API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRandomQuote()
    {
        try {
            $response = Http::get('https://api.animechan.io/v1/quotes/random');

            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'data' => $response->json(),
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to fetch anime quote.',
                    'error' => $response->body(),
                ], $response->status());
            }

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching the anime quote.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

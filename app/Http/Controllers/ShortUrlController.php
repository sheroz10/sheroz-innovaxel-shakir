<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate(['url' => 'required|url']);

        $shortUrl = ShortUrl::create([
            'original_url' => $request->url,
        ]);

        return response()->json([
            'id' => $shortUrl->id,
            'url' => $shortUrl->original_url,
            'shortCode' => $shortUrl->short_code,
            'createdAt' => $shortUrl->created_at,
            'updatedAt' => $shortUrl->updated_at,
        ], 201);
    }

public function retrieve($code)
{
    $shortUrl = ShortUrl::where('short_code', $code)->firstOrFail();

    // Increment access count I have changed the name of the column to clicks
    $shortUrl->increment('clicks');

    return response()->json([
        'id' => $shortUrl->id,
        'url' => $shortUrl->original_url,
        'shortCode' => $shortUrl->short_code,
        'createdAt' => $shortUrl->created_at,
        'updatedAt' => $shortUrl->updated_at,
    ], 200);
}

}

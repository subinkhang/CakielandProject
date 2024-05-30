<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageSearchController extends Controller
{
    public function searchByImage(Request $request)
    {
        set_time_limit(300); // Tăng giới hạn thời gian thực thi lên 300 giây

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->getPathname();

        $nodeApiUrl = env('NODE_API_URL', 'http://localhost:8000');

        try {
            $response = Http::timeout(300) // Tăng thời gian chờ lên 300 giây
                ->attach(
                    'image', file_get_contents($imagePath), $image->getClientOriginalName()
                )->post("{$nodeApiUrl}/search-by-image");

            return back()->with('result', $response->json());
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}

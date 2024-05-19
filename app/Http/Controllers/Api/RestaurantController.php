<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {

        // $restaurants = Restaurant::with(['types', 'dishes'])->paginate(6);
        // return response()->json([
        //     'success' => true,
        //     'restaurants' => $restaurants,
        // ]);

        $query = Restaurant::with('types');

        if (request('type')) {
            $query->whereHas('types', function ($query) {
                $query->where('type', request('type'));
            });
        }
        $restaurants = $query->paginate(5);
        return response()->json([
            'success' => true,
            'restaurants' => $restaurants,
        ]);
    }
}

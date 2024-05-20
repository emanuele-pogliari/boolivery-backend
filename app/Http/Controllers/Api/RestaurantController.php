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

        if ($request->has('types')) {

            $types = $request->input('types');

            $typesArray = explode(',', $types);
            if ($typesArray) {
                $query->whereHas('types', function ($query) use ($typesArray) {
                    $query->whereIn('type', $typesArray);
                });
            }
        }

        $restaurants = $query->paginate(4);
        return response()->json([
            'success' => true,
            'results' => $restaurants,
        ]);
    }
}

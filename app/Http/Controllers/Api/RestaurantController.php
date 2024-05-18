<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with(['types', 'dishes'])->paginate(6);
        return response()->json([
            'success' => true,
            'restaurants' => $restaurants,
        ]);
        $types = Type::all();
        return response()->json([
            'success' => true,
            'types' => $types,
        ]);
    }
}

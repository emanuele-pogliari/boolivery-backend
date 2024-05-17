<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with(['types', 'dishes'])->paginate(2);
        return response()->json([
            'success' => true,
            'restaurants' => $restaurants,
        ]);
    }
}

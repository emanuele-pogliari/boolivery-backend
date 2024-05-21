<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\GlobalState\Restorer;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $RestaurantType = [
            [
                'restaurant_id' => '1',
                'type_id' => '1',
            ],
            [
                'restaurant_id' => '2',
                'type_id' => '5',
            ],
            [
                'restaurant_id' => '3',
                'type_id' => '8',
            ],
            [
                'restaurant_id' => '4',
                'type_id' => '6',
            ],
            [
                'restaurant_id' => '5',
                'type_id' => '8',
            ],
        ];

        foreach ($RestaurantType as $restaurantTypeBond) {
            $restaurant = Restaurant::find($restaurantTypeBond['restaurant_id']);
            $restaurant->types()->attach($restaurantTypeBond['type_id']);
        }
    }
}

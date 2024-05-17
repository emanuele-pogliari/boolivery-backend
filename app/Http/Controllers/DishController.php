<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Models\Dish;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request)
    {
        $request->validated();
        $newDish = new Dish();

        // $newDish->restaurant_id = Auth::user()->id;

        $request["restaurant_id"] = Auth::id();

        // da controllare se funzionante

        if ($request->hasFile('image')) {
            // we save the path of the image in a variable
            $path = Storage::disk('public')->put('dish_images', $request->file('image'));
            // we save the path of the image in the database
            $newDish->image = $path;
        }

        $newDish->fill($request->all());

        $newDish->save();

        return redirect()->route('admin.dishes.show', $newDish->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $request->validated();

        // if ($request->hasFile('image')) {
        //     // we save the path of the image in a variable
        //     $path = Storage::disk('public')->put('dish_images', $request->file('image'));
        //     // we save the path of the image in the database
        //     $dish->image = $path;

        //     return redirect()->route('admin.dishes.show', $dish->id);
        // }

        if ($request->hasFile('image')) {

            $path = Storage::disk('public')->put('dish_images', $request->image);

            $dish->image = $path;
        }

        $dish->update($request->all());
        $dish->save();

        return redirect()->route('admin.dishes.show', $dish->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.index');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // USER VALIDATION RULES
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            // RESTAURANT VALIDATION RULES
            'restaurant_name' => ['required', 'string', 'max:255'],
            'image' => ['file', 'required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'address' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'string', 'min:11', 'max:11', 'unique:' . Restaurant::class],
        ]);


        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $restaurant = new Restaurant();
        $restaurant->fill($request->all());

        // check if the image is present
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('restaurant_images', $request->file('image'));
            $restaurant->image = $path;
        }

        $restaurant->save();

        event(new Registered($user));
        event(new Registered($restaurant));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function message()
    {
        return [
            // USER VALIDATION RULES

            // Name messages
            'name.required' => 'The name field is required',
            'name.string' => 'The name must be composed of letters or letters and numbers',
            'name.max' => 'The name must be less than 255 characters',

            // Surname messages
            'surname.required' => 'The surname field is required',
            'surname.string' => 'The surname must be composed of letters or letters and numbers',
            'surname.max' => 'The surname must be less than 255 characters',

            // Email messages
            'email.required' => 'The email field is required',
            'email.string' => 'The email must be composed of letters or letters and numbers',
            'email.lowercase' => 'The email must be lowercase',
            'email.email' => 'The email must be a valid email',
            'email.max' => 'The email must be less than 255 characters',
            'email.unique' => 'The email must be unique',

            // Password messages
            'password.required' => 'The password field is required',
            'password.confirmed' => 'The password must be confirmed',



            // ---------------------------------------------------------------------------------------------------


            // RESTAURANT VALIDATION RULES

            // Name messages
            'restaurant_name.required' => 'The name field is required',
            'restaurant_name.string' => 'The name must be composed of letters or letters and numbers',
            'restaurant_name.max' => 'The name must be less than 255 characters',


            // Image messages
            'image.required' => 'The image field is required',
            'image.file' => 'The image must be a file',


            // Address messages
            'address.required' => 'The address field is required',
            'address.string' => 'The address must be composed of letters or letters and numbers',
            'address.max' => 'The address must be less than 255 characters',


            // VAT messages
            'vat.required' => 'The VAT field is required',
            'vat.number' => 'The VAT must be composed of numbers',
            'vat.max' => 'The VAT must be 11 characters',
            'vat.min' => 'The VAT must be 11 characters',
        ];
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $types = Type::all();
        return view('auth.register', compact('types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $data = $request->all();
        $request->validate([
            // USER VALIDATION RULES
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            // RESTAURANT VALIDATION RULES
            'restaurant_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'string', 'min:11', 'max:11', 'unique:' . Restaurant::class],
            'types' => ['required', 'array'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'name' => $request->restaurant_name,
            'address' => $request->address,
            'vat' => $request->vat,
            'image' => $request->image,
        ]);

        // check if the image is present
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('restaurant_images', $request->file('image'));
            $restaurant->image = $path;
        }

        if (Arr::exists($data, "types")) $restaurant->types()->attach($data["types"]);
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
            'restaurant_name.required' => 'Devi inserire un nome',
            'restaurant_name.string' => 'Il nome deve essere composto da lettere oppure lettere e numeri',
            'restaurant_name.max' => 'Il nome deve essere meno di 255 caratteri',


            // Address messages
            'address.required' => 'Devi inserire un indirizzo',
            'address.string' => 'L indirizzo deve essere composto da lettere oppure lettere e numeri',
            'address.max' => 'L indirizzo deve essere meno di 255 caratteri',


            // VAT messages
            'vat.required' => 'Devi inserire la P.IVA',
            'vat.number' => 'La P. IVA deve essere composta da numeri',
            'vat.max' => 'La P. IVA deve essere di 11 caratteri',
            'vat.min' => 'La P. IVA deve essere di 11 caratteri',


            // Types messages
            'types.required' => 'Devi inserire una tipologia',
        ];
    }
}

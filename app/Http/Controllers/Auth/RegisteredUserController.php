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
        $request->validate(
            [
                // USER VALIDATION RULES
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],

                // RESTAURANT VALIDATION RULES
                'restaurant_name' => ['required', 'string', 'max:255'],
                'address' => ['nullable', 'string', 'max:255'],
                'vat' => ['nullable', 'string', 'min:11', 'max:11', 'unique:' . Restaurant::class],
                'types' => ['required', 'array'],
            ],

            //USER VALIDATION MESSAGES

            [
                'name.required' => 'Devi inserire un nome',
                'name.string' => 'Il nome deve essere composto da lettere oppure lettere e numeri',
                'name.max' => 'Il nome deve essere meno di 255 caratteri',

                // Surname messages
                'surname.required' => 'Devi inserire un cognome',
                'surname.string' => 'Il cognome deve essere composto da lettere',
                'surname.max' => 'Il cognome deve essere meno di 255 caratteri',

                // Email messages
                'email.required' => 'Devi inserire una mail',
                'email.string' => 'La mail deve essere composta da lettere oppure lettere e numeri',
                'email.lowercase' => 'La mail deve essere scritta in minuscolo',
                'email.email' => 'La mail deve essere valida',
                'email.max' => 'La mail deve essere meno di 255 caratteri',
                'email.unique' => 'La mail deve essere unica',

                // Password messages
                'password.required' => 'Devi inserire una password',
                'password.confirmed' => 'Devi confermare la password',



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
            ]


        );


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
}

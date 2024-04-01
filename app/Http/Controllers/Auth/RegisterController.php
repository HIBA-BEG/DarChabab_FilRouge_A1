<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;





class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'profile_picture' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => 'required|same:password',
            'role'=>['required'],
            'banned'=>['boolean'],
        ]);

        if ($request->hasFile('profile_picture')) {
            $image = request()->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
        } else {
            $imageName = 'profile.png';
        }

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'profile_picture' => $imageName,
            'password' => Hash::make($request->password),
            'role'=>$request->role,
            'banned'=>$request->has('banned')
        ]);

        event(new Registered($user));

        Auth::login($user);

        if($user->role == 'Association' || $user->role == 'Club' || $user->role == 'Direction')
            {
                return redirect()->route('Association.home');
            }
            else if($user->role == 'Admin')
            {
                return redirect()->route('admin.home');
            }else{
                return redirect(RouteServiceProvider::HOME);
            }

    }
}

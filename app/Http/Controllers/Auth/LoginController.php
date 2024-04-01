<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        if($user->role == 'Candidate')
            {
                
                return redirect()->route('candidate.home');
            }
            else if($user->role == 'Company')
            {
                return redirect()->route('company.home');
            }else if($user->role == 'Admin')
            {
                return redirect()->route('admin.home');
            }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

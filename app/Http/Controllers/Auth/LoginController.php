<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;


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

        if($user->role == 'Association' || $user->role == 'Club' || $user->role == 'Direction')
            {
                if ($user->confirmed) {
                    // User's account is confirmed, allow login
                    return redirect()->route('association.home');
                } else {
                    // User's account is not confirmed, show error message
                    return redirect()->back()->with('error', 'Your account is not confirmed yet.');
                }
            }
            else if($user->role == 'Admin')
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

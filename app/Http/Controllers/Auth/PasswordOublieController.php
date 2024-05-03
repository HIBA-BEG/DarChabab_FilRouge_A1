<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;




class PasswordOublieController extends Controller
{
    function create(): View
    {
        return view("auth.forgotPassword");
    }

    function forgotPassword(Request $request)
{
    $request->validate([
        'email' => "required|email|exists:users",
    ]);

    $existingToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();

    $token = $existingToken ? $existingToken->token : Str::random(64);

    if ($existingToken) {
        // If a token already exists for this email, update it instead of inserting a new one
        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->update([
                'token' => $token,
                'created_at' => now()
            ]);
    } else {
       
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now()
        ]);
    }

    Mail::send('emails.forgotPassword', ['token' => $token], function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('Password Reset');
    });

    return redirect()->back()->with("success", "We have sent an email to reset your password.");
}


    function resetPassword($token)
    {
        return view('auth.newPassword', compact('token'));
    }

    function resetPasswordPost(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required",
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                "email" => $request->email,
                "token" => $request->token
            ])->first();

  
        ModelsUser::where("email", $request->email)
        ->update(["password" => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("success", "Password reset success");
    }
}

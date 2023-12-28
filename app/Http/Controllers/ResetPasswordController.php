<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

      // Afficher le formulaire de demande de réinitialisation de mot de passe
      public function showLinkRequestForm()
      {
          return view('email');
      }

        // Afficher le formulaire de réinitialisation de mot de passe
        public function showResetForm(Request $request, $token = null)
        {
            return view('reset')->with(
                ['token' => $token, 'email' => $request->email]
            );
        }

         // Soumettre le formulaire de demande de réinitialisation de mot de passe
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }
    
        // Soumettre le formulaire de réinitialisation de mot de passe
        public function reset(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
                'token' => 'required',
            ]);
    
            $response = Password::reset($request->only(
                'email', 'password', 'password_confirmation', 'token'
            ), function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            });
    
            if ($response == Password::PASSWORD_RESET) {
                return redirect()->route('login')->with('status', 'Mot de passe réinitialisé avec succès.');
            } else {
                return back()->withErrors(['email' => [__($response)]]);
            }
        }
}

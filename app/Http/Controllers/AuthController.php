<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        // Permitir login con username o email
        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$loginField => $credentials['login'], 'password' => $credentials['password']], $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'login' => 'Las credenciales proporcionadas no son correctas.',
        ])->onlyInput('login');
    }

    public function quickLogin(string $role)
    {
        $user = match($role) {
            'emanuel' => User::where('username', 'emanuel')->orWhere('role', 'student')->first(),
            'profesor' => User::where('username', 'carlos')->orWhere('role', 'teacher')->first(),
            default => null,
        };

        if ($user) {
            Auth::login($user, true);
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success', "¡Bienvenido, {$user->name}!");
        }

        return redirect()->route('login')->with('error', 'Usuario no encontrado.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

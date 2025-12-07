<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function formations()
    {
        return view('formations');
    }

    public function actualites()
    {
        return view('actualites');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // Pour l'instant, on simule une connexion simple
        // Plus tard, remplacez par l'authentification Laravel réelle

        $credentials = $request->only('email', 'password');

        // Simulation simple - à remplacer par Auth::attempt()
        if ($credentials['email'] === 'admin@jesmar.com' && $credentials['password'] === 'password') {
            // Connexion réussie - rediriger vers dashboard
            return redirect()->route('dashboard')->with('success', 'Connexion réussie !');
        }

        // Connexion échouée
        return back()->withErrors(['email' => 'Identifiants incorrects'])->withInput();
    }

    public function register()
    {
        return view('register');
    }

    public function registerSubmit(Request $request)
    {
        // Pour l'instant, on simule une inscription simple
        // Plus tard, remplacez par User::create()

        // Simulation d'inscription réussie
        return redirect()->route('login')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function dashboard()
    {
        // Pour l'instant, on permet l'accès au dashboard
        // Plus tard, ajoutez un middleware d'authentification
        return view('dashboard');
    }
}

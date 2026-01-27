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
        // TODO: Charger les filières depuis la base de données
        // $filieres = Filiere::with('matieres')->get();
        return view('formations'); // , compact('filieres')
    }

    public function actualites()
    {
        // TODO: Charger les événements et projets depuis la base de données
        // $evenements = Evenement::orderBy('date_evenement', 'desc')->get();
        // $projets = Projet::with('classe', 'profPrincipal')->orderBy('date_creation', 'desc')->get();
        return view('actualites'); // , compact('evenements', 'projets')
    }

    public function inscription()
    {
        // TODO: Charger les filières depuis la base de données
        // $filieres = Filiere::all();
        return view('inscription'); // , compact('filieres')
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
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:parent,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string',
            'profession' => 'required|string|max:255',
        ]);

        // TODO: Implémenter la création du compte parent
        // $parent = ParentUser::create([
        //     'nom' => $validated['nom'],
        //     'prenom' => $validated['prenom'],
        //     'email' => $validated['email'],
        //     'password' => Hash::make($validated['password']),
        //     'telephone' => $validated['telephone'],
        //     'adresse' => $validated['adresse'],
        //     'profession' => $validated['profession'],
        //     'date_creation' => now(),
        // ]);

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

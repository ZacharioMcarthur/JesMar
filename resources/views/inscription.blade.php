@extends('layouts.app')

@section('title', 'JesMar - Inscription')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/inscription.css') }}" nonce="{{ csp_nonce() }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/js/apply.js') }}" nonce="{{ csp_nonce() }}" defer></script>
@endpush

@section('content')
    <div class="container">
        <h1>Inscription à JesMar</h1>
        <p>Formulaire d'inscription en ligne</p>

        <form action="#" method="POST">
            @csrf
            <div class="form-section">
                <h2>Informations personnelles</h2>
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
            </div>

            <div class="form-section">
                <h2>Formation souhaitée</h2>
                <div class="form-group">
                    <label for="filiere">Filière</label>
                    <select id="filiere" name="filiere" required>
                        <option value="">Sélectionnez une filière</option>
                        <option value="com">Comptabilité Marketing</option>
                        <option value="dwm">Développement Web & Mobile</option>
                        <option value="imi">Installation et Maintenance Informatique</option>
                        <option value="mmv">Mode et Vêtements</option>
                        <option value="gc">Génie Civil</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="submit-btn">Soumettre l'inscription</button>
        </form>
    </div>
@endsection

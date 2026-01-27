<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/inscription.css') }}">
    <script src="{{ asset('assets/js/inscription.js') }}" defer></script>
    <title>JesMar - Inscription</title>
</head>

<body>
    <div class="container">
        <h1>Inscription à JesMar</h1>
        <p>Créez votre compte parent</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="form-section">
                <h2>Informations personnelles</h2>
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required value="{{ old('nom') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" id="telephone" name="telephone" required value="{{ old('telephone') }}">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe *</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmer le mot de passe *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div>

            <button type="submit" class="submit-btn">S'inscrire</button>
        </form>

        <div class="back-link">
            <a href="{{ route('login') }}">Déjà un compte ? Se connecter</a>
        </div>
    </div>
</body>

</html>


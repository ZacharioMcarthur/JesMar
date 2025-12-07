<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>JesMar - Mot de passe oublié</title>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <img src="{{ asset('assets/images/logo.png') }}" alt="JesMar Logo" class="login-logo">
            <h1>Mot de passe oublié</h1>
            <p>Entrez votre email pour recevoir un lien de réinitialisation</p>
        </div>

        <form class="login-form" action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.com">
            </div>

            <button type="submit" class="login-btn">Envoyer le lien</button>
        </form>

        <div class="login-footer">
            <p><a href="{{ route('login') }}">Retour à la connexion</a></p>
        </div>

        <div class="back-link">
            <a href="{{ route('home') }}">← Retour à l'accueil</a>
        </div>
    </div>
</body>

</html>

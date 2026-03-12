<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>JesMar - Connexion</title>
</head>

<body>
    <main>
        <div class="text">
            <div class="back">
                <a href="{{ route('home') }}" id="accueil">Retour à l'accueil</a>
            </div>
            <div class="nom">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <h1>JesMar</h1>
            </div>
            <div class="message">
                <h1>Salut ! Et bon retour !</h1>
                <p>Nous sommes ravi de vous revoir.</p>
                <p id="paragraph">Votre espace personnel
                    vous attend avec de nombreuses nouvelles. Authentifiez-vous et
                    profitez de votre espace.
                </p>
                <p id="alert">
                    Vous devez procéder à une inscription selon nos normes
                    pour disposer d'un espace utilisateur à JesMar. 
                    <br>
                    <br><a href="{{ route('register') }}">Démarrez l'inscription</a>
                </p>
            </div>
        </div>
        <div class="popup">
            <h1>Bienvenue !</h1>
            <p>Rejoignez votre espace et profitez de vos privilèges</p>
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                @if(session('success'))
                    <p style='color:green'>{{ session('success') }}</p>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p style='color:red'>{{ $error }}</p>
                    @endforeach
                @endif
                <div class="input-box">
                    <input type="email" name="email" required value="{{ old('email') }}">
                    <label for="">Votre email</label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-id-card-icon lucide-id-card">
                        <path d="M16 10h2" />
                        <path d="M16 14h2" />
                        <path d="M6.17 15a3 3 0 0 1 5.66 0" />
                        <circle cx="9" cy="11" r="2" />
                        <rect x="2" y="5" width="20" height="14" rx="2" />
                    </svg>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label for="">Votre mot de passe</label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-key-round-icon lucide-key-round">
                        <path
                            d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                        <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />
                    </svg>
                </div>
                <div class="pass">
                    <a href="{{ route('forgot-password') }}">Mot de passe oublié ?</a>
                </div>
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </main>
</body>

</html>

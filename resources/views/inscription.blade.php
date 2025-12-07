<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/inscription.css') }}">
    <script src="{{ asset('assets/js/apply.js') }}" defer></script>
    <title>JesMar - Inscription</title>
</head>

<body>
    <div class="container">
        <h1>Inscription à JesMar</h1>
        <p>Formulaire d'inscription en ligne</p>

        <form action="#" method="POST">
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
</body>

</html>

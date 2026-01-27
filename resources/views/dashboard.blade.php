<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <script src="{{ asset('assets/js/dashboard.js') }}" defer></script>
    <title>JesMar - Espace Parent</title>
</head>

<body>
    <div class="dashboard">
        <header class="dashboard-header">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="JesMar Logo">
                <h1>Espace Parent</h1>
            </div>
            <nav class="dashboard-nav">
                <a href="#" class="nav-link active" data-section="profile">Profil</a>
                <a href="#" class="nav-link" data-section="children">Mes enfants</a>
                <a href="#" class="nav-link" data-section="documents">Documents</a>
                <a href="#" class="nav-link" data-section="messages">Messages</a>
                <a href="{{ route('logout') }}" class="logout-btn">Déconnexion</a>
            </nav>
        </header>

        <main class="dashboard-main">
            <!-- Section Profil -->
            <section id="profile" class="dashboard-section active">
                <h2>Mon Profil</h2>
                <div class="profile-info">
                    <div class="profile-avatar">
                        <img src="{{ asset('assets/images/parent.png') }}" alt="Avatar">
                    </div>
                    <div class="profile-details">
                        <h3>Informations personnelles</h3>
                        <p><strong>Nom:</strong> [Nom du parent]</p>
                        <p><strong>Email:</strong> [email@example.com]</p>
                        <p><strong>Téléphone:</strong> [Numéro de téléphone]</p>
                        <button class="edit-btn">Modifier</button>
                    </div>
                </div>
            </section>

            <!-- Section Enfants -->
            <section id="children" class="dashboard-section">
                <h2>Mes Enfants</h2>
                <div class="children-list">
                    <div class="child-card">
                        <img src="{{ asset('assets/images/etudiant.png') }}" alt="Enfant">
                        <div class="child-info">
                            <h3>[Nom de l'enfant]</h3>
                            <p><strong>Filière:</strong> Développement Web & Mobile</p>
                            <p><strong>Classe:</strong> 2nde</p>
                            <p><strong>Statut:</strong> <span class="status active">Actif</span></p>
                        </div>
                        <div class="child-actions">
                            <button class="view-btn">Voir détails</button>
                            <button class="contact-btn">Contacter</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Documents -->
            <section id="documents" class="dashboard-section">
                <h2>Documents</h2>
                <div class="documents-grid">
                    <div class="document-card">
                        <div class="document-icon">📄</div>
                        <div class="document-info">
                            <h3>Fiche d'inscription</h3>
                            <p>Téléchargez votre fiche d'inscription</p>
                            <button class="download-btn">Télécharger</button>
                        </div>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">📊</div>
                        <div class="document-info">
                            <h3>Bulletin scolaire</h3>
                            <p>Bulletins de notes disponibles</p>
                            <button class="download-btn">Télécharger</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Messages -->
            <section id="messages" class="dashboard-section">
                <h2>Messages</h2>
                <div class="messages-container">
                    <div class="message-item">
                        <div class="message-avatar">
                            <img src="{{ asset('assets/images/school.png') }}" alt="École">
                        </div>
                        <div class="message-content">
                            <h4>JesMar Administration</h4>
                            <p>Les inscriptions pour la nouvelle année sont ouvertes...</p>
                            <span class="message-date">Il y a 2 jours</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>


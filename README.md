# **JesMar**

## Plateforme de Gestion Scolaire Technique  
**Développement Web – HTML / CSS / JS / Laravel**  
Année Académique **2025–2026**

---

##  **Nom du Projet**

# **JesMar – Système de Gestion Scolaire Technique**

JesMar est une application web responsive destinée aux écoles techniques.  
Elle permet la gestion complète des élèves, enseignants, programmes, emplois du temps et ressources pédagogiques, tout en offrant une interface moderne fidèle à une maquette fournie au préalable.

---

##  **Membres de l'équipe**  
- **NASCIMENTO Zachario**  
- **CAKPO Frégis**  

---

##  **Objectifs du Projet**

- Digitaliser la gestion scolaire de JesMar.
- Offrir une interface intuitive et moderne basée sur HTML/CSS/JS pur.
- Faciliter la communication interne : annonces, documents, événements.
- Permettre la gestion académique complète (notes, filières, modules).
- Déployer un système sécurisé avec rôles et permissions.
- Faciliter l'accès aux supports de cours et documents pédagogiques.

---

##  **Fonctionnalités Principales**

###  Gestion des utilisateurs
- Comptes Admin / Professeur / Élève / Parent
- Rôles & permissions  
- Authentification sécurisée  
- Double authentification Google (2FA) (à venir)

###  Gestion scolaire
- CRUD des filières, classes et modules  
- Affectation des professeurs  
- Saisie, édition et consultation des notes  
- Génération automatique des bulletins  
- Gestion des années scolaires
- Inscriptions en ligne

###  Gestion des événements & emplois du temps
- Emplois du temps par classe  
- Planning des examens  
- Gestion du calendrier académique  
- Gestion des projets pédagogiques

###  Ressources pédagogiques
- Téléversement de cours, documents PDF, images, vidéos  
- Accès sécurisé pour les apprenants  

###  Communication
- Publication d'annonces  
- Gestion des actualités  
- Espace FAQ  
- Messages privés et de groupe
- SMS (à venir)

###  Interface utilisateur
- Front-End en **HTML5 / CSS3 / JavaScript pur**  
- Respect strict de la maquette PDF  
- Interface responsive  
- Layout centralisé avec navbar
- Identification automatique de la page active
- Protection CSP (Content Security Policy) avec nonces

---

##  **Technologies Utilisées**

### **Front-End**
- HTML5  
- CSS3 (Flexbox, Grid, animations)  
- JavaScript Vanilla  
- Blade Templates (Laravel)

### **Back-End**
- Laravel 12.x  
- PHP 8.2  
- MySQL / MariaDB  
- Eloquent ORM

### **Sécurité**
- CSRF Protection
- Content Security Policy (CSP) avec nonces
- Authentification Laravel
- Validation des formulaires

### **Outils**
- VS Code  
- Git / GitHub  
- Composer  
- PHPMailer (réinitialisation mot de passe + token)  
- Simple QrCode  
- Google2FA  
- GuzzleHTTP  
- FedaPay (optionnel pour paiements scolaires)

---

##  **Structure du Projet**

```
JesMar/
│── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── SiteController.php    → Contrôleur principal
│   ├── Models/                       → Modèles Eloquent
│   │   ├── User.php
│   │   ├── AnneeScolaire.php
│   │   ├── Filiere.php
│   │   ├── Classe.php
│   │   ├── Eleve.php
│   │   ├── ParentUser.php
│   │   ├── Matiere.php
│   │   ├── Inscription.php
│   │   ├── Evenement.php
│   │   └── Projet.php
│   └── helpers.php                   → Helper CSP nonce
│── database/
│   └── migrations/                   → Migrations de la base de données
│       ├── create_annee_scolaire_table.php
│       ├── create_filiere_table.php
│       ├── create_parent_table.php
│       ├── create_classe_table.php
│       ├── create_eleve_table.php
│       ├── create_inscription_table.php
│       ├── create_prof_principal_table.php
│       ├── create_secretaire_table.php
│       ├── create_surveillant_table.php
│       ├── create_projet_table.php
│       ├── create_evenement_table.php
│       ├── create_fichier_table.php
│       ├── create_message_prive_table.php
│       ├── create_groupe_message_table.php
│       ├── create_membre_groupe_table.php
│       ├── create_message_groupe_table.php
│       ├── create_message_groupe_lu_table.php
│       └── create_sms_table.php
│── public/
│   └── assets/                       → Assets statiques
│       ├── css/                      → Fichiers CSS
│       ├── js/                       → Fichiers JavaScript
│       └── images/                   → Images
│── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         → Layout principal avec navbar
│       ├── home.blade.php            → Page d'accueil
│       ├── about.blade.php           → À propos
│       ├── formations.blade.php      → Formations
│       ├── actualites.blade.php      → Actualités
│       ├── inscription.blade.php     → Inscription
│       ├── login.blade.php           → Connexion
│       ├── register.blade.php        → Inscription utilisateur
│       ├── forgot-password.blade.php → Mot de passe oublié
│       └── dashboard.blade.php       → Tableau de bord parent
│── routes/
│   └── web.php                       → Routes de l'application
│── storage/                          → Fichiers téléversés
│── .env.example                      → Exemple de configuration
└── composer.json                     → Dépendances PHP
```

---

##  **Installation & Configuration**

### Prérequis
- PHP >= 8.2
- Composer
- MySQL/MariaDB
- Node.js et npm (optionnel)

### Installation

1. **Cloner le projet**
```bash
git clone https://github.com/ZacharioMcarthur/JesMar.git
cd JesMar
```

2. **Installer les dépendances**
```bash
composer install
npm install  # Si vous utilisez des assets compilés
```

3. **Configuration de l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurer la base de données**
Éditez le fichier `.env` et configurez votre base de données :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jesmar
DB_USERNAME=root
DB_PASSWORD=
```

5. **Exécuter les migrations**
```bash
php artisan migrate
```

6. **Créer le lien symbolique pour le stockage**
```bash
php artisan storage:link
```

7. **Lancer le serveur de développement**
```bash
php artisan serve
```

L'application sera accessible à l'adresse : `http://localhost:8000`

---

##  **Fonctionnalités Récentes**

### ✅ Layout Centralisé
- Navbar et footer centralisés dans `resources/views/layouts/app.blade.php`
- Toutes les vues utilisent `@extends('layouts.app')`
- Identification automatique de la page active avec `request()->routeIs()`

### ✅ Sécurité CSP
- Implémentation de Content Security Policy avec nonces
- Helper `csp_nonce()` dans `app/helpers.php`
- Nonces appliqués sur tous les scripts et styles

### ✅ Modèles Eloquent
- Modèles créés avec relations :
  - `AnneeScolaire` → Relations avec `Classe` et `Inscription`
  - `Filiere` → Relations avec `Classe` et `Matiere`
  - `Classe` → Relations avec `Filiere`, `AnneeScolaire` et `Eleve`
  - `Eleve` → Relations avec `Classe` et `ParentUser`
  - `ParentUser` → Relations avec `Eleve`
  - `Inscription` → Relations avec `Eleve`, `Classe` et `AnneeScolaire`
  - `Evenement` → Modèle pour les événements
  - `Projet` → Relations avec `Classe` et `ProfPrincipal`
  - `ProfPrincipal` → Relations avec `Classe` et `Projet`
  - `Matiere` → Relations avec `Filiere`

### ✅ Validation des Formulaires
- Validation ajoutée pour l'inscription utilisateur
- Règles de validation pour email, mot de passe, etc.
- Messages d'erreur personnalisés

### ✅ Migrations de Base de Données
- Toutes les tables de la base de données ont leurs migrations
- Relations étrangères configurées
- Structure prête pour l'importation des données

---

##  **Routes Disponibles**

### Pages Publiques
- `/` - Page d'accueil
- `/about` - À propos de l'école
- `/formations` - Formations académiques
- `/actualites` - Actualités (événements et projets)
- `/inscription` - Formulaire d'inscription

### Authentification
- `/login` - Page de connexion
- `/register` - Page d'inscription utilisateur
- `/forgot-password` - Mot de passe oublié
- `/dashboard` - Tableau de bord (protégé)

---

##  **Base de Données**

### Tables Principales
- `annee_scolaire` - Années scolaires
- `filiere` - Filières de formation
- `classe` - Classes
- `matiere` - Matières
- `eleve` - Élèves
- `parent` - Parents
- `inscription` - Inscriptions
- `prof_principal` - Professeurs principaux
- `secretaire` - Secrétaires
- `surveillant` - Surveillants
- `projet` - Projets pédagogiques
- `evenement` - Événements
- `fichier` - Fichiers uploadés
- `message_prive` - Messages privés
- `groupe_message` - Groupes de messages
- `message_groupe` - Messages de groupe
- `message_groupe_lu` - Messages lus
- `sms` - SMS

---

##  **Développement**

### Commandes Utiles

```bash
# Créer un nouveau contrôleur
php artisan make:controller NomController

# Créer un nouveau modèle
php artisan make:model NomModel

# Créer une migration
php artisan make:migration create_nom_table

# Exécuter les migrations
php artisan migrate

# Annuler la dernière migration
php artisan migrate:rollback

# Vider le cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Régénérer l'autoload
composer dump-autoload
```

---

##  **Sécurité**

### Mesures Implémentées
- ✅ Protection CSRF sur tous les formulaires
- ✅ Content Security Policy (CSP) avec nonces
- ✅ Validation des entrées utilisateur
- ✅ Protection contre les injections SQL (Eloquent ORM)
- ✅ Hashage des mots de passe (bcrypt)

### À Implémenter
- [ ] Authentification Laravel complète
- [ ] Middleware d'autorisation par rôles
- [ ] Double authentification (2FA)
- [ ] Rate limiting
- [ ] Protection XSS avancée

---

##  **Packages Optionnels**

```bash
# Google 2FA
composer require pragmarx/google2fa-laravel

# QR Code
composer require simplesoftwareio/simple-qrcode

# HTTP Client
composer require guzzlehttp/guzzle

# Paiements
composer require fedapay/fedapay-php
```

---

##  **Contributeurs**

- **NASCIMENTO Zachario**
- **CAKPO Frégis**

---

##  **Licence**

Ce projet est développé pour l'école technique JesMar.

---

##  **Changelog**

Voir [CHANGELOG.md](CHANGELOG.md) pour l'historique complet des versions.

### Version 1.1.0 (Décembre 2025)
- ✅ Layout centralisé avec navbar
- ✅ Implémentation CSP avec nonces
- ✅ Création des modèles Eloquent avec relations
- ✅ Migrations de base de données complètes
- ✅ Identification automatique de la page active
- ✅ Helper CSP nonce
- ✅ Structure de projet améliorée
- ✅ Validation des formulaires
- ✅ Fichier `.env.example` créé
- ✅ Documentation complète

### Version 1.0.0
- Migration initiale vers Laravel
- Pages principales (accueil, à propos, formations, actualités)
- Système d'authentification de base
- Dashboard parent

---

##  **Améliorations Apportées**

### Architecture & Structure
- ✅ Layout centralisé (`resources/views/layouts/app.blade.php`)
- ✅ Système de sections Blade (`@section`, `@yield`, `@stack`)
- ✅ Helper personnalisé pour CSP nonces (`app/helpers.php`)
- ✅ Modèles Eloquent avec relations complètes
- ✅ Migrations de base de données organisées
- ✅ Nettoyage des migrations en double

### Sécurité
- ✅ Content Security Policy (CSP) avec nonces
- ✅ Protection CSRF sur tous les formulaires
- ✅ Validation des formulaires
- ✅ Hashage des mots de passe (préparé)

### Interface Utilisateur
- ✅ Navbar responsive avec identification de page active
- ✅ Menu mobile fonctionnel
- ✅ Footer centralisé
- ✅ Assets organisés (`public/assets/`)

### Base de Données
- ✅ 19 tables avec migrations complètes
- ✅ Relations étrangères configurées
- ✅ Modèles Eloquent avec relations
- ✅ Prêt pour l'importation des données

### Code Quality
- ✅ Structure MVC respectée
- ✅ Séparation des responsabilités
- ✅ Code commenté et documenté
- ✅ README et CHANGELOG à jour

---

##  **Support**

Pour toute question ou problème, contactez :
- Email : jesmar.tech.org@gmail.com
- Téléphone : +229 01 52 76 22 22 / +229 01 52 83 11 11

# Changelog

Tous les changements notables de ce projet seront documentés dans ce fichier.

## [1.1.0] - 2025-12-06

### Ajouté
- Layout centralisé (`resources/views/layouts/app.blade.php`) avec navbar et footer
- Helper CSP nonce (`app/helpers.php`) pour la sécurité Content Security Policy
- Modèles Eloquent avec relations :
  - `AnneeScolaire` - Gestion des années scolaires
  - `Filiere` - Gestion des filières
  - `Classe` - Gestion des classes
  - `Eleve` - Gestion des élèves
  - `ParentUser` - Gestion des parents
  - `Matiere` - Gestion des matières
  - `Inscription` - Gestion des inscriptions
  - `Evenement` - Gestion des événements
  - `Projet` - Gestion des projets pédagogiques
  - `ProfPrincipal` - Gestion des professeurs principaux
- Migrations complètes pour toutes les tables de la base de données
- Identification automatique de la page active dans la navbar
- Nonces CSP appliqués sur tous les scripts et styles
- Fichier `.env.example` pour la configuration
- Documentation complète dans le README

### Modifié
- Toutes les vues converties pour utiliser le layout centralisé
- `home.blade.php` - Utilise maintenant `@extends('layouts.app')`
- `about.blade.php` - Convertie pour utiliser le layout
- `formations.blade.php` - Convertie avec `@push('scripts')`
- `inscription.blade.php` - Convertie avec `@push('styles')` et `@push('scripts')`
- `actualites.blade.php` - Nettoyée pour utiliser le layout
- `composer.json` - Ajout du helper dans l'autoload

### Amélioré
- Structure du projet mieux organisée
- Sécurité renforcée avec CSP
- Code plus maintenable avec layout centralisé
- Relations Eloquent pour faciliter les requêtes

## [1.0.0] - 2025-12-05

### Ajouté
- Migration initiale du projet statique vers Laravel
- Pages principales :
  - Page d'accueil
  - Page À propos
  - Page Formations
  - Page Actualités
  - Page Inscription
- Système d'authentification de base (login, register, forgot password)
- Dashboard parent
- Routes de base configurées
- Assets (CSS, JS, images) migrés vers `public/assets/`


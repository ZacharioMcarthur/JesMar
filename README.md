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
- Faciliter l’accès aux supports de cours et documents pédagogiques.

---

##  **Fonctionnalités Principales**

###  Gestion des utilisateurs
- Comptes Admin / Professeur / Élève  
- Rôles & permissions  
- Authentification sécurisée  
- Double authentification Google (2FA)  

###  Gestion scolaire
- CRUD des filières, classes et modules  
- Affectation des professeurs  
- Saisie, édition et consultation des notes  
- Génération automatique des bulletins  

###  Gestion des événements & emplois du temps
- Emplois du temps par classe  
- Planning des examens  
- Gestion du calendrier académique  

###  Ressources pédagogiques
- Téléversement de cours, documents PDF, images, vidéos  
- Accès sécurisé pour les apprenants  

###  Communication
- Publication d’annonces  
- Gestion des actualités  
- Espace FAQ  

###  Interface utilisateur
- Front-End en **HTML5 / CSS3 / JavaScript pur**  
- Respect strict de la maquette PDF  
- Interface responsive  

---

##  **Technologies Utilisées**

### **Front-End**
- HTML5  
- CSS3 (Flexbox, Grid, animations)  
- JavaScript Vanilla  

### **Back-End**
- Laravel 12.x / 5.23.1  
- PHP 8.2  
- MySQL / MariaDB  

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

##  **Installation & Lancement du Projet**

```bash
composer create-project --prefer-dist laravel/laravel JesMar
git init
git add .
git commit -m "Initial commit du projet JesMar"
git remote add origin https://github.com/ZacharioMcarthur/JesMar.git
git branch -M main
git push -u origin main

php artisan storage:link

# Gestion des médias lourds
git lfs install
git lfs track "*.mp4"
git lfs track "*.mov"
git lfs track "*.png"
git lfs track "*.jpg"
git lfs track "*.mkv"
git lfs track "*.avi"
git lfs track "*.pdf"
git add .gitattributes
//lorque le commit est déjà effectué une première fois
git remote remove origin
git remote add origin https://github.com/ZacharioMcarthur/culture.git
git add .
git commit -m "Nouveau commit — écrasement"

# Packages importants
composer require feedapi/feedapi
composer require pragmarx/google2fa-laravel
php artisan vendor:publish --provider="PragmaRX\Google2FALaravel\ServiceProvider"
php artisan make:migration add_google2fa_secret_to_users_table --table=users

composer require simplesoftwareio/simple-qrcode
composer require guzzlehttp/guzzle
composer require fedapay/fedapay-php

php artisan tinker
composer dump-autoload
```


JesMar/
│── public/               → Front-End (HTML/CSS/JS)
│── resources/views/      → Vues Laravel
│── app/Models/           → Modèles (Élèves, Professeurs, Classes…)
│── app/Http/Controllers/ → Logique backend
│── database/migrations/  → Structure de la base de données
│── storage/              → Fichiers téléversés

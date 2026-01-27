@extends('layouts.app')

@section('title', 'JesMar - À propos')

@section('content')
        <svg class="fondt"></svg>
        <div class="entete">
            <h1>À propos de <span>JesMar</span></h1>
            <p>Découvrez notre école et nos valeurs</p>
            <img src="{{ asset('assets/images/coverbg.png') }}" alt="">
        </div>
        <div class="container" id="about">
            <h5>Qui sommes-nous ?</h5>
            <h1>CPET/ETEP JesMar</h1>
            <p>Fondée en 2021, <strong>JesMar</strong>, un nom inspiré de Jésus (le fils unique envoyé par la
                miséricorde de Dieu pour sauver le monde du péché) et Marie (la mère sainte Biologique de Jésus),
                est une école technique et professionnelle dédiée à la formation de jeunes compétents, motivés et
                prêts à relever les défis du monde professionnel. Reconnue officiellement depuis le 1er juillet 2022,
                JesMar allie <strong>rigueur académique</strong>, <strong>valeurs humaines</strong> et
                <strong>engagement</strong> pour l'excellence.
            </p>
        </div>
        <div class="container">
            <div class="mission">
                <h2>Mission</h2>
                <p>JesMar a pour but de donner une formation de qualité à une nouvelle génération de techniciens et de
                    praticiens d'excellence capables de s'insérer dans le milieu professionnel des grandes entreprises ou de se
                    prendre en charge pour parvenir à la création de leur propre entreprise ou encore d'accéder à de grandes écoles universitaires.</p>
            </div>
            <div class="vision">
                <h2>Vision</h2>
                <p>Atténuer la pénurie de travailleurs qualifiés et à encourager les élèves et étudiants à explorer
                    des options de carrière dans les domaines des métiers techniques et professionnels.</p>
            </div>
        </div>
        <div class="container" id="contact">
            <h1>Contactez-nous</h1>
            <div class="contact-info">
                <div class="contact-item">
                    <h3>Adresse</h3>
                    <p>École JesMar<br>Quartier X, Ville Y<br>Bénin</p>
                </div>
                <div class="contact-item">
                    <h3>Téléphone</h3>
                    <p>+229 01 52 76 22 22<br>+229 01 52 83 11 11</p>
                </div>
                <div class="contact-item">
                    <h3>Email</h3>
                    <p>jesmar.tech.org@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="container" id="faqs">
            <h1>Questions Fréquemment Posées</h1>
            <div class="faq-item">
                <h3>Quels sont les programmes offerts ?</h3>
                <p>JesMar offre des formations en Comptabilité Marketing, Développement Web & Mobile, Maintenance Informatique, Mode & Vêtements, et Génie Civil.</p>
            </div>
            <div class="faq-item">
                <h3>Quelle est la durée des formations ?</h3>
                <p>Les formations sont généralement de 2 ans pour l'obtention du DT et du BAC professionnel.</p>
            </div>
        </div>
@endsection

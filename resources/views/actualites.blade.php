@extends('layouts.app')

@section('title', 'JesMar - Actualités')

@section('content')
        <svg class="fondt"></svg>
        <div class="entete">
            <h1>Nos <span>actualités</span></h1>
            <p>Restez informés de nos dernières nouvelles</p>
            <img src="{{ asset('assets/images/coverbg.png') }}" alt="">
        </div>
        <div class="container">
            <h1 id="event">Événements</h1>
            <div class="event-list">
                <div class="event-item">
                    <h2>Ouverture des inscriptions 2024-2025</h2>
                    <p>Les inscriptions pour l'année académique 2024-2025 sont désormais ouvertes. Ne manquez pas cette opportunité !</p>
                    <span class="date">15 Octobre 2024</span>
                </div>
                <div class="event-item">
                    <h2>Journée Portes Ouvertes</h2>
                    <p>Découvrez notre établissement lors de notre journée portes ouvertes. Rencontrez nos professeurs et visitez nos installations.</p>
                    <span class="date">20 Novembre 2024</span>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 id="project">Projets</h1>
            <div class="project-list">
                <div class="project-item">
                    <h2>Nouveau Laboratoire Informatique</h2>
                    <p>Nous sommes fiers d'annoncer l'ouverture de notre nouveau laboratoire informatique entièrement équipé.</p>
                    <img src="{{ asset('assets/images/dwm.jpg') }}" alt="Laboratoire informatique">
                </div>
                <div class="project-item">
                    <h2>Partenariats Internationaux</h2>
                    <p>JesMar développe des partenariats avec des écoles européennes pour des échanges culturels et éducatifs.</p>
                    <img src="{{ asset('assets/images/school.png') }}" alt="Partenariats">
                </div>
            </div>
        </div>
@endsection


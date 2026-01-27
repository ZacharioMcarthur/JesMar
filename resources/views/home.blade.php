@extends('layouts.app')

@section('title', 'JesMar - Accueil')

@push('scripts')
<script src="{{ asset('assets/js/carousel_filières.js') }}" nonce="{{ csp_nonce() }}" defer></script>
@endpush

@section('content')
        <svg class="fondt"></svg>
        <div class="entete">
            <h1>2nd cycle de l'Enseignement Technique et de la Formation Professionnelle pour l'obtention du
                <span>DT</span> et du <span>BAC</span>
            </h1>
            <p>Votre choix pour le futur</p>
            <a href="" class="bouton1" download="{{ asset('assets\documents\Pospectus-général-école-2025-2026.pdf') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM14 9H19L12 16L5 9H10V3H14V9Z">
                    </path>
                </svg>Télécharger la brochure</a>
            <img src="{{ asset('assets/images/coverbg.png') }}" alt="">
        </div>
        <div class="avantage">
            <div class="text">
                <h1 class="titre">Pourquoi choisir tôt une filière <span>technique</span> ?</h1>
                <p>Une orientation vers les métiers techniques cultive l'autonomie et la responsabilité chez les
                    étudiants.
                    Elle leur permet d'explorer des passions dans des domaines techniques. En se concentrant sur des
                    compétences,
                    les étudiants répondent aux besoins du marché du travail. Cela améliore leur employabilité dès la
                    fin de
                    leurs études.
                </p>
                <a href="{{ route('formations') }}" class="bouton2">Découvrez nos filières</a>
            </div>
            <div class="image">
                <section class="schema-section">

                    <div class="circle-diagram">
                        <div class="center-dot">
                            <h6>Filière technique</h6>
                        </div>

                        <div class="step step1">
                            <div class="icon">🧭</div>
                            <div class="label">Autonomie & Responsabilité</div>
                        </div>

                        <div class="step step2">
                            <div class="icon">💡</div>
                            <div class="label">Exploration de passions techniques</div>
                        </div>

                        <div class="step step3">
                            <div class="icon">🎯</div>
                            <div class="label">Compétences & Employabilité</div>
                        </div>

                        <!-- Flèches -->
                        <div class="arrow arrow1">➜</div>
                        <div class="arrow arrow2">➜</div>
                        <div class="arrow arrow3">➜</div>

                    </div>
                </section>
            </div>
            <div class="cut-out"></div>
            <div class="cut-outtwo"></div>
        </div>
        <div class="invite">
            <h2>Nous formons des techniciens compétents et consciencieux !</h2>
            <h1>Décroche ton <span>BAC Professionnel</span> / <span>DT</span> après le BEPC</h1>
            <p>Classe ouverte : 2nd</p>
            <a href="{{ route('inscription') }}" class="bouton1">Démarrer l'inscription</a>
            <img src="{{ asset('assets/images/invitbg.JPG') }}" alt="">
        </div>
        <div class="filiere">
            <h1 class="titre">Nos filières de formation académique</h1>
            <p>Des formations techniques solides pour un <strong>accès direct à l'emploi</strong>. Allie savoir faire et
                métier d'avenir.</p>
            <div class="carousels">
                <div class="carousel2">
                    <div class="slides2">
                        <div class="slide">
                            <h2 id="dcom">Quelques débouchées</h2>
                            <ul>
                                <li>Comptable</li>
                                <li>Responsable comptable</li>
                                <li>Contrôleur de gestion</li>
                                <li>Analyste financier</li>
                                <li>Responsable marketing</li>
                                <li>Assistant marketing</li>
                                <li>Chargé d'études marketing</li>
                                <li>Responsable des ventes</li>
                                <li>Gestionnaire de clientèle</li>
                            </ul>
                        </div>
                        <div class="slide">
                            <h2 id="ddwm">Quelques débouchées</h2>
                            <ul>
                                <li>Développeur web (front-end, back-end, full stack)</li>
                                <li>Développeur mobile</li>
                                <li>Intégrateur web</li>
                                <li>Concepteur-développeur</li>
                                <li>Architecte web</li>
                                <li>Expert en sécurité informatique</li>
                            </ul>
                        </div>
                        <div class="slide">
                            <h2 id="dimi">Quelques débouchées</h2>
                            <ul>
                                <li>Expert en maintenance informatique</li>
                                <li>Administrateurs réseaux et systèmes informatique.</li>
                                <li>Auditeurs de sécurités (réseaux, système d'information, etc.)</li>
                                <li>Gestionnaire de parc informatique</li>
                                <li>Assistant de l'expert en informatique</li>
                                <li>Institutions bancaires</li>
                                <li>Administrateurs de bases de données</li>
                                <li>Développeur d'application</li>
                                <li>Auto-entreprenariat</li>
                            </ul>
                        </div>
                        <div class="slide">
                            <h2 id="dmmv">Quelques débouchées</h2>
                            <ul>
                                <li>Styliste</li>
                                <li>Costumier habilleur</li>
                                <li>Tailleur - couturier</li>
                                <li>Modéliste</li>
                                <li>Designer textile</li>
                                <li>Directeur artistique</li>
                            </ul>
                        </div>
                        <div class="slide">
                            <h2 id="dgcvl">Quelques débouchées</h2>
                            <ul>
                                <li>Chef de chantier</li>
                                <li>Constructeur de travaux</li>
                                <li>Ingénieur méthodes</li>
                                <li>Responsable de chantier</li>
                                <li>Technicien de laboratoire des matériaux</li>
                                <li>Chargé de personnel de chantier</li>
                                <li>Ingénieur d'études</li>
                                <li>Dessinateur-projeteur</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel1">
                    <div class="slides1">
                        <div class="slide">
                            <hr id="bcom">
                            <div class="image">
                                <img src="{{ asset('assets/images/com.JPG') }}" alt="">
                            </div>
                            <div class="texte" id="tcom">
                                <h1>Comptabilité Mercatique (CoM)</h1>
                                <p>Devenez un comptable moderne capable de tenir les documents comptables de petites ou
                                    grandes
                                    entreprises de façon manuelle ou virtuelle via un logiciel de gestion
                                    intégrée ou de donner des conseils en marketing ou encore mettre en place et
                                    gérer le service marketing.</p>
                                <a href="{{ route('inscription') }}">Démarrez l'inscription ></a>
                                <div class="fond" id="com"></div>
                            </div>
                        </div>
                        <div class="slide">
                            <hr id="bdwm">
                            <div class="image">
                                <img src="{{ asset('assets/images/dwm.jpg') }}" alt="">
                            </div>
                            <div class="texte" id="tdwm">
                                <h1>Informaticien Développeur Web & Mobile (DWM)</h1>
                                <p>Devenez un spécialiste de conception et de réalisation des sites web, des
                                    applications web, applications mobiles
                                    et des programmes
                                    informatiques destinés exclusive aux ordinateurs, aux smartphones et tablettes.</p>
                                <a href="{{ route('inscription') }}">Démarrez l'inscription ></a>
                                <div class="fond" id="dwm"></div>
                            </div>
                        </div>
                        <div class="slide">
                            <hr id="bimi">
                            <div class="image">
                                <img src="{{ asset('assets/images/imi.JPG') }}" alt="">
                            </div>
                            <div class="texte" id="timi">
                                <h1>Installation et Maintenance Informatique (IMI)</h1>
                                <p>Acquérez des connaissances pratiques et théoriques de l'installation et de la
                                    maintenance des ordinateurs de bureau,
                                    des ordinateurs portables, des imprimantes et des
                                    réseaux informatiques dans un environnement de type microordinateurs et serveurs
                                    pour grande entreprises.</p>
                                <a href="{{ route('inscription') }}">Démarrez l'inscription ></a>
                                <div class="fond" id="imi"></div>
                            </div>
                        </div>
                        <div class="slide">
                            <hr id="bmmv">
                            <div class="image">
                                <img src="{{ asset('assets/images/mmv.JPG') }}" alt="">
                            </div>
                            <div class="texte" id="tmmv">
                                <h1>Métier de la Mode et des Vêtements / Stylisme- Coupe et coutures (MMW)</h1>
                                <p>Devenez un créateur de mode et d'accessoires de mode dans le métier emblématique du
                                    secteur de la mode, en tant que styliste-modéliste,
                                    fashion designer et designer textile vous serez un créateur de mode et d'accessoires
                                    de mode. Vous inventerez et concevez les différents
                                    modèles d'une
                                    collection de prêt-à-porter ou de haute couture. Vous serez spécialisé en mode
                                    homme, femme, enfant, sport, lingerie…</p>
                                <a href="{{ route('inscription') }}">Démarrez l'inscription ></a>
                                <div class="fond" id="mmv"></div>
                            </div>
                        </div>
                        <div class="slide">
                            <hr id="bgcvl">
                            <div class="image">
                                <img src="{{ asset('assets/images/f4.JPG') }}" alt="">
                            </div>
                            <div class="texte" id="tgcvl">
                                <h1>F4 – Génie Civil</h1>
                                <p>En choisissant la filière Génie Civil F4, vous développez des compétences pratiques
                                    en construction,
                                    topographie, dessin technique et gestion de chantier.
                                    Devenez un acteur clé du bâtiment et des travaux publics.</p>
                                <a href="{{ route('inscription') }}">Démarrez l'inscription ></a>
                                <div class="fond" id="gcvl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

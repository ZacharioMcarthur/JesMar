<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/carousel_filières.js') }}" defer></script>
    <script src="{{ asset('assets/js/menu.js') }}" defer></script>
    <title>JesMar - Accueil</title>
</head>

<body>
    <header>
        <div class="reseaux">
            <div class="mail">
                <a href="mailto:jesmar.tech.org@gmail.com" class="link-r"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                        </path>
                    </svg>jesmar.tech.org@gmail.com</a>
                <a href="tel:+229 01 52 76 22 22" class="link-r"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                        </path>
                    </svg>+229 01 52 76 22 22 </a>
                <a href="tel:+229 01 52 83 11 11" class="link-r"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                        </path>
                    </svg>+229 01 52 83 11 11</a>
            </div>
            <div class="sociaux">
                <a href="https://www.facebook.com/ecoleprojesmar" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="fb">
                        <path
                            d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z">
                        </path>
                    </svg></a>
                <a href="https://wa.me/2290152831111" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="wht">
                        <path
                            d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z">
                        </path>
                    </svg></a>
                <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                        </path>
                    </svg></a>
            </div>
        </div>
        <nav class="navbar">
            <div class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt=""></div>
            <div class="link">
                <div class="fenetre">
                    <div class="fentitre">
                        <a href="{{ route('home') }}" class="barlink" id="index">Accueil</a>
                    </div>
                </div>
                <div class="fenetre">
                    <div class="fentitre">
                        <a href="{{ route('about') }}" class="barlink">L'école</a>
                    </div>
                    <div class="fenmenu">
                        <a href="{{ route('about') }}#about">Qui sommes-nous ?</a>
                        <a href="{{ route('about') }}#contact">Contactes</a>
                        <a href="{{ route('about') }}#faqs">FAQs</a>
                    </div>
                </div>

                <div class="fenetre">
                    <div class="fentitre">
                        <a href="{{ route('formations') }}" class="barlink">Nos formations</a>
                    </div>
                    <div class="fenmenu">
                        <a href="{{ route('formations') }}"><img src="{{ asset('assets/images/school.png') }}" alt="">Académiques</a>
                        <a href=""><img src="{{ asset('assets/images/pro.png') }}" alt="">Professinnolles</a>
                        <a href=""><img src="{{ asset('assets/images/stage.png') }}" alt="">Stages</a>
                    </div>
                </div>

                <div class="fenetre">
                    <div class="fentitre">
                        <a href="{{ route('actualites') }}" class="barlink">Actualités</a>
                    </div>
                    <div class="fenmenu">
                        <a href="{{ route('actualites') }}#event">Evenments</a>
                        <a href="{{ route('actualites') }}#project">Projets</a>
                    </div>
                </div>
                <div class="espaces">

                    <a href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M7 11C4.51472 11 2.5 8.98528 2.5 6.5C2.5 4.01472 4.51472 2 7 2C9.48528 2 11.5 4.01472 11.5 6.5C11.5 8.98528 9.48528 11 7 11ZM17.5 15C15.2909 15 13.5 13.2091 13.5 11C13.5 8.79086 15.2909 7 17.5 7C19.7091 7 21.5 8.79086 21.5 11C21.5 13.2091 19.7091 15 17.5 15ZM17.5 16C19.9853 16 22 18.0147 22 20.5V21H13V20.5C13 18.0147 15.0147 16 17.5 16ZM7 12C9.76142 12 12 14.2386 12 17V21H2V17C2 14.2386 4.23858 12 7 12Z">
                            </path>
                        </svg>Espace parent</a>

                </div>
            </div>
        </nav>
        <div class="mobile">
            <div class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt=""></div>
            <div class="links">
                <button class="menubtn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M4 3.5L9 8.49955L4 13.5V3.5ZM21 19.9995V17.9995H3V19.9995H21ZM21 12.9995V10.9995H12V12.9995H21ZM21 5.99951V3.99951H12V5.99951H21Z">
                        </path>
                    </svg></button>
                <div class="menu">
                    <button class="closemenu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
                            </path>
                        </svg></button>
                    <ul>
                        <li><a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                    </path>
                                </svg>Accueil</a></li>
                        <li><a href="{{ route('about') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                    </path>
                                </svg>L'école</a></li>
                        <li><a href="{{ route('formations') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                    </path>
                                </svg>Formations académiques</a></li>
                        <li><a href="{{ route('actualites') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                    </path>
                                </svg>Actualités</a></li>
                        <li><a href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                                    </path>
                                </svg>Espace parent</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
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
    <footer>
        <div class="section">
            <h1>CPET/EPET JesMar</h1>
            <p>Ecole Technique et Professionnelle forment des techniciens compétences pour les métiers de demain</p>
        </div>
        <div class="section" id="contacts">
            <h1>Contacts</h1>
            <ul>
                <li><a href="mailto:jesmar.tech.org@gmail.com" class="link-r"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                            </path>
                        </svg>jesmar.tech.org@gmail.com</a></li>
                <li><a href="tel:+229 01 52 76 22 22" class="link-r"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                            </path>
                        </svg>+229 01 52 76 22 22 </a></li>
                <li><a href="tel:+229 01 52 83 11 11" class="link-r"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z">
                            </path>
                        </svg>+229 01 52 83 11 11</a></li>
            </ul>
        </div>
        <div class="section" id="liens">
            <h1>Liens utiles</h1>
            <ul>
                <li><a href="{{ route('formations') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                            </path>
                        </svg>Formations académiques</a></li>
                <li><a href="{{ route('actualites') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                            </path>
                        </svg>Acutualités</a></li>
                <li><a href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                            </path>
                        </svg>Espace parent</a></li>
                <li><a href="{{ route('about') }}#contact"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                            </path>
                        </svg>Contactes</a></li>
                <li><a href="{{ route('about') }}#faqs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                            </path>
                        </svg>FAQs</a></li>
            </ul>
        </div>
        <div class="section" id="reseaux">
            <div class="contents">
                <div class="top">
                    <h1>Réseaux sociaux</h1>
                    <a href="https://www.facebook.com/ecoleprojesmar" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="fb">
                            <path
                                d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z">
                            </path>
                        </svg></a>
                    <a href="https://wa.me/2290152831111" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor" id="wht">
                            <path
                                d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z">
                            </path>
                        </svg></a>
                    <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                            </path>
                        </svg></a>
                </div>
                <div class="bottom">
                    &copy; 2023 JesMar. Tous droits réservés.
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<?php header( 'Location: /index.html' ) ;  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- CSS, Polices et Icones -->
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>WebAgency</title>
    <!-- Navbar -->
    <nav>
        <ul>
            <div class="logo">
                <li><img src="src/images/logo.png" alt="Logo"></li>
            </div>
            <div class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="index.html#Services">Services</a></li>
                <li><a href="index.html#Projets">Portfolio</a></li>
                <li><a href="index.html#Contact">Contact</a></li>
            </div>
        </ul>
    </nav>
</head>
<body>

    <!-- Index -->
    <div class="indexContainer">
        <img src="src/images/slider/bg1.jpg" alt="slider_image_1">
        <div class="imageText">
            <h1><span id="blue">WEBAGENCY</span> : L'AGENCE DE TOUS<br>VOS PROJETS !</h1>
            <p>Vous avez un projet web ? La WebAgency vous aide à le réaliser !</p>
            <div class="buttonContainer">
                <button type="button" name="button"><a href="index.html#Services">Plus d'infos</a></button>
            </div>
        </div>
    </div>

    <!-- Nos Services -->
    <div id="Services"></div>
    <div class="nosServices">
        <h1>NOS SERVICES</h1>
        <div class="diviseur">
            <span class="ligne"></span>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="ligne"></span>
        </div>
        <p>Parce que les méthodes de prospection et de ventes traditionnelles sont devenues obsolètes, et souvent trop onéreuses, le web offre un formidable potentiel de croissance pour les entreprises. Notre agence de création et refonte de site place vos clients au coeur de votre stratégie pour obtenir un sites web qui booste votre trafic, génère des leads et augmente vos ventes.</p>
    </div>
    <div class="nosServicesContainer">
        <img src="src/images/main-feature.png" alt="mockup">
        <div class="box">
            <div class="icones">
                <span><i class="fas fa-chart-line blue"></i></span>
                <span><i class="fas fa-cubes"></i></span>
                <span><i class="fas fa-chart-pie"></i></span>
            </div>
            <div class="textBox">
                <div class="text">
                    <h2>UX Design</h2>
                    <p>Notre accompagnement UX se construit autour de la rencontre de vos utilisateurs afin d’analyser leur usage du site et de comprendre leurs besoins.</p>
                </div>
                <div class="text">
                    <h2>UI Design</h2>
                    <p>L'interface utilisateur est le lien entre l'humain et la machine. C'est le produit fini présenté à l'internaute qui va lui permettre de surfer agréablement sur un site.</p>
                </div>
                <div class="text">
                    <h2>SEO</h2>
                    <p>Clé de la réussite de votre projet web, le référencement sert à optimiser votre site afin de mieux le positionner.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Projets -->
    <div id="Projets"></div>
    <div class="nosProjets">
        <div class="text">
            <h1>NOS PROJETS</h1>
            <div class="diviseur">
                <span class="ligne"></span>
                <i class="fa fa-circle" aria-hidden="true"></i>
                <span class="ligne"></span>
            </div>
            <p>Nous avons accompagné 40 000 TPE dans la création de sites internet : paysagistes, esthéticiennes, charpentiers...</p>
        </div>
        <ul class="menu">
            <li><a href="index.html#Projets">All Works</a></li>
            <li><a href="index.html#Projets">Shops</a></li>
            <li><a href="index.html#Projets">Applications</a></li>
            <li><a href="index.html#Projets">Portfolios</a></li>
        </ul>
        <div class="portfolio">
            <figure>
                <img src="src/images/portfolio/01.jpg" alt="01">
                <figcaption>
                    <h2>Monsieur Patate</h2>
                    <p>Shop en ligne spécialisé dans les produits de la marque</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/02.jpg" alt="02">
                <figcaption>
                    <h2>Paqûes Numérique</h2>
                    <p>Une chasse au trésor géante via l'application dédiée</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/03.jpg" alt="03">
                <figcaption>
                    <h2>Pompadour 2.0</h2>
                    <p>Le ChatBot intelligent de Madame de Pompadour</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/04.jpg" alt="04">
                <figcaption>
                    <h2>Schools Solutions</h2>
                    <p>Une nouvelle suite bureautique en ligne destinée aux étudiants</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/05.jpg" alt="05">
                <figcaption>
                    <h2>DropShipping Express</h2>
                    <p>une solution DropShipping rapide et sûre</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/06.jpg" alt="06">
                <figcaption>
                    <h2>The Museum</h2>
                    <p>Le plus grand musée en ligne du monde</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/07.jpg" alt="07">
                <figcaption>
                    <h2>Pencil Plus</h2>
                    <p>La meilleure app de retouche d'images en ligne</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
            <figure>
                <img src="src/images/portfolio/08.jpg" alt="08">
                <figcaption>
                    <h2>Best Material</h2>
                    <p>Shop en ligne de tablettes graphiques, ordinateurs, accessoires ...</p>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </figcaption>
            </figure>
        </div>
    </div>

    <!-- Contact -->
    <div id="Contact"></div>
    <div class="contact">
        <div class="mapBox">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.221609680721!2d2.3476369157928567!3d48.87305177928889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e145ccb3091%3A0x9495beee8c96ec27!2s25+Rue+d&#39;Hauteville%2C+75010+Paris!5e0!3m2!1sfr!2sfr!4v1548774358861" width="100%" height="720" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <form class="contactForm" action="" method="post">
            <ul>
                <div class="text">
                    <h1>Nous Contacter</h1><br>
                    <h6>WebAgency SAS</h6>
                    <p>25 Rue D'Hauteville 75010 Paris</p>
                    <p><u style="text-decoration-style: dotted">Tel :</u> 01 02 03 04 05</p>
                </div>
                <li><input type="text" name="name" placeholder="Name" value=""></li><br>
                <li><input type="email" name="email" placeholder="Email" value=""></li><br>
                <li><input type="text" name="subject" placeholder="Subject" value=""></li><br>
                <li><textarea name="message" placeholder="Message"></textarea></li><br>
                <div id="button">
                    <input type="submit" name="submit" value="Envoyer"><br>
                </div>
            </ul>
        </form>
    </div>
</body>

</html>

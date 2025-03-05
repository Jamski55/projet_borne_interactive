<!--
Titre : Page d'accueil non connecté
Contenu : Présentation générale, accès aux autre pages(connexion, liste_jeu, infos, contact), appels à l'action (ex. : « Jouez maintenant ! » ou « Découvrez nos bornes interactives »).
Objectif : Attirer l'attention et guider l'utilisateur vers le jeu ou vers plus d'informations.
-->

<?php
include '../cox_bdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style_site.css">
</head>
<body>
    
    <header>
        <div class="header-container">
            <!-- Logo -->
            <div class="logo-container">
                <img src="../ressource/logo_BI" alt="logo Borne Interactive" id="logo">
            </div>

            <!-- Barre de navigation -->
            <div class="navbar-container">
                <?php include 'navbar.php'; ?>
            </div>
        </div>
    </header>

    <main>

        <!-- Section 1: Introduction -->
        <section class="intro">
            <div class="content">
                <h1>Bienvenue sur CielPlay</h1>
                <p>Découvrez nos jeux interactifs et gagnez des récompenses !</p>
            </div>
        </section>

        <!-- Section présentation -->
        <section id = "presentation">
            <h1>CielPlay</h1>
            <p>Vous trouverez ici des informations sur nos jeux, nos bornes interactives et nos services.</p>
            <p>Vous pouvez jouer à nos jeux en ligne ou vous rendre dans l'un de nos points de vente pour jouer sur nos bornes interactives.</p>
            <p>Notre borne interactive permet de gamifier l'expérience client en magasin, collecter des données précieuses et fidéliser les acheteurs.</p>
        </section>
        
        <!-- Section 6: Appel à l'action -->
        <section class="cta">
            <h2>Rejoignez-nous aujourd'hui !</h2>
            <p>Venez essayer nos bornes et commencez à gagner des récompenses.</p>
            <p>Vous pouvez également accèder à notre <a href="liste_jeu.php" class="lien-button">liste de jeu</a> dès maintenant.</p>
        </section>

        <!-- Section 8: Pourquoi choisir cette solution ? -->
        <section class="why-choose">
            <h2>Pourquoi choisir cette solution ?</h2>
            <div class="statistics">
                <h3>50%</h3>
                <p>des enseignes utilisant le phygital constatent une augmentation du trafic en magasin.</p>
            </div>
            <div class="advantages">
                <h3>Nos avantages</h3>
                <ul>
                    <li><strong>Augmentation de la fidélisation :</strong> Gardez vos clients engagés grâce à des récompenses et des interactions régulières.</li>
                    <li><strong>Collecte de données optimisée :</strong> Suivez les comportements et préférences des clients pour affiner vos stratégies marketing.</li>
                    <li><strong>Gamification attractive :</strong> Rendez l'expérience d'achat plus ludique et immersive pour attirer davantage de clients.</li>
                </ul>
            </div>
        </section>
        
        <!-- Section fonctionnalités -->
        <section id="features">
            <h2>Nos Fonctionnalités</h2>
            <div class="features-container">
                <div class="feature-item">🎮 <strong>Jeux interactifs</strong> : Jeux en ligne pour engager les clients et récolter des données.</div>
                <div class="feature-item">🔐 <strong>Collecte de données</strong> : Formulaires et codes-barres pour personnaliser l'expérience client.</div>
                <div class="feature-item">📈 <strong>Analyse des données</strong> : Système web pour suivre les performances et les statistiques des clients.</div>
                <div class="feature-item">💾 <strong>Base de données sécurisée</strong> : Protection des données clients et gestion des informations.</div>
                <div class="feature-item">🛠️ <strong>Gestion des bornes</strong> : Configuration et maintenance des bornes en magasin.</div>
                <div class="feature-item">🌡️ <strong>Confort thermique</strong> : Optimisation de la gestion thermique des bornes en magasin.</div>
            </div>
        </section>
        
        <!-- Section à propos -->
        <section id="apropos">
            <h2>À Propos</h2>
            <p>
            Le principal objectif du phygital (soit la rencontre de la physique et du digital) est d'augmenter le trafic en magasin en attirant plus d'acheteurs. Une récente étude menée par Smart Retail montre en effet que 50% des enseignes qui ont misé sur cette stratégie phygitale ont constaté une augmentation de la fréquentation de leurs points de vente. <br>
            Une borne digitale attire l'œil des passants. Elle permet de capter facilement leur attention et de les encourager à pousser les portes du magasin, notamment pour participer à un jeu promotionnel. <br>
            En point de vente, l'expérience shopper est devenue capitale. La borne de jeu est une solution vertueuse instore pour attirer, récompenser puis fidéliser les clients. Un outil autonome, facile à mettre en place, qui permet de concilier animation en magasin et les enjeux business.
            </p>
            <p>N'hésitez pas à nous <a href="contact" class="lien-button">contacter</a> pour plus d'informations.</p>
        </section>
        
    </main>

    <footer>
        <p>&copy; 2025 Borne Interactive. Tous droits réservés.</p>
    </footer>

</body>
</html>
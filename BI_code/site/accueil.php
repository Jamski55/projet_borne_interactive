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
</head>
<body>
    
    <header>
        <!-- Barre de navigation -->
        <nav id = "navbar">
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="liste_jeu.php">Jeux</a></li>
                <li><a href="infos.php">Informations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- Section présentation -->
        <section id = "presentation">
            <h1>BIENVENUE SUR NOTRE SITE</h1>
            <p>Vous trouverez ici des informations sur nos jeux, nos bornes interactives et nos services.</p>
            <p>Vous pouvez jouer à nos jeux en ligne ou vous rendre dans l'un de nos points de vente pour jouer sur nos bornes interactives.</p>
            <p>N'hésitez pas à nous contacter pour plus d'informations.</p>
        </section>
        
    </main>

    <footer>

    </footer>

</body>
</html>
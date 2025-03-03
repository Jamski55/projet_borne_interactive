<!--
Titre : Page d'accueil connecter
Contenu : Présentation générale, accès aux autre pages (utilisateur, liste_jeu, infos, contact), appels à l'action (ex. : « Jouez maintenant ! » ou « Découvrez nos bornes interactives »).
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
        <nav>
            <ul>
                <li><a href="accueil_cox.php">Accueil</a></li>
                <!-- if co utilisateur - href"utilisateur" - else - href"admin" -->
                <li><a href="utilisateur.php">Profil</a></li>
                <li><a href="liste_jeu.php">Jeu</a></li>
                <li><a href="infos.php">Informations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

    </main>

    <footer>

    </footer>

</body>
</html>
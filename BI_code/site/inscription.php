<!--
Titre : Page d'inscription
Contenu : Formulaire d'inscription
Objectif : Permettre à l'utilisateur de s'inscrire pour accéder au jeu.
-->

<?php
include '../cox_bdd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
    <header>
        
        <!-- Logo -->
        <img src="../ressource/logo_BI" alt="logo Borne Interactive" id="logo">

        <!-- Barre de navigation -->
        <nav id="navbar">
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

        <!-- Formulaire d'inscription -->
        <section id="inscription">
            <h1>Inscription</h1>
            <form action="inscription.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <label for="password_confirm">Confirmer le mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" required>
                <button type="submit">S'inscrire</button>
            </form>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Borne Interactive. Tous droits réservés.</p>
    </footer>

</body>
</html>
<!--
Page de connexion / inscription

Contenu : Formulaire de connexion et/ou inscription pour accéder à un espace membre.
Objectif : Permettre aux utilisateurs de s'identifier, sauvegarder leurs scores ou participer à des challenges réguliers.
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

        <!-- Formulaire de connexion -->
        <section id="connexion">
            <h1>Connexion</h1>
            <form action="connexion.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Se connecter</button>
            </form>
        </section>

        <!-- Bouton d'accès a la page inscription -->
        <section id="inscription-button">
            <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Borne Interactive. Tous droits réservés.</p>
    </footer>

</body>
</html>
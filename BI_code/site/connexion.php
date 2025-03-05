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
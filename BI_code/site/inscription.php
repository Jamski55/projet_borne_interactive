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
    <title>Inscription</title>
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
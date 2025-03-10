<!--
Titre : Barre de navigation
Contenu : Barre de navigation pour accéder aux différentes pages du site.
Objectif : Faciliter la navigation entre les différentes pages du site.
-->

<?php
session_start();
$isAdmin = isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin';
$isUser = isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'user';
?>

<nav id="navbar">
    <ul>
        <li><a href="accueil.php">Accueil</a></li>
        <?php if ($isAdmin): ?>
            <li><a href="admin.php">Admin</a></li>
        <?php elseif ($isUser): ?>
            <li><a href="utilisateur.php">Utilisateur</a></li>
        <?php else: ?>
            <li><a href="connexion.php">Connexion</a></li>
        <?php endif; ?>
        <li><a href="liste_jeu.php">Jeux</a></li>
        <li><a href="infos.php">Informations</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>
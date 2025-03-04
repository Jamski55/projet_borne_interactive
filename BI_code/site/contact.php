<!--
Page de contact / support

Contenu : Formulaire de contact, FAQ, et éventuellement un chat ou une adresse e-mail pour le support.
Objectif : Offrir une assistance et recueillir des retours.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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

        <!-- Formulaire de contact -->
        <section id="contact">
            <h1>Contact</h1>
            <form action="contact.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <h1>FAQ</h1>
            <ul>
                <li>
                    <h2>Comment puis-je jouer à vos jeux ?</h2>
                    <p>Vous pouvez jouer à nos jeux en ligne ou vous rendre dans l'un de nos points de vente pour jouer sur nos bornes interactives.</p>
                </li>
                <li>
                    <h2>Comment puis-je gagner des récompenses ?</h2>
                    <p>Vous pouvez gagner des récompenses en jouant à nos jeux.</p>
                </li>
            </ul>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Borne Interactive. Tous droits réservés.</p>
    </footer>

</body>
</html>
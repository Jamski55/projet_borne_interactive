<!--
Titre : Jeu du coffre
Concept du jeu :
- Trois coffres s'affichent à l'écran.
- Le joueur clique sur un coffre pour l’ouvrir.
- Une animation d’ouverture (avec effet sonore) se déclenche.
- Le contenu du coffre est révélé (Jackpot, gain moyen, lot de consolation).
--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu coffre PlayCiel</title>
    <link rel="stylesheet" href="style_coffre.css">
</head>
<body>

    <header>
        <!-- Ton header -->
    </header>

    <main>
        <h1>Choisis un coffre !</h1>
        <div class="coffres">
            <div class="coffre" data-index="0">
                <img class="coffre-img" src="../../ressource/chest_close.png" alt="Coffre">
            </div>
            <div class="coffre" data-index="1">
                <img class="coffre-img" src="../../ressource/chest_close.png" alt="Coffre">
            </div>
            <div class="coffre" data-index="2">
                <img class="coffre-img" src="../../ressource/chest_close.png" alt="Coffre">
            </div>
        </div>

        <!-- Conteneur pour afficher le lot qui sort du coffre -->
        <div id="lotContainer"></div>

        <script src="coffre.js"></script>
    </main>

    <footer>
        <!-- Ton footer -->
    </footer>

</body>
</html>

<!--
Titre : Page de connexion à la base de données
Contenu : code de connexion à la base de données
Objectif : Permettre à l'application de se connecter à la base de données
-->

<?php
$host = 'localhost'; // ou l'IP du serveur
$dbname = 'BI'; // le nom de la base de données
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

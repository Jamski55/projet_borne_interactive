# 🎮 CielPlay - Bornes interactives en magasin

CielPlay est un projet phygital visant à augmenter le trafic en magasin via des bornes interactives. Ce système propose des jeux en ligne accessibles via des bornes dans les magasins, permettant de collecter des données clients, d'attirer des prospects, et de fidéliser les clients grâce à la gamification. Le projet inclut également des aspects liés à la sécurité des données, à la gestion des réseaux et au confort thermique des bornes.

## 📌 Contexte du projet

Dans un monde où la relation client est de plus en plus digitale, Phygiciel propose une expérience interactive en magasin grâce à des bornes de jeux qui captivent les clients tout en recueillant des informations utiles pour améliorer les stratégies de marketing et de fidélisation.

Les objectifs du projet sont :
- **Augmenter le trafic en magasin** grâce à des jeux interactifs.
- **Collecter des données clients** (via formulaires et codes-barres) pour personnaliser l'expérience.
- **Fidéliser les clients** avec un système de gamification, récompenses et interactions ludiques.
- **Sécuriser les données** clients grâce à un système de base de données sécurisé.
- **Optimiser la gestion des bornes** en magasin, incluant la gestion des réseaux et du confort thermique.

---

## 🔧 Spécifications techniques

CielPlay repose sur une infrastructure connectée incluant :
- **Bornes interactives** → accessibles via tablette Android pour les jeux en magasin.
- **Base de données sécurisée** → gestion des informations clients et des performances des jeux.
- **Jeux en ligne** → gamification pour attirer et fidéliser les clients.
- **Système de gestion des réseaux** → configuration des bornes, tests de performance.
- **Collecte de données clients** → via codes-barres, formulaires, et jeux.
- **Interface web** → pour accéder et analyser les données collectées.
- **Sécurité** → protection des données et gestion des réseaux.

---

## 🚀 Fonctionnalités principales

- 🎮 **Jeux interactifs** | Jeux en ligne pour engager les clients et récolter des données. 
- 🔐 **Collecte de données** | Formulaires et codes-barres pour personnaliser l'expérience client. 
- 📈 **Analyse des données** | Système web pour suivre les performances et les statistiques des clients. 
- 💾 **Base de données sécurisée** | Protection des données clients et gestion des informations. 
- 🛠️ **Gestion des bornes** | Configuration et maintenance des bornes en magasin. 
- 🌡️ **Confort thermique** | Optimisation de la gestion thermique des bornes en magasin. 

---

## 🔗 Technologies utilisées

- **Frontend** : HTML, CSS, JavaScript (Vue.js, React.js)
- **Backend** : Node.js / Express.js / Python (Flask)
- **Base de données** : MySQL / PostgreSQL
- **Communication** : MQTT, WebSockets, API REST
- **Systèmes embarqués** : Android (Tablette pour les bornes)
- **Cloud & Serveur** : AWS / Serveur local
- **Sécurité** : Chiffrement des données, Authentification JWT

---

## 👥 Répartition des tâches

### **👩‍💻 James**
-  **Création des jeux en ligne** : Développement des jeux interactifs à la fois sur la borne et sur l'interface web (intégration des systèmes d'identification).
- **Choix du lecteur de badge RFID** : Sélection et implémentation du lecteur de badge RFID pour permettre l'accès aux jeux via la borne.
- **Installation du système embarqué connecté** : Installation d'un système embarqué qui permet la connexion à Internet, soit par Wi-Fi, soit par réseau filaire, selon les possibilités matérielles.
- **Mise en place de la borne interactive** : Installation de la borne en magasin, en prenant en compte les contraintes physiques du local.
- **Traitement des informations des modules** : Assurer la gestion et le traitement des données recueillies par les modules et capteurs de la borne.
- **Activation du jeu avec un jeton** : Création du système d’activation du jeu pour les nouveaux clients, en utilisant un jeton.
- **Programmation du système embarqué** : Développement du système embarqué pour interagir avec les différents modules et capteurs de la borne.
- **Mise en place du système de vidéosurveillance et alarme** : Intégration de la vidéosurveillance et des alarmes pour sécuriser les bornes en magasin.
- **Création d’une base de données sécurisée** : Conception et sécurisation d'une base de données avec différents niveaux d'accès (administrateur, maintenance, etc.).
- **Système d'accès aux données par une interface Web** : Développement d'une interface web permettant un accès sécurisé aux données des jeux et des clients pour une "deuxième chance" au jeu.
- **Réalisation d'un dossier de maintenance et dépannage** : Création d’un guide complet pour la maintenance et le dépannage des bornes interactives.


### **👨‍💻 Elias** [https://github.com/Elias-AK]
- **Modélisation du système de stockage des informations** : Conception du système permettant le stockage des informations des utilisateurs et des performances des jeux.
- **Système d'accès aux données par une interface Web** : Création de l'interface web qui permet d’accéder aux données collectées par la borne interactive.
- **Création des jeux en ligne** : Développement des jeux interactifs accessibles via la borne et l'interface web (identification des utilisateurs).
- **Sécurisation de l'accès web** : Mise en place de mécanismes de sécurité pour protéger l'accès à l'interface web et aux données personnelles des utilisateurs.
- **Activation du jeu avec un levier** : Implémentation du système d’activation du jeu via un levier après l’identification du client.
- **Gestion de l'éclairage et/ou de la musique** : Configuration de l’éclairage et de la musique selon les résultats des jeux (gains ou pertes).
- **Gestion du confort thermique** : Surveillance et régulation du confort thermique et du taux d’humidité pour le bon fonctionnement des bornes.
- **Installation et configuration des accès réseaux** : Mise en place et gestion des connexions réseau pour les bornes.
- **Paramétrage du protocole de communication** : Configuration du protocole de communication entre les bornes, les modules, et les serveurs.
- **Connexion avec le serveur** : Développement de la connexion sécurisée avec le serveur de stockage des données.
- **Déploiement du serveur de stockage de données** : Installation du serveur de stockage, soit en local, soit sur le cloud, pour gérer les informations collectées.

### **👨‍💻 Yassin** [https://github.com/Yasskvhvc]
- **Création des jeux en ligne** : Développement des jeux interactifs disponibles sur la borne et sur l'interface web (identification des utilisateurs).
- **Modélisation du système de stockage des informations** : Conception du système de stockage pour les données des utilisateurs et des résultats des jeux.
- **Développement de l'application sans fil** : Création d'une application mobile ou site web responsive pour permettre aux utilisateurs d’accéder aux jeux interactifs via leurs appareils mobiles.
- **Formulaire pour la création d’un compte** : Développement d’un formulaire pour la création de comptes clients afin de personnaliser l’expérience des jeux.
- **Sécurisation de l'accès aux données** : Mise en place de mesures de sécurité pour protéger l'accès aux données clients et aux jeux.
- **Activation du jeu avec un code-barres** : Développement du système d’activation des jeux via un code-barres (par exemple, ticket de caisse).
- **Programmation du système embarqué** : Mise en place de l’interaction entre les modules et capteurs de la borne à l’aide d’un système embarqué.
- **Gestion de l'extinction de veille** : Implémentation de la fonctionnalité d’extinction automatique de la borne en cas de non-utilisation prolongée.
- **Rédaction d'un guide d'installation, d'utilisation et de dépannage** : Création d’un manuel détaillé pour l’installation, l’utilisation et la résolution des problèmes liés aux bornes interactives.
- **Création d'une base de données pour les nouveaux clients** : Mise en place d’une base de données pour enregistrer les nouveaux utilisateurs et leurs informations.
- **Assurance de la communication entre les modules** : Garantir une communication fluide entre les différents modules (jeux, lecteurs de badge, capteurs, etc.).
- **Sauvegarde des gains dans le dossier client** : Intégration d’un système de suivi des gains des utilisateurs, enregistrés dans la base de données client.

---

## 📜 Installation et configuration

### 1️⃣ **Cloner le dépôt**
```bash
git clone https://github.com/Jamski55/projet_borne_interactive.git
cd projet_borne_interactive

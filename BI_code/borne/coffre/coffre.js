/* 
Titre : js pour le coffre
But : Gestion du coffre
Implémentation : JS pour le coffre
*/

document.addEventListener("DOMContentLoaded", () => {
    const coffres = document.querySelectorAll(".coffre");
    const message = document.getElementById("message");
    const lotContainer = document.getElementById("lotContainer");

    // Liste des gains avec leurs images
    const gains = [
        { nom: "JACKPOT", image: "../../ressource/jackpot.png" },
        { nom: "Gain Moyen", image: "../../ressource/pen.png" },
        { nom: "Perdu", image: "../../ressource/red_cross.png" }
    ];

    // Mélange aléatoire des gains
    let rewards = [...gains].sort(() => Math.random() - 0.5);

    coffres.forEach((coffre, index) => {
        coffre.addEventListener("click", () => {
            // Désactiver les autres coffres
            coffres.forEach(c => c.style.pointerEvents = "none");

            // Faire disparaître les autres coffres
            coffres.forEach((c, i) => {
                if (i !== index) {
                    c.classList.add("disparaitre-selection");
                }
            });

            // Étape 1 : Déplacer le coffre au centre avec animation
            coffre.classList.add("au-centre");

            // Une fois le coffre au centre, effectuer le tremblement et l'ouverture
            setTimeout(() => {
                // Étape 2 : Faire trembler le coffre
                coffre.classList.add("tremble");

                setTimeout(() => {
                    // Étape 3 : Ouvrir le coffre (changer l'image)
                    const coffreImg = coffre.querySelector(".coffre-img");
                    coffreImg.src = "../../ressource/chest_open.png";  // Changer l'image du coffre

                    // Étape 4 : Afficher le lot après l'ouverture du coffre
                    setTimeout(() => {
                        const lot = document.createElement("img");
                        lot.src = rewards[index].image;
                        lot.classList.add("lot");
                        lotContainer.appendChild(lot);

                        setTimeout(() => {
                           lot.classList.add("afficher");

                            // Étape 5 : Faire disparaître le coffre
                            coffre.classList.add("disparaitre-selection");
                        }, 1000); // Attendre que le lot soit affiché
                    }, 1000); // Attendre que le coffre soit ouvert
                }, 500); // Attendre que le coffre ait fini de trembler
            }, 800); // Attendre que le coffre soit centré
        });
    });
});

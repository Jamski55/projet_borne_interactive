/* 
Titre : js pour le coffre
But : Gestion du coffre
Implémentation : JS pour le coffre
*/

document.addEventListener("DOMContentLoaded", () => {
    const coffres = document.querySelectorAll(".coffre");
    const lotContainer = document.getElementById("lotContainer");

    const gains = [
        { nom: "JACKPOT", image: "../../ressource/jackpot.png" },
        { nom: "Gain Moyen", image: "../../ressource/pen.png" },
        { nom: "Perdu", image: "../../ressource/red_cross.png" }
    ];

    let rewards = [...gains].sort(() => Math.random() - 0.5);

    coffres.forEach((coffre, index) => {
        coffre.addEventListener("click", () => {
            // Désactiver les clics sur tous les coffres
            coffres.forEach(c => c.style.pointerEvents = "none");

            // Faire disparaître les coffres non choisis
            coffres.forEach((c, i) => {
                if (i !== index) {
                    c.classList.add("disparaitre");
                }
            });

            // ---- Positionnement dynamique ----
            const rect = coffre.getBoundingClientRect();
            const currentLeft = rect.left;
            const currentTop = rect.top;
            const currentWidth = rect.width;
            const currentHeight = rect.height;

            // Définir en position fixed à sa position actuelle
            coffre.style.position = "fixed";
            coffre.style.left = `${currentLeft}px`;
            coffre.style.top = `${currentTop}px`;
            coffre.style.width = `${currentWidth}px`;
            coffre.style.height = `${currentHeight}px`;
            coffre.style.margin = "0"; // Important pour éviter les marges qui cassent tout
            coffre.style.transform = "none"; // Reset le transform initial
            coffre.style.transition = "all 0.8s ease";

            // Forcer un "reflow" pour appliquer le changement avant animation
            void coffre.offsetWidth;

            // Puis déplacer vers le centre
            coffre.style.left = `50%`;
            coffre.style.top = `50%`;
            coffre.style.transform = `translate(-50%, -50%)`;

            // Après l'animation au centre
            setTimeout(() => {
                coffre.classList.add("tremble");

                setTimeout(() => {
                    coffre.classList.remove("tremble");
                    coffre.classList.add("ouvert");

                    setTimeout(() => {
                        const lot = document.createElement("img");
                        lot.src = rewards[index].image;
                        lot.classList.add("lot");
                        lotContainer.appendChild(lot);

                        setTimeout(() => {
                            lot.classList.add("afficher");
                            coffre.style.opacity = 0;
                        }, 100);
                    }, 800);

                }, 500);

            }, 800);
        });
    });
});

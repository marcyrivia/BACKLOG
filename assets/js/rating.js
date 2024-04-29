
// RATING SYSTEM

// Sélection de tous les éléments HTML avec la classe "stars"
const stars = document.querySelectorAll(".stars");

// Variable globale pour stocker la valeur de la note
let ratingValue = 0;

// Pour chaque étoile, ajoute un gestionnaire d'événements de clic
stars.forEach((star, index) => {
    star.addEventListener("click", () => {
        // Récupère la valeur de l'étoile cliquée à partir de son attribut data-value
        ratingValue = Number(star.dataset.value);
        
        // Affiche l'index de l'étoile cliquée dans la console
        console.log(index + 1);

        // Met à jour visuellement les étoiles en fonction de l'étoile cliquée
        stars.forEach((star, i) => {
            // Si l'index de l'étoile est inférieur ou égal à l'index de l'étoile cliquée, ajoute la classe "hover"
            // Sinon, retire la classe "hover"
            i <= index ? star.classList.add("hover") : star.classList.remove("hover");
        });
    });
});








// function selectStars(e){
//     const data = e.target;
//     const siblings = sibling(data);
//     siblings.forEach( etoiles => {
//         etoiles.classList.add("hover")
//   })

// }

// function unselectStars(e){
//     const data = e.target;
//     data.classList.remove("hover")
// }

// function sibling(data){
//     let value = [data];
//     for (data = data.siblings){
//         if (data.nodeName === "I"){
//             value.push(data);
//         }
//     }
//     return value
// }


// RATING SYSTEM

// Sélection de tous les éléments HTML avec la classe "stars"
const stars = document.querySelectorAll(".stars");

// Variable globale pour stocker la valeur de la note
let Note_score = 0;

// Pour chaque étoile, ajoute un gestionnaire d'événements de clic
stars.forEach((star, index) => {
  star.addEventListener("click", () => {
    // Récupère la valeur de l'étoile cliquée à partir de son attribut data-value
    Note_score = Number(star.dataset.value);

    // Affiche l'index de l'étoile cliquée dans la console
    console.log(index + 1);
    fetch("../controllers/controller-rating.php?rating=" + (index+1));


    // Met à jour visuellement les étoiles en fonction de l'étoile cliquée
    stars.forEach((star, i) => {
      // Si l'index de l'étoile est inférieur ou égal à l'index de l'étoile cliquée, ajoute la classe "hover"
      // Sinon, retire la classe "hover"
      i <= index ? star.classList.add("hover") : star.classList.remove("hover");
    });
  });
});

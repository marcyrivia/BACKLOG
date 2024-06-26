// Système de notation
// const urlParams = new URLSearchParams(window.location.search);
const movie_Id = urlParams.get("id");
const rating = urlParams.get("rating");

// Sélection de tous les éléments HTML avec la classe "stars"
const stars = document.querySelectorAll(".stars");

// Variable globale pour stocker la valeur de la note
let Note_score = 0;

// Pour chaque étoile, ajoute un gestionnaire d'événements de clic
stars.forEach((star, index) => {
  star.addEventListener("click", () => {
    // Récupère la valeur de l'étoile cliquée à partir de son attribut data-value
    Note_score = Number(star.dataset.value);

    // Envoie la note au serveur via une requête fetch
    fetch("../controllers/controller-rating.php?movieId=" + movie_Id + "&rating=" + (index + 1) );

    // Met à jour visuellement les étoiles en fonction de l'étoile cliquée
    stars.forEach((star, i) => {
      // Si l'index de l'étoile est inférieur ou égal à l'index de l'étoile cliquée, ajoute la classe "hover"
      // Sinon, retire la classe "hover"
      i <= index ? star.classList.add("hover") : star.classList.remove("hover");
    });
  });
});

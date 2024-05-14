const options = {
    method: "GET",
    headers: {
      accept: "application/json",
      Authorization:
        "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc",
    },
  };


  let movie1 = document.querySelector("#movie1");
  let movie2 = document.querySelector("#movie2");
let movies3 = document.querySelector("#movie3");
let movies4 = document.querySelector("#movie4");


// Assurez-vous d'avoir récupéré l'ID du film correctement
const movieId = movie1.getAttribute("data-movie-id");

// Utilisation de l'ID du film pour obtenir les données du film depuis l'API
fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
  .then((res) => res.json())
  .then((data) => {
    // Création d'un élément image pour afficher l'affiche du film
    const movieImage = document.createElement("img");
    movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
    movieImage.alt = data.title;
    movieImage.classList.add("movie-poster");

    // Ajout de l'image à la div #movies1
    movie1.innerHTML = ""; // Vide d'abord le contenu existant de la div
    movie1.appendChild(movieImage);

    console.log("ok");
  })
  .catch((error) => {
    console.error("Erreur lors de la récupération des données :", error);
  });
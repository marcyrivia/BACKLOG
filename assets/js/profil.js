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
let movie3 = document.querySelector("#movie3");
let movie4 = document.querySelector("#movie4");


// Assurez-vous d'avoir récupéré l'ID du film correctement




// Utilisation de l'ID du film pour obtenir les données du film depuis l'API
const movieId = movie1.getAttribute("value");

// Utilisation de l'ID du film pour obtenir les données du film depuis l'API
fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
  .then((res) => res.json())
  .then((data) => {
    // Création d'un élément image pour afficher l'affiche du film
    const movieImage = document.createElement("img");
    movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
    movieImage.alt = data.title;
    movieImage.classList.add("movie-poster");

    // Ajout de l'image à la div #movie1
    movie1.innerHTML = ""; // Vide d'abord le contenu existant de la div
    movie1.appendChild(movieImage);

    movie1.addEventListener('click', () => {
        window.location.href = `../controllers/controller-OneMovie.php?id=${movieId}`;
    });
   
  })
  .catch((error) => {
    console.error("Erreur lors de la récupération des données :", error);
  });

  const movieId2 = movie2.getAttribute("value");

// Utilisation de l'ID du film pour obtenir les données du film depuis l'API
fetch(`https://api.themoviedb.org/3/movie/${movieId2}?language=fr-FR`, options)
  .then((res) => res.json())
  .then((data) => {
    // Création d'un élément image pour afficher l'affiche du film
    const movieImage = document.createElement("img");
    movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
    movieImage.alt = data.title;
    movieImage.classList.add("movie-poster");

    // Ajout de l'image à la div #movie1
    movie2.innerHTML = ""; // Vide d'abord le contenu existant de la div
    movie2.appendChild(movieImage);
    movie2.addEventListener('click', () => {
        window.location.href = `../controllers/controller-OneMovie.php?id=${movieId2}`;
    });
   
  })
  .catch((error) => {
    console.error("Erreur lors de la récupération des données :", error);
  });

  const movieId3 = movie3.getAttribute("value");

  // Utilisation de l'ID du film pour obtenir les données du film depuis l'API
  fetch(`https://api.themoviedb.org/3/movie/${movieId3}?language=fr-FR`, options)
    .then((res) => res.json())
    .then((data) => {
      // Création d'un élément image pour afficher l'affiche du film
      const movieImage = document.createElement("img");
      movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
      movieImage.alt = data.title;
      movieImage.classList.add("movie-poster");
  
      // Ajout de l'image à la div #movie1
      movie3.innerHTML = ""; // Vide d'abord le contenu existant de la div
      movie3.appendChild(movieImage);
      movie3.addEventListener('click', () => {
        window.location.href = `../controllers/controller-OneMovie.php?id=${movieId3}`;
    });
     
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données :", error);
    });

    const movieId4 = movie4.getAttribute("value");

    // Utilisation de l'ID du film pour obtenir les données du film depuis l'API
    fetch(`https://api.themoviedb.org/3/movie/${movieId4}?language=fr-FR`, options)
      .then((res) => res.json())
      .then((data) => {
        // Création d'un élément image pour afficher l'affiche du film
        const movieImage = document.createElement("img");
        movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
        movieImage.alt = data.title;
        movieImage.classList.add("movie-poster");
    
        // Ajout de l'image à la div #movie1
        movie4.innerHTML = ""; // Vide d'abord le contenu existant de la div
        movie4.appendChild(movieImage);

        movie4.addEventListener('click', () => {
            window.location.href = `../controllers/controller-OneMovie.php?id=${movieId4}`;
        });
       
      })

      .catch((error) => {
        console.error("Erreur lors de la récupération des données :", error);
      });
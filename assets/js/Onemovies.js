// Récupération des paramètres d'URL pour obtenir l'ID du film
const urlParams = new URLSearchParams(window.location.search);
const movieId = urlParams.get('id');

// Options pour la requête fetch, y compris les en-têtes d'autorisation
const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
    }
};

// Requête fetch pour obtenir les détails du film à partir de l'API TheMovieDB
fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
  .then(res => res.json())
  .then(data => {
    // Stocke les détails du film dans des variables
    const movieDetails = data;
    const moviePosterURL = `https://image.tmdb.org/t/p/original${movieDetails.poster_path}`;
    const movieTitle = movieDetails.title;
    const movieDuration = `${movieDetails.runtime} minutes`;
    const movieReleaseDate = movieDetails.release_date;
    const movieSynopsis = movieDetails.overview;
    const movieRated = movieDetails.vote_average;
    const movieRatedMultiplied = Math.floor(movieRated * 10);
    const movieRatedWithPercentage = movieRatedMultiplied + '%';

    // Crée et configure l'élément d'image du film
    const movieImage = document.createElement('img');
    movieImage.classList.add('movieImage');
    movieImage.src = moviePosterURL;
    movieImage.alt = movieTitle;

    // Ajoute l'image du film à l'élément HTML avec l'ID 'movie-image-container'
    document.getElementById('movie-image-container').appendChild(movieImage);

    // Met à jour les éléments HTML avec les informations du film
    document.title = movieTitle; // Met à jour le titre de la page
    document.getElementById('movie-title').textContent = movieTitle; // Met à jour le titre du film
    document.getElementById('rated-movie').textContent = movieRatedWithPercentage; // Met à jour la note du film
    document.getElementById('movie-duration').textContent = movieDuration; // Met à jour la durée du film
    document.getElementById('movie-release-date').textContent = movieReleaseDate; // Met à jour la date de sortie
    document.getElementById('movie-synopsis').textContent = movieSynopsis; // Met à jour le synopsis du film
  })
  .catch(error => {
    console.error('Erreur lors de la récupération des détails du film:', error);
  });

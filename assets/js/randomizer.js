// Options pour la requête API
const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
    }
};

// Sélection du bouton "Randomizer"
let randomBtn = document.querySelector('#randomBtn');

// Ajout d'un écouteur d'événements pour le clic sur le bouton
randomBtn.addEventListener("click", function () {
    let buttonContainer = document.querySelector(".button-container");
    let movieContainer = document.querySelector('.movie-container');

    // Affichage du conteneur de films et ajustement de la marge du conteneur de bouton
    movieContainer.style.display = "flex";
    buttonContainer.style.marginBottom = "10rem";
    
    // Nettoyage du contenu du conteneur de films
    movieContainer.innerHTML = '';
    
    // Requête à l'API pour obtenir les films les mieux notés
    fetch('https://api.themoviedb.org/3/movie/top_rated?language=fr-FR&page=2', options)
    .then(res => res.json())
    .then(data => {
        // Sélection d'un film aléatoire parmi les résultats
        const randomIndex = Math.floor(Math.random() * data.results.length);
        const randomMovie = data.results[randomIndex];
        
        // Création de l'élément carte pour afficher le film
        const card = document.createElement("div");
        card.classList.add("card");
        card.innerHTML = `
        <div class="imageContainer">
            <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${randomMovie.poster_path}" alt="${randomMovie.title}">
            <div class="overlayF">
                <p class="movieTitle">${randomMovie.title}</p>
            </div>
        </div>
        `;
        
        // Ajout d'un écouteur d'événements pour rediriger vers la page de détails du film lorsqu'on clique sur la carte
        card.addEventListener('click', () => {
            window.location.href = `../controllers/controller-OneMovie.php?id=${randomMovie.id}`;
        });
        
        // Ajout de la carte au conteneur de films
        movieContainer.appendChild(card);
    });
});

const options = {
  method: "GET",
  headers: {
    accept: "application/json",
    Authorization:
      "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc",
  },
};


let gamesDivs = document.querySelectorAll(".games");
// let close = document.querySelector('.close');

gamesDivs.forEach(function (gamesDiv) {
  gamesDiv.addEventListener("click", function () {
    // Lorsqu'un élément '.games' est cliqué, affichez la boîte de dialogue
    let click = document.querySelector(".click");
    click.style.display = "flex";
  });
});

// Attachez un écouteur d'événement 'click' à la fenêtre pour détecter les clics
window.addEventListener("click", function (event) {
  // Sélectionnez l'élément avec la classe '.close'
  let close = document.querySelector(".close");
  let click = document.querySelector(".click");
  // Vérifiez si l'élément cliqué est égal à l'élément '.close'
  if (event.target === close) {
    // Si c'est le cas, masquez la boîte de dialogue
    click.style.display = "none";
  }
});


let bouton = document.querySelector("#buttonSearch");
bouton.addEventListener("click", function () {
    const infos = document.querySelector("#infos");
    infos.innerHTML = "";
    const options = {
        method: 'GET',
        headers: {
            accept: 'application/json',
            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
        }
    };
 let movieSearch = document.querySelector("#searchBar").value;
fetch(`https://api.themoviedb.org/3/search/movie?query=${movieSearch}&include_adult=false&language=fr-FR&page=1`, options)
    .then(res => res.json())
    .then(data => {
        for (const movie of data['results']) {
            const card = document.createElement('div');
            card.classList.add('card');

            // Ajouter l'attribut personnalisé 'data-movie-id' à chaque carte pour stocker l'ID du film
            card.setAttribute('data-movie-id', movie.id);
            
            card.innerHTML = `
                <div class="imageContainer">
                    <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
                    <div class="overlayF">
                        <p class="movieTitle">${movie.title}</p>
                    </div>
                </div>
            `;

            // Ajouter un écouteur d'événement de clic à chaque carte pour afficher les détails du film correspondant
            card.addEventListener('click', () => {
                // Récupérer l'ID du film à partir de l'attribut personnalisé de la carte
                const movieId = card.getAttribute('data-movie-id');
                // Effectuer une requête pour obtenir les détails du film en utilisant cet ID
                fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
                    .then(res => res.json())
                    .then(data => {
                        // Créer une image pour le film
                        let gamesDivs = document.querySelectorAll(".games");
                        const movieImage = document.createElement('img');
                        movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
                        movieImage.alt = data.title;
                        gamesDivs.forEach(gamesDiv => {
                            // Ajouter l'image du film à chaque div games
                            gamesDiv.innerHTML = "";
                            gamesDiv.appendChild(movieImage);
                        });
                        console.log(movieId);
                    })
                    .catch(error => {
                        console.error('Erreur lors de la récupération des données :', error);
                    });
            });

            // Ajouter la carte au conteneur des résultats
            infos.appendChild(card);
        }
    })
    .catch(error => {
        console.error('Erreur lors de la récupération des données de recherche de films :', error);
    });

});

// Définition des options pour la requête fetch, notamment la méthode GET et les en-têtes d'autorisation.
const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
    }
};

// Sélection du bouton "latestBtn" et ajout d'un écouteur d'événements pour le clic.
let latestBtn = document.querySelector("#latestBtn");
document.addEventListener("DOMContentLoaded", function() {
    // Sélection du bouton "latestBtn" et déclenchement d'un clic sur celui-ci.
    let latestBtn = document.querySelector("#latestBtn");
    latestBtn.click(); // Simuler un clic sur le bouton "latestBtn"
});
latestBtn.addEventListener("click", function () {
    // Ajout de la classe "active" au bouton "latestBtn" et suppression de la classe "active" du bouton "topRatedBtn".
    latestBtn.classList.add("active");
    latestBtn.classList.add("On");
    latestBtn.classList.remove("latestBtn");


    topRatedBtn.classList.remove("active");
    topRatedBtn.classList.remove("On");
    topRatedBtn.classList.add("topRatedBtn");
    // Sélection des éléments HTML pour afficher les résultats et nettoyer leur contenu.
    let sorties = document.querySelector("#latest");
    sorties.innerHTML = ""
    let affichage = document.querySelector("#topRated");
    affichage.innerHTML = ""
    const infos = document.querySelector("#infos");
    infos.innerHTML = "";

    // Requête fetch pour obtenir les films actuellement diffusés.
    // Requête fetch pour obtenir les films actuellement diffusés.
fetch('https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1', options)
.then(res => res.json())
.then(data => {
    // Boucle à travers les résultats pour créer des cartes d'images pour chaque film.
    for (let i = 0; i < data.results.length; i++) {
        const latest = data.results[i];
        const card = document.createElement("div");
        card.classList.add("card");
        // Création de la balise img avec le chemin de l'affiche du film.
        card.innerHTML = `
        <div class="imageContainer">
            <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${latest.poster_path}" alt="${latest.title}">
            <div class="overlayF">
                <p class="movieTitle">${latest.title}</p>
            </div>
        </div>
        `
        // Ajout d'un écouteur d'événements pour rediriger vers la page du film lorsque la carte est cliquée.
        card.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'get';
            form.action = '../controllers/controller-OneMovie.php';
            const inputId = document.createElement('input');
            const inputMovieName = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = 'movie_id';
            inputId.value = latest.id;
            console.log(inputId.value);

            inputMovieName.type = 'hidden';
            inputMovieName.name = 'movie_name';
            inputMovieName.value = latest.title;
            console.log(inputMovieName.value);


            form.appendChild(inputId);
            form.appendChild(inputMovieName);

            document.body.appendChild(form);
            form.submit();
            window.location.href = `../controllers/controller-OneMovie.php?id=${latest.id}`;
        });
        sorties.appendChild(card); // Ajout de la carte à l'élément HTML approprié.
    }
});

})

// Sélection du bouton "topRatedBtn" et ajout d'un écouteur d'événements pour le clic.
let topRatedBtn = document.querySelector("#topRatedBtn")
topRatedBtn.addEventListener("click", function () {
    // Ajout de la classe "active" au bouton "topRatedBtn" et suppression de la classe "active" du bouton "latestBtn".
    topRatedBtn.classList.add("active");
    topRatedBtn.classList.add("On");
    topRatedBtn.classList.remove("topRatedBtn");


    latestBtn.classList.add("latestBtn");
    latestBtn.classList.remove("active");
    latestBtn.classList.remove("On");
    // Sélection des éléments HTML pour afficher les résultats et nettoyer leur contenu.
    let sorties = document.querySelector("#latest");
    sorties.innerHTML = ""
    let affichage = document.querySelector("#topRated");
    affichage.innerHTML = ""
    const infos = document.querySelector("#infos");
    infos.innerHTML = "";

    // Requête fetch pour obtenir les films les mieux notés.
    fetch('https://api.themoviedb.org/3/movie/top_rated?language=fr-FR', options)
    .then(res => res.json())
    .then(data => {
        console.log(data)
        // Boucle à travers les résultats pour créer des cartes d'images pour chaque film.
        for (let i = 0;  i < data.results.length; i++) {
            const popularity = data.results[i];
            const card = document.createElement("div");
            card.classList.add("card")
            // Création de la balise img avec le chemin de l'affiche du film.
            card.innerHTML = `
        <div class="imageContainer">
            <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${popularity.poster_path}" alt="${popularity.title}">
            <div class="overlayF">
            <p class="movieTitle">${popularity.title}</p> 
            <br>
        </div>
    </div>
            `
            card.addEventListener('click', () => {
                window.location.href = `../controllers/controller-OneMovie.php?id=${popularity.id}`;
            });
            affichage.appendChild(card); // Ajout de la carte à l'élément HTML approprié.
        }
    })
})


let buttonSearch = document.querySelector("#buttonSearch");
buttonSearch.addEventListener("click", function () {
    let sorties = document.querySelector("#latest");
    sorties.innerHTML = ""
    let affichage = document.querySelector("#topRated");
    affichage.innerHTML = ""
    const infos = document.querySelector("#infos");
    const form = document.querySelector("form");
    infos.innerHTML = "";
    const options = {
        method: 'GET',
        headers: {
            accept: 'application/json',
            Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
        }
    };
    let movieSearch = document.querySelector("#searchBar").value
    console.log(movieSearch);
    fetch(`https://api.themoviedb.org/3/search/movie?query=${movieSearch}&include_adult=false&language=fr-FR&page=1`, options)
    .then(res => res.json())
    .then(data => {
       
        
        for (const movie of data['results']) {
            const card = document.createElement('div');
            card.classList.add('card');
            
            card.innerHTML = `
            <div class="imageContainer">
            <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
            <div class="overlayF">
            <p class="movieTitle">${movie.title}</p> 
            <br>
        </div>
    </div>
            `;

            card.addEventListener('click', () => {
                window.location.href = `../controllers/controller-OneMovie.php?id=${movie.id}`;
            });
            
            infos.appendChild(card);
        }
    });
    
    
});
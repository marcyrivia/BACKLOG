const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
    }
};

fetch('https://api.themoviedb.org/3/movie/upcoming?language=fr-FR&page=1', options)
.then(res => res.json())
.then(data => {
    console.log(data.results);
    // Sélection de l'élément HTML où vous souhaitez afficher les cartes

    // Boucle à travers les résultats pour créer des cartes d'images pour chaque film
    for (let i = 0; i < data.results.length; i++) {
        const upcoming = data.results[i];
        const card = document.createElement("div");
        card.classList.add("card");
        // Création de la balise img avec le chemin de l'affiche du film.
        card.innerHTML = `
            <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${upcoming.poster_path}" alt="${upcoming.title}">
            <div class="overlayF">
                <p class="movieTitle">${upcoming.title}</p>
            </div>
        </div>
        `;
        // Ajout d'un écouteur d'événements pour rediriger vers la page du film lorsque la carte est cliquée.
        card.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'get';
            form.action = '../controllers/controller-OneMovie.php';
            const inputId = document.createElement('input');
            const inputMovieName = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = 'movie_id';
            inputId.value = upcoming.id;
            console.log(inputId.value);

            inputMovieName.type = 'hidden';
            inputMovieName.name = 'movie_name';
            inputMovieName.value = upcoming.title;
            console.log(inputMovieName.value);


            form.appendChild(inputId);
            form.appendChild(inputMovieName);

            document.body.appendChild(form);
            form.submit();
            window.location.href = `../controllers/controller-OneMovie.php?id=${upcoming.id}`;
        });
        // Ajout de la carte à l'élément HTML approprié.
        infos.appendChild(card);
    }
})
.catch(error => {
    console.error('Error fetching data:', error);
 });

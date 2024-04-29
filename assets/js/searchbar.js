// document.addEventListener("DOMContentLoaded", function() {
//     // Récupérer le paramètre de recherche de l'URL
//     const urlParams = new URLSearchParams(window.location.search);
//     const query = urlParams.get('query');

//     // Vérifier si le paramètre de recherche est présent dans l'URL
//     if (query) {
//         // Effectuer une requête pour obtenir les résultats de la recherche
//         fetch(`https://api.themoviedb.org/3/search/movie?query=${query}&include_adult=false&language=fr-FR&page=1`)
//         .then(res => res.json())
//         .then(data => {
//             // Afficher les résultats de la recherche
//             const infos = document.getElementById("infos");
//             for (const movie of data['results']) {
//                 const card = document.createElement('div');
//                 card.classList.add('card');
                
//                 card.innerHTML = `
//                 <img class="imgMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
//                 <h2>${movie.title}</h2>
//                 <p><i>${movie.release_date}</i></p>
//                 `;

//                 card.addEventListener('click', () => {
//                     // Rediriger l'utilisateur vers la page détaillée du film lorsqu'il clique sur la carte
//                     window.location.href = `../controller/controller-oneMovie.php?id=${movie.id}`;
//                 });
                
//                 // Ajouter la carte au conteneur des informations
//                 infos.appendChild(card);
//             }
//         })
//         .catch(error => {
//             console.error('Error fetching data:', error);
//         });
//     }
// });

let bouton = document.querySelector("#boutonSearch");
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
                    </div>
                </div>
            `;

            card.addEventListener('click', () => {
                window.location.href = `../assets/controllers/controller-oneMovie.php?id=${movie.id}`;
            });
            
            infos.appendChild(card);
        }
    });
});

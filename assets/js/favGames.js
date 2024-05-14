const options = {
  method: "GET",
  headers: {
    accept: "application/json",
    Authorization:
      "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc",
  },
};

let movie1 = document.querySelector("#movies1");
let movies3 = document.querySelector("#movies3");
let movies4 = document.querySelector("#movies4");

movie1.addEventListener("click", function () {
  let click1 = document.querySelector(".click1");
  click1.style.display = "flex";
});

window.addEventListener("click", function (event) {
  let close = document.querySelector(".close");
  let click1 = document.querySelector(".click1");
  if (event.target === close) {
    click1.style.display = "none";
  }
});

let button1 = document.querySelector("#buttonSearch");
button1.addEventListener("click", function () {
  const infos = document.querySelector("#infos");
  infos.innerHTML = "";
  let movieSearch = document.querySelector("#searchBar").value;
  fetch(
    `https://api.themoviedb.org/3/search/movie?query=${movieSearch}&include_adult=false&language=fr-FR&page=1`,
    options
  )
    .then((res) => res.json())
    .then((data) => {
      for (const movie of data.results) {
        const card = document.createElement("div");
        card.classList.add("card");
        card.setAttribute("data-movie-id", movie.id);
        card.innerHTML = `
          <div class="imageContainer">
              <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
              <div class="overlayF">
                  <p class="movieTitle">${movie.title}</p>
              </div>
          </div>
        `;
        card.addEventListener("click", () => {
          const movieId = card.getAttribute("data-movie-id");
          fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
            .then((res) => res.json())
            .then((data) => {
              const input1 = document.querySelector("#input1");
              const movie1 = document.querySelector("#movies1");
              const movieImage = document.createElement("img");
              movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
              movieImage.alt = data.title;
              movieImage.classList.add("movie-poster");
              movie1.innerHTML = "";
              movie1.appendChild(movieImage);
              input1.value = movieId; // Insérer l'ID du film dans la valeur de l'input
              console.log(input1.value);
              
            })
            .catch((error) => {
              console.error("Erreur lors de la récupération des données :", error);
            });
        });
        infos.appendChild(card);
      }
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données de recherche de films :", error);
    });
});



let movie2 = document.querySelector("#movies2");


movie2.addEventListener("click", function () {
  let click2 = document.querySelector(".click2");
  let plusI2 = document.querySelector("#plus2");
  click2.style.display = "flex";
  plusI2.style.display="none";
});

window.addEventListener("click", function (event) {
  let close2 = document.querySelector("#close2");
  let click2 = document.querySelector(".click2");
  if (event.target === close2) {
    click2.style.display = "none";
    plusI2.style.display= "flex";
  }
});

let button2 = document.querySelector("#buttonSearch2");
button2.addEventListener("click", function () {
  const infos2 = document.querySelector("#infos2");
  infos2.innerHTML = "";
  let movieSearch2 = document.querySelector("#searchBar2").value;
  fetch(
    `https://api.themoviedb.org/3/search/movie?query=${movieSearch2}&include_adult=false&language=fr-FR&page=1`,
    options
  )
    .then((res) => res.json())
    .then((data) => {
      for (const movie of data.results) {
        const card = document.createElement("div");
        card.classList.add("card");
        card.setAttribute("data-movie-id", movie.id);
        card.innerHTML = `
          <div class="imageContainer">
              <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
              <div class="overlayF">
                  <p class="movieTitle">${movie.title}</p>
              </div>
          </div>
        `;
        // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        card.addEventListener("click", () => {
          const movieId = card.getAttribute("data-movie-id");
          fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
            .then((res) => res.json())
            .then((data) => {
              const input2 = document.querySelector("#input2")
              const movie2 = document.querySelector("#movies2");
              const movieImage = document.createElement("img");
              movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
              movieImage.alt = data.title;
              movieImage.classList.add("movie-poster");
              movie2.innerHTML = "";
              movie2.appendChild(movieImage);
              input2.value = movieId; // Insérer l'ID du film dans la valeur de l'input
              console.log(input2.value);
            })
            .catch((error) => {
              console.error("Erreur lors de la récupération des données :", error);
            });
        }); // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        infos2.appendChild(card);
      }
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données de recherche de films :", error);
    });
}); // Fermez la fonction de gestionnaire d'événements pour le clic sur le bouton






let movie3 = document.querySelector("#movies3");


movie3.addEventListener("click", function () {
  let click3 = document.querySelector(".click3");
  let plusI3 = document.querySelector("#plus3");
  click3.style.display = "flex";
  plusI3.style.display="none";
});

window.addEventListener("click", function (event) {
  let close3 = document.querySelector("#close3");
  let click3 = document.querySelector(".click3");
  if (event.target === close3) {
    click3.style.display = "none";
    plusI3.style.display= "flex";
  }
});

let button3 = document.querySelector("#buttonSearch3");
button3.addEventListener("click", function () {
  const infos3 = document.querySelector("#infos3");
  infos3.innerHTML = "";
  let movieSearch3 = document.querySelector("#searchBar3").value;
  fetch(
    `https://api.themoviedb.org/3/search/movie?query=${movieSearch3}&include_adult=false&language=fr-FR&page=1`,
    options
  )
    .then((res) => res.json())
    .then((data) => {
      for (const movie of data.results) {
        const card = document.createElement("div");
        card.classList.add("card");
        card.setAttribute("data-movie-id", movie.id);
        card.innerHTML = `
          <div class="imageContainer">
              <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
              <div class="overlayF">
                  <p class="movieTitle">${movie.title}</p>
              </div>
          </div>
        `;
        // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        card.addEventListener("click", () => {
          const movieId = card.getAttribute("data-movie-id");
          fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
            .then((res) => res.json())
            .then((data) => {
              const input3 = document.querySelector("#input3");
              const movie3 = document.querySelector("#movies3");
              const movieImage = document.createElement("img");
              movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
              movieImage.alt = data.title;
              movieImage.classList.add("movie-poster");
              movie3.innerHTML = "";
              movie3.appendChild(movieImage);
              input3.value = movieId; // Insérer l'ID du film dans la valeur de l'input
              console.log(input3.value);

            })
            .catch((error) => {
              console.error("Erreur lors de la récupération des données :", error);
            });
        }); // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        infos3.appendChild(card);
      }
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données de recherche de films :", error);
    });
}); // Fermez la fonction de gestionnaire d'événements pour le clic sur le bouton




let movie4 = document.querySelector("#movies4");


movie4.addEventListener("click", function () {
  let click4 = document.querySelector(".click4");
  let plusI4 = document.querySelector("#plus4");
  click4.style.display = "flex";
  plusI4.style.display="none";
});

window.addEventListener("click", function (event) {
  let close4 = document.querySelector("#close4");
  let click4 = document.querySelector(".click4");
  if (event.target === close4) {
    click4.style.display = "none";
    plusI4.style.display= "flex";
  }
});

let button4 = document.querySelector("#buttonSearch4");
button4.addEventListener("click", function () {
  const infos4 = document.querySelector("#infos4");
  infos4.innerHTML = "";
  let movieSearch4 = document.querySelector("#searchBar4").value;
  fetch(
    `https://api.themoviedb.org/3/search/movie?query=${movieSearch4}&include_adult=false&language=fr-FR&page=1`,
    options
  )
    .then((res) => res.json())
    .then((data) => {
      for (const movie of data.results) {
        const card = document.createElement("div");
        card.classList.add("card");
        card.setAttribute("data-movie-id", movie.id);
        card.innerHTML = `
          <div class="imageContainer">
              <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
              <div class="overlayF">
                  <p class="movieTitle">${movie.title}</p>
              </div>
          </div>
        `;
        // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        card.addEventListener("click", () => {
          const movieId = card.getAttribute("data-movie-id");
          fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
            .then((res) => res.json())
            .then((data) => {
              const input4 = document.querySelector("#input4");
              const movie4 = document.querySelector("#movies4");
              const movieImage = document.createElement("img");
              movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
              movieImage.alt = data.title;
              movieImage.classList.add("movie-poster");
              movieImage.setAttribute("data-name", "movie4");
              movie4.innerHTML = "";
              movie4.appendChild(movieImage);
              input4.value = movieId; // Insérer l'ID du film dans la valeur de l'input
              console.log(input4.value);

            })
            .catch((error) => {
              console.error("Erreur lors de la récupération des données :", error);
            });
        }); // Fermez la fonction de gestionnaire d'événements pour le clic sur la carte
        infos4.appendChild(card);
      }
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données de recherche de films :", error);
    });
}); // Fermez la fonction de gestionnaire d'événements pour le clic sur le bouton





// let gamesDivs = document.querySelectorAll(".games");
// // let close = document.querySelector('.close');

// gamesDivs.forEach(function (gamesDiv) {
//   gamesDiv.addEventListener("click", function () {
//     // Lorsqu'un élément '.games' est cliqué, affichez la boîte de dialogue
//     let click = document.querySelector(".click");
//     click.style.display = "flex";
//   });
// });

// // Attachez un écouteur d'événement 'click' à la fenêtre pour détecter les clics
// window.addEventListener("click", function (event) {
//   // Sélectionnez l'élément avec la classe '.close'
//   let close = document.querySelector(".close");
//   let click = document.querySelector(".click");
//   // Vérifiez si l'élément cliqué est égal à l'élément '.close'
//   if (event.target === close) {
//     // Si c'est le cas, masquez la boîte de dialogue
//     click.style.display = "none";
//   }
// });


// let bouton = document.querySelector("#buttonSearch");
// bouton.addEventListener("click", function () {
//     const infos = document.querySelector("#infos");
//     infos.innerHTML = "";
//     const options = {
//         method: 'GET',
//         headers: {
//             accept: 'application/json',
//             Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
//         }
//     };
//  let movieSearch = document.querySelector("#searchBar").value;
// fetch(`https://api.themoviedb.org/3/search/movie?query=${movieSearch}&include_adult=false&language=fr-FR&page=1`, options)
//     .then(res => res.json())
//     .then(data => {
//         for (const movie of data['results']) {
//             const card = document.createElement('div');
//             card.classList.add('card');

//             // Ajouter l'attribut personnalisé 'data-movie-id' à chaque carte pour stocker l'ID du film
//             card.setAttribute('data-movie-id', movie.id);
            
//             card.innerHTML = `
//                 <div class="imageContainer">
//                     <img class="imageMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
//                     <div class="overlayF">
//                         <p class="movieTitle">${movie.title}</p>
//                     </div>
//                 </div>
//             `;

//             // Ajouter un écouteur d'événement de clic à chaque carte pour afficher les détails du film correspondant
//             card.addEventListener('click', () => {
//                 // Récupérer l'ID du film à partir de l'attribut personnalisé de la carte
//                 const movieId = card.getAttribute('data-movie-id');
//                 // Effectuer une requête pour obtenir les détails du film en utilisant cet ID
//                 fetch(`https://api.themoviedb.org/3/movie/${movieId}?language=fr-FR`, options)
//                     .then(res => res.json())
//                     .then(data => {
//                         // Créer une image pour le film
//                         let gamesDivs = document.querySelectorAll(".games");
//                         const movieImage = document.createElement('img');
//                         movieImage.src = `https://image.tmdb.org/t/p/original/${data.poster_path}`;
//                         movieImage.alt = data.title;
//                         gamesDivs.forEach(gamesDiv => {
//                             // Ajouter l'image du film à chaque div games
//                             gamesDiv.innerHTML = "";
//                             gamesDiv.appendChild(movieImage);
//                         });
//                         console.log(movieId);
//                     })
//                     .catch(error => {
//                         console.error('Erreur lors de la récupération des données :', error);
//                     });
//             });

//             // Ajouter la carte au conteneur des résultats
//             infos.appendChild(card);
//         }
//     })
//     .catch(error => {
//         console.error('Erreur lors de la récupération des données de recherche de films :', error);
//     });

// });

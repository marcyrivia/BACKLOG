const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const headerMenu = document.getElementById("header");

// Open Close Navbar Menu on Click Burger
if (burgerMenu && navbarMenu) {
   burgerMenu.addEventListener("click", () => {
      burgerMenu.classList.toggle("is-active");
      navbarMenu.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Click Menu Links
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      burgerMenu.classList.remove("is-active");
      navbarMenu.classList.remove("is-active");
   });
});

// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
   if (this.scrollY >= 85) {
      headerMenu.classList.add("on-scroll");
   } else {
      headerMenu.classList.remove("on-scroll");
   }
});

// Fixed Navbar Menu on Window Resize
window.addEventListener("resize", () => {
   if (window.innerWidth > 768) {
      if (navbarMenu.classList.contains("is-active")) {
         navbarMenu.classList.remove("is-active");
      }
   }

   
});


// let bouton = document.querySelector("#bouton");
// bouton.addEventListener("click", function () {
//     let sorties = document.querySelector("#latest");
//     sorties.innerHTML = ""
//     let affichage = document.querySelector("#topRated");
//     affichage.innerHTML = ""
//     const infos = document.querySelector("#infos");
//     infos.innerHTML = "";
//     const options = {
//         method: 'GET',
//         headers: {
//             accept: 'application/json',
//             Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
//         }
//     };

//     let movieSearch = document.querySelector("#searchBar").value
//     console.log(movieSearch);
//     fetch(`https://api.themoviedb.org/3/search/movie?query=${movieSearch}&include_adult=false&language=fr-FR&page=1`, options)
//     .then(res => res.json())
//     .then(data => {

//         for (const movie of data['results']) {
//             const card = document.createElement('div');
//             card.classList.add('card');
            
//             card.innerHTML = `
//             <img class="imgMovie" src="https://image.tmdb.org/t/p/original/${movie.poster_path}" alt="${movie.title}">
//             <h2>${movie.title}</h2>
//                 <p><i>${movie.release_date}</i></p>
//             `;

//             card.addEventListener('click', () => {
//                 window.location.href = `movies.html?id=${movie.id}`;
//             });
            
//             infos.appendChild(card);
//         }
//     });
    
    
// });

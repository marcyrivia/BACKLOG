
const options = {
    method: 'GET',
    headers: {
        accept: 'application/json',
        Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkOGEyZTA0MTVmODZkZGQ4MDI2NGViNDM3YzA0NDU5MyIsInN1YiI6IjY1NDBhZDdiNDU1N2EwMDBjNmI0NzYxMCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.lSe8XF_F4iGTunYZS6mtnr3oyIk5brpibSgT2g2tIWc'
    }
};

let randomBtn = document.querySelector('#ramdomBtn');

randomBtn.addEventListener("click", function (){
    let buttonContainer = document.querySelector(".button-container");
    let movieContainer = document.querySelector('.movie-container');
    movieContainer.style.display = "flex";
    buttonContainer.style.marginBottom = "10rem";
    
    // Nettoyer le contenu de movieContainer
    movieContainer.innerHTML = '';
    
    fetch('https://api.themoviedb.org/3/movie/top_rated?language=fr-FR&page=2', options)
    .then(res => res.json())
    .then(data => {
        const randomIndex = Math.floor(Math.random() * data.results.length);
        const randomMovie = data.results[randomIndex];
        
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
        
        card.addEventListener('click', () => {
            const form = document.createElement('form');
            form.method = 'get';
            form.action = '../controllers/controller-OneMovie.php';
            const inputId = document.createElement('input');
            const inputMovieName = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = 'movie_id';
            inputId.value = randomMovie.id;
            console.log(inputId.value);

            inputMovieName.type = 'hidden';
            inputMovieName.name = 'movie_name';
            inputMovieName.value = randomMovie.title;
            console.log(inputMovieName.value);


            form.appendChild(inputId);
            form.appendChild(inputMovieName);

            document.body.appendChild(form);
            form.submit();
            window.location.href = `../controllers/controller-OneMovie.php?id=${randomMovie.id}`;
        });
        
        movieContainer.appendChild(card);
    });
});

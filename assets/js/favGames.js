let gamesDivs = document.querySelectorAll('.games');
let searchBar = document.querySelectorAll('.SearchBar');
// let close = document.querySelector('.close');

gamesDivs.forEach(function(gamesDiv) {
    gamesDiv.addEventListener("click", function (){
        // Lorsqu'un élément '.games' est cliqué, affichez la boîte de dialogue
        let click = document.querySelector('.click');
        click.style.display = "flex";
    });
});

// Attachez un écouteur d'événement 'click' à la fenêtre pour détecter les clics
window.addEventListener("click", function(event) {
    // Sélectionnez l'élément avec la classe '.close'
    let close = document.querySelector('.close');
    let click = document.querySelector('.click');
    // Vérifiez si l'élément cliqué est égal à l'élément '.close'
    if (event.target === close) {
        // Si c'est le cas, masquez la boîte de dialogue
        click.style.display = "none";
    }
});
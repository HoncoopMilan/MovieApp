// Functie om films weer te geven op basis van de gegeven JSON-data
function displayMovies(movies) {
    const movieContainer = document.getElementById('movie-container');
    movieContainer.innerHTML = ''; // Wis de inhoud van het filmcontainerelement

    movies.forEach(movie => {
        const movieElement = document.createElement('div');
        movieElement.classList.add('movie');

        const titleElement = document.createElement('h2');
        titleElement.textContent = movie.Title;

        const posterElement = document.createElement('img');
        posterElement.src = movie.Poster;
        posterElement.alt = `${movie.Title} Poster`;

        

        movieElement.appendChild(titleElement);
        movieElement.appendChild(posterElement); // Voeg de poster toe aan het filmelement

        movieContainer.appendChild(movieElement);
    });
}

// Functie om films op te halen van de API en deze weer te geven
function fetchMovies() {
    const apiUrl = 'https://api.movieposterdb.com/v1/random/movies';
    const token = 'Bearer 199|sUyTo8tFfJ5WUN4cyFHJTV7XCfkDgV2aJZJ0UlhE'; // Vervang 'YOUR_TOKEN_HERE' door je eigen API-token

    fetch(apiUrl, {
        headers: {
            'Authorization': token
        }
    })
    .then(response => response.json())
    .then(data => {
        // Controleer of er films zijn ontvangen
        if (data && Array.isArray(data)) {
            // Roep de functie aan om films weer te geven met de ontvangen gegevens
            displayMovies(data);
        } else {
            console.error('Geen films gevonden.');
        }
    })
    .catch(error => {
        console.error('Er is een fout opgetreden bij het ophalen van films:', error);
    });
}

// Roep de functie aan om films op te halen en weer te geven
fetchMovies();
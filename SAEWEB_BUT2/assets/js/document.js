// Sélectionner l'élément input de la barre de recherche
const searchInput = document.querySelector('.barreRecherche');

// Ajouter un événement pour détecter l'appui sur la touche "Entrée"
searchInput.addEventListener('keypress', function(event) {
    // Vérifier si l'utilisateur appuie sur "Entrée"
    if (event.key === 'Enter') {
        event.preventDefault(); // Empêcher le comportement par défaut

        // Récupérer la valeur saisie dans la barre de recherche
        const query = searchInput.value;

        // Vérifier que la recherche n'est pas vide
        if (query.trim() !== '') {
            // Encoder la recherche pour qu'elle soit utilisable dans une URL
            const encodedQuery = encodeURIComponent(query);

            // Construire l'URL de redirection
            const url = `https://soshepatites.org/?x=0&y=0&s=${encodedQuery}`;

            // Rediriger l'utilisateur vers l'URL
            window.location.href = url;
        }
    }
});

const searchInput = document.querySelector('.barreRecherche')

searchInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        const query = searchInput.value

        if (query.trim() !== '') {
            const encodedQuery = encodeURIComponent(query)
            window.location.href = `https://soshepatites.org/?x=0&y=0&s=${encodedQuery}`
        }
    }
})

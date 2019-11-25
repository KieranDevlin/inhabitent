//Animates the search text area on click

const searchIcon = document.getElementById('search');
const searchInput = document.getElementById('search-input');
const searchContainer = document.getElementById('search-text-container');

searchIcon.addEventListener('click', () => {
  searchContainer.classList.toggle('animate-container');
  searchInput.classList.toggle('animate-search');
});

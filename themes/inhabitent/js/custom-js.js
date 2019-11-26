//Animates the search text area on click

const searchIcon = document.querySelector('.search-button');
const searchInput = document.querySelector('.search-field');
const searchContainer = document.querySelector('.search-text-container');

searchIcon.addEventListener('click', () => {
  searchContainer.classList.toggle('animate-container');
  searchInput.classList.toggle('animate-search');
  searchInput.focus();
});

searchInput.addEventListener('blur', () => {
  searchContainer.classList.remove('animate-container');
  searchInput.classList.remove('animate-search');
});

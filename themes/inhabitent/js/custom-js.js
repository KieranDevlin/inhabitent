//Animates the search text area on click

const searchIcon = document.querySelector('.search-button');
const searchInput = document.querySelector('.search-field');
const searchContainer = document.querySelector('.search-text-container');

searchIcon.addEventListener('click', () => {
  if (searchContainer.classList.contains('animate-container')) {
    return;
  } else {
    searchContainer.classList.toggle('animate-container');
    searchInput.focus();
  }
});

searchInput.addEventListener('blur', () => {
  searchContainer.classList.remove('animate-container');
});

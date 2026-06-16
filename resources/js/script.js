const cardContainer = document.getElementById('cardContainer');

// Simulated data
const data = ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5', 'Data 6'];

// Limit the number of cards to display
const maxCardsToShow = Math.min(data.length, 4);
for (let i = 0; i < maxCardsToShow; i++) {
  const card = createCard(data[i]);
  cardContainer.appendChild(card);
}

function createCard(content) {
  const card = document.createElement('div');
  card.classList.add('card');
  card.textContent = content;
  return card;
}

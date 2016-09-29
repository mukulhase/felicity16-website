var $sort = document.getElementById('test-button');
$sort.textContent = 'TEST'

var deck = Deck();
$sort.addEventListener('click', function() {
  deck.fan();
  deck.poker();
});

$container = document.getElementById('card-container');
deck.mount($container);

deck.intro();
deck.poker();

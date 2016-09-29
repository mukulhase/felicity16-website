/* global Deck */

var prefix = Deck.prefix

var transform = prefix('transform')

var translate = Deck.translate

var $container = document.getElementById('cards-container')
var deck = Deck()

var no_of_menu_buttons = 6

deck.mount($container)

deck.intro()
deck.sort()
deck.poker()

deck.cards.forEach(function (card, i) {
  //card.enableDragging()
  //card.enableFlipping()

  card.$el.addEventListener('mousedown', onTouch)
  //card.$el.addEventListener('touchstart', onTouch)

  function onTouch () {
    var card;
    if (i<no_of_menu_buttons) {
      deck.shuffle()
      deck.flip()
      deck.flip()
      deck.sort()
      // Change css

      no_of_menu_buttons = Math.floor(Math.random()*8+1);

      switch(i)
      {
      }
      // TODO, add Ajax for each button click
      deck.poker()
    }
  }
})

 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>

#coursebox{
}
.boxx {
  width:50%;
  margin:2%;
  float:right;
  padding: 15px
}

/* Cards */
.cards-column {
  width: 20%;
  height: 20%;
  float:left;
  padding: 2%;
  box-sizing: border-box;
}
.column-1 {
  padding-top: 60px;

}

.cards {
  width: 100%;
  max-width: 340px;
  float:left;
  height:120;
  position: relative;
  background: #EB5160;
  color: #fff;
  cursor: pointer;
  padding:2%;
  margin-left: 40px;
}

.border {
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 6px;
  border: 1px solid #fff;
  opacity: 0.5;
  left: -6px;
  top: -6px;
}

.cards h2 {
  position: relative;
  padding: 20px 30px 20px 20px;
}

.cards > img {
  width: 60%;
  position: absolute;
  top: -10%;
  left: -10%;
}

.cards-color-0 {
  background-color: #EB5160;
 }

.cards-color-1 {
  background-color: #8F3985;
}

.cards-color-2 {
  background-color: #8DAA91;
    margin-top: 60px;
}

.cards-color-3 {
  background-color: #888DA7;
  margin-top: 60px;
}

/* The cover (expanding background) */
.cover {
  position: fixed;
  background: #EB5160;
  z-index: 100;
  transform-origin: 50% 50%;
}

/* The open page content */
.open-content {
  width: 100%;
  z-index: 110;
  position: absolute;
  opacity: 0;
  pointer-events: none;
}

.open-content img {
  position: relative;
  width: 90%;
  margin-left: 3%;
  margin-top: 20px;
  z-index: 5;
}

.open-content .text {
  background: #fff;
  margin-top: -56%;
  padding: 60% 5% 5% 5%;
  width: 80%;
  margin-left: 5%;
  margin-bottom: 5%;
}

.open-content .text h2, .open-content .text p {
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

.close-content {
  display: block;
  position: absolute;
  right: 12px;
  top: 12px;
  width: 30px;
  height: 30px;
}

.close-content span {
  background: #222;
  width: 30px;
  height: 6px;
  display: block;
  position: absolute;
  top: 14px;
}

.x-1 {
  transform: rotate(45deg);
}

.x-2 {
  transform: rotate(-45deg);
}

/* 
** Transitions
*/

.cards {
  transition: opacity 200ms linear 320ms, transform 200ms ease-out 320ms;
}

.border {
  transition: opacity 200ms linear, transform 200ms ease-out;
}

.cards img {
  transition: opacity 200ms linear 0ms, transform 200ms ease-in 0ms;
}

.cards h2 {
  transform: translate3d(20%, 0px, 0px);  
  transition: opacity 200ms linear 120ms, transform 200ms ease-in 120ms;
}

/* Clicked cards */
.cards.clicked img {
  transform: translate3d(0px, -40px, 0px);
  opacity: 0;
}

.cards.clicked .border {
  opacity: 0;
  transform: scale(1.3);
}

.cards.out, .cards.out img {
  transform: translate3d(0px, -40px, 0px);
  opacity: 0;
}

.cards.out h2, .cards.clicked h2 {
  transform: translate3d(20%, -40px, 0px);
  opacity: 0;
}

.cover {
  transition: transform 300ms ease-in-out;
}

.open-content {
  transition: opacity 200ms linear 0ms;
}

.open-content.open {
  opacity: 1;
  pointer-events: all;
  transition-delay: 1000ms;
}

/* 
** Media Queries
*/

@media screen and (max-width: 600px) {
  .cards-column {
    width: 90%;
  }
  
  .column-1 {
    padding-top: 0px;
  }
  
  .open-content img {
    margin-top: 40px;
  }
}

</style>

<body>
<!--
  Please note: this code is in no way ready to be used as is in production on your website. It will need to be adapted to be cross browser compliant & accessible. I just wanted to share how one might go about this effect with CSS & JS and no other dependencies
-->
<div id="coursebox">
   <div class="cards-column column-0">
    <div class="cards cards-color-0">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-00.jpg" />
      <h2>MCA</h2>
    </div>
    <div class="cards cards-color-2">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-02.jpg" />
      <h2>MBA</h2>
    </div>
  </div>
  <div class="cards-column column-1">

    <div class="cards cards-color-1">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-01.jpg" />
      <h2>BCA</h2>
    </div>
    <div class="cards cards-color-3">
      <div class="border"></div>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-03.jpg" />
      <h2>BBA</h2>
    </div>
  </div>

<div class="boxx">

<table cellspacing="25" cellpadding="1" style="background-color:#FFFFE0;">
<tr>
<th>
<img src="images/teacher/principal.jpg" height="170" width="150">
</th>
<th>
<b><font size="5">Dreams don’t come true, they are true, what is required is only an admissible dais and conscious mentoring because success betides when availability meets desperate necessities.</font></b></th></tr><tr><td colspan="2">
<p><font size="4"> <br>Encouraging young desires to be better, inculcating the zeal to be the best and guiding students to reach a level higher is true graduation of every student and their faculties. “What do I want ?” and “How do I get it ?”, is so much a better question</font>
<a href="principal.php"><font color="red" size="4">.   .   .   Read more</font></a></p></td></tr></table>
</div>
</div>
<div id="cover" class="cover"></div>

<div id="open-content" class="open-content">
  <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
  <img id="open-content-image" src="" />
  <div class="text" id="open-content-text">
  </div>
</div>

<script>
	// listing vars here so they're in the global scope
var cardss, nCards, cover, openContent, openContentText, pageIsOpen = false,
    openContentImage, closeContent, windowWidth, windowHeight, currentCard;

// initiate the process
init();

function init() {
  resize();
  selectElements();
  attachListeners();
}

// select all the elements in the DOM that are going to be used
function selectElements() {
  cardss = document.getElementsByClassName('cards'),
  nCards = cardss.length,
  cover = document.getElementById('cover'),
  openContent = document.getElementById('open-content'),
  openContentText = document.getElementById('open-content-text'),
  openContentImage = document.getElementById('open-content-image')
  closeContent = document.getElementById('close-content');
}

/* Attaching three event listeners here:
  - a click event listener for each cards
  - a click event listener to the close button
  - a resize event listener on the window
*/
function attachListeners() {
  for (var i = 0; i < nCards; i++) {
    attachListenerToCard(i);
  }
  closeContent.addEventListener('click', onCloseClick);
  window.addEventListener('resize', resize);
}

function attachListenerToCard(i) {
  cardss[i].addEventListener('click', function(e) {
    var cards = getCardElement(e.target);
    onCardClick(cards, i);
  })
}

/* When a cards is clicked */
function onCardClick(cards, i) {
  // set the current cards
  currentCard = cards;
  // add the 'clicked' class to the cards, so it animates out
  currentCard.className += ' clicked';
  // animate the cards 'cover' after a 500ms delay
  setTimeout(function() {animateCoverUp(currentCard)}, 500);
  // animate out the other cardss
  animateOtherCards(currentCard, true);
  // add the open class to the page content
  openContent.className += ' open';
}

/*
* This effect is created by taking a separate 'cover' div, placing
* it in the same position as the clicked cards, and animating it to
* become the background of the opened 'page'.
* It looks like the cards itself is animating in to the background,
* but doing it this way is more performant (because the cover div is
* absolutely positioned and has no children), and there's just less
* having to deal with z-index and other elements in the cards
*/
function animateCoverUp(cards) {
  // get the position of the clicked cards
  var cardsPosition = cards.getBoundingClientRect();
  // get the style of the clicked cards
  var cardsStyle = getComputedStyle(cards);
  setCoverPosition(cardsPosition);
  setCoverColor(cardsStyle);
  scaleCoverToFillWindow(cardsPosition);
  // update the content of the opened page
  openContentText.innerHTML = '<h2>'+cards.children[2].textContent+'</h2>'+paragraphText;
  openContentImage.src = cards.children[1].src;
  setTimeout(function() {
    // update the scroll position to 0 (so it is at the top of the 'opened' page)
    window.scroll(0, 0);
    // set page to open
    pageIsOpen = true;
  }, 300);
}

function animateCoverBack(cards) {
  var cardsPosition = cards.getBoundingClientRect();
  // the original cards may be in a different position, because of scrolling, so the cover position needs to be reset before scaling back down
  setCoverPosition(cardsPosition);
  scaleCoverToFillWindow(cardsPosition);
  // animate scale back to the cards size and position
  cover.style.transform = 'scaleX('+1+') scaleY('+1+') translate3d('+(0)+'px, '+(0)+'px, 0px)';
  setTimeout(function() {
    // set content back to empty
    openContentText.innerHTML = '';
    openContentImage.src = '';
    // style the cover to 0x0 so it is hidden
    cover.style.width = '0px';
    cover.style.height = '0px';
    pageIsOpen = false;
    // remove the clicked class so the cards animates back in
    currentCard.className = currentCard.className.replace(' clicked', '');
  }, 301);
}

function setCoverPosition(cardsPosition) {
  // style the cover so it is in exactly the same position as the cards
  cover.style.left = cardsPosition.left + 'px';
  cover.style.top = cardsPosition.top + 'px';
  cover.style.width = cardsPosition.width + 'px';
  cover.style.height = cardsPosition.height + 'px';
}

function setCoverColor(cardsStyle) {
  // style the cover to be the same color as the cards
  cover.style.backgroundColor = cardsStyle.backgroundColor;
}

function scaleCoverToFillWindow(cardsPosition) {
  // calculate the scale and position for the cards to fill the page,
  var scaleX = windowWidth / cardsPosition.width;
  var scaleY = windowHeight / cardsPosition.height;
  var offsetX = (windowWidth / 2 - cardsPosition.width / 2 - cardsPosition.left) / scaleX;
  var offsetY = (windowHeight / 2 - cardsPosition.height / 2 - cardsPosition.top) / scaleY;
  // set the transform on the cover - it will animate because of the transition set on it in the CSS
  cover.style.transform = 'scaleX('+scaleX+') scaleY('+scaleY+') translate3d('+(offsetX)+'px, '+(offsetY)+'px, 0px)';
}

/* When the close is clicked */
function onCloseClick() {
  // remove the open class so the page content animates out
  openContent.className = openContent.className.replace(' open', '');
  // animate the cover back to the original position cards and size
  animateCoverBack(currentCard);
  // animate in other cardss
  animateOtherCards(currentCard, false);
}

function animateOtherCards(cards, out) {
  var delay = 100;
  for (var i = 0; i < nCards; i++) {
    // animate cardss on a stagger, 1 each 100ms
    if (cardss[i] === cards) continue;
    if (out) animateOutCard(cardss[i], delay);
    else animateInCard(cardss[i], delay);
    delay += 100;
  }
}

// animations on individual cardss (by adding/removing cards names)
function animateOutCard(cards, delay) {
  setTimeout(function() {
    cards.className += ' out';
   }, delay);
}

function animateInCard(cards, delay) {
  setTimeout(function() {
    cards.className = cards.className.replace(' out', '');
  }, delay);
}

// this function searches up the DOM tree until it reaches the cards element that has been clicked
function getCardElement(el) {
  if (el.className.indexOf('cards ') > -1) return el;
  else return getCardElement(el.parentElement);
}

// resize function - records the window width and height
function resize() {
  if (pageIsOpen) {
    // update position of cover
    var cardsPosition = currentCard.getBoundingClientRect();
    setCoverPosition(cardsPosition);
    scaleCoverToFillWindow(cardsPosition);
  }
  windowWidth = window.innerWidth;
  windowHeight = window.innerHeight;
}

var paragraphText = '<p>Somebody once told me the world is gonna roll me. I ain\'t the sharpest tool in the shed. She was looking kind of dumb with her finger and her thumb in the shape of an "L" on her forehead. Well the years start coming and they don\'t stop coming. Fed to the rules and I hit the ground running. Didn\'t make sense not to live for fun. Your brain gets smart but your head gets dumb. So much to do, so much to see. So what\'s wrong with taking the back streets? You\'ll never know if you don\'t go. You\'ll never shine if you don\'t glow.</p><p>Hey now, you\'re an all-star, get your game on, go play. Hey now, you\'re a rock star, get the show on, get paid. And all that glitters is gold. Only shooting stars break the mold.</p><p>It\'s a cool place and they say it gets colder. You\'re bundled up now, wait till you get older. But the meteor men beg to differ. Judging by the hole in the satellite picture. The ice we skate is getting pretty thin. The water\'s getting warm so you might as well swim. My world\'s on fire, how about yours? That\'s the way I like it and I never get bored.</p>';		
</script>
</head>
</body>
</html>

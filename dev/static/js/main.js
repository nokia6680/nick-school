// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});
var bodyOver = document.querySelector('.body');
var menuOpener = document.querySelector('.js-toggle');
var menuOverlay = document.querySelector('.nav');
var testResultReset = document.querySelector('.result__reset');
var eventOverlay = document.querySelector('.event');
var resultOverlay = document.querySelector('.result');

var prizeOpener = document.querySelector('.prize-toggle');
var prizePopup = document.querySelector('.popup-prize');
var prizeCloser = document.querySelector('.popup-prize__closer');

if (menuOpener) {
    menuOpener.addEventListener('click', function() {
        menuOpener.classList.toggle('opened');
        menuOverlay.classList.toggle('visible');
        bodyOver.classList.toggle('no-scroll');
    });
};

if (testResultReset) {
    testResultReset.addEventListener('click', function() {
        resultOverlay.classList.add('reseted');
        eventOverlay.classList.remove('passed');
    });
};

if (prizeOpener) {
    prizeOpener.addEventListener('click', function() {
        prizePopup.classList.add('active');
        bodyOver.classList.add('no-scroll');
    });
};

if (prizeCloser) {
    prizeCloser.addEventListener('click', function() {
        prizePopup.classList.remove('active');
        bodyOver.classList.remove('no-scroll');
    });
};

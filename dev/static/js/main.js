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

var firstStep = document.querySelector('.js-start');
var firstPage = document.querySelector('.header');
var secondPage = document.querySelector('.content');
var secondStep = document.querySelector('.js-activate');
var submitBtn = document.querySelector('.js-submit');
var thirdPage = document.querySelector('.event');
var lastPage = document.querySelector('.footer');

firstStep.addEventListener('click', function() {
    firstPage.classList.add('passed');
});

if (secondStep) {
    secondStep.addEventListener('click', function() {
        firstPage.classList.add('passed-2');
        secondPage.classList.add('passed');
        setTimeout(function() {
            return secondPage.classList.add('invisible');
        }, 1000);

        setTimeout(function() {
            return thirdPage.classList.add('visible');
        }, 500);
    });
};


if (submitBtn) {
    submitBtn.addEventListener('click', function() {
        event.preventDefault();
        thirdPage.classList.add('passed');

        setTimeout(function() {
            return thirdPage.classList.add('invisible');
        }, 500);

        setTimeout(function() {
            return lastPage.classList.add('visible');
        }, 500);

        setTimeout(function() {
            return lastPage.classList.add('active');
        }, 1000);
    });
};

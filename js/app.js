const header = document.querySelector('.header-main-div');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > header.offsetTop) {
        header.style.opacity = '.96';
    } else {
        header.style.opacity = '1';
    }
})

const hamburger = document.querySelector('.hamburger-container');
const modal = document.querySelector('.modal');
const modalX = document.querySelector('.close-x');

const closeArray = [hamburger, modalX];

closeArray.forEach(function(element) {
    element.addEventListener('click', function(event) {
        if (event.target = hamburger) {
            hamburger.classList.toggle('change');
        } if (modal.classList.contains('modal-hide')) {
            modal.classList.replace('modal-hide', 'modal-show');
        } else if (modal.classList.contains('modal-show')) {
            modal.classList.replace('modal-show', 'modal-hide');
        }
    })
})


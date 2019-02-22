let closeX = document.querySelector('.close-img-modal')
let childModal = document.querySelector('.the-image-modal')
let popUp = document.querySelector('.pop-up-img')
let childImageNodes = Array.prototype.slice.call( document.querySelector('.child-gallery-container').children )
let childImage = document.querySelectorAll('.child-image-container')
let widthMatch = window.matchMedia('(min-width: 850px)')

childModal.addEventListener('click', function(event) {
    if (event.target != popUp) {
        childModal.classList.toggle('hide-img-modal')
    }
})

childImage.forEach(function(element) {
    element.addEventListener('click', function() {
        let nodeNumber = childImageNodes.indexOf(element)
        childModal.classList.toggle('hide-img-modal')
        popUp.style.background = childImageNodes[nodeNumber].children[0].style.background
    })
})




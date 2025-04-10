const hamburger = document.getElementById('hamburger-menu');
const menu = document.querySelector('.navbar-nav');
const close = document.querySelector('.close-menu')
const overlayMenu = document.querySelector('.overlay-menu')

hamburger.addEventListener('click' , () => {
    menu.classList.add('show')
    overlayMenu.classList.add('show')
})

close.addEventListener('click' , ()=>{
    menu.classList.remove('show')
    overlayMenu.classList.remove('show')
})

overlayMenu.addEventListener('click' , () => {
    menu.classList.remove('show')
    overlayMenu.classList.remove('show')
})
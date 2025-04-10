
const nav = document.querySelector('.nav')
const sidebar = document.querySelector('#mySlidenav');
const mian = document.querySelector('#main');
const iconA = document.querySelectorAll('.icon-a');
const icon = document.querySelectorAll('.icon')
const logo = document.querySelector('.logo')
const slidenavTitle = document.querySelectorAll('.slidenav-title')
const btnNav = document.querySelector('.btn-nav')
const btnClose = document.querySelector('.btn-close')

nav.addEventListener('click' , ()=>{
    sidebar.classList.toggle('active')
    mian.classList.toggle('active')
    logo.classList.toggle('active')
    iconA.forEach(item =>{
        console.log(item)
        item.classList.toggle('active')
    })
    icon.forEach(item =>{

        item.classList.toggle('active')
    })
    slidenavTitle.forEach(item =>{

        item.classList.toggle('active')
    })
})
btnNav.addEventListener('click' , ()=>{
    sidebar.classList.toggle('show')
})
btnClose.addEventListener('click' , ()=>{
    sidebar.classList.toggle('show')
})

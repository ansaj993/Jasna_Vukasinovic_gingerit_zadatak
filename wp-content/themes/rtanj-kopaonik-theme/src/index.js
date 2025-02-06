import '../css/style.scss';

//Hamburger menu 

const menuIcon = document.querySelector('.menu-icon');
const navMenu = document.querySelector('nav');

menuIcon.addEventListener('click', function(e){
    navMenu.classList.toggle('active');
})


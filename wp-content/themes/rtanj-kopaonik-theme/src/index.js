import '../css/style.scss';

//Hamburger menu 

const menuIcon = document.querySelector('.menu-icon');
const navMenu = document.querySelector('nav');

menuIcon.addEventListener('click', function(e){
    navMenu.classList.toggle('active');
})

//Carousel

const queryAll = document.querySelectorAll('.query--carousel');


queryAll.forEach(function(myquery){
    const arrowLeft = myquery.querySelector('.fa-angle-left');
    const arrowRight = myquery.querySelector('.fa-angle-right');

    const queryWrap = myquery.querySelector('.query__wrap');
    const singleCard = document.querySelector('.card');
    const carouselWrap = document.querySelector('.query--carousel');
    const allCards = myquery.querySelectorAll('.card');
    const cardWidth = singleCard.clientWidth;
    const queryWrapWidth = carouselWrap.clientWidth;
    
    const slideInPercentage = Math.round((cardWidth / queryWrapWidth) * 100);
    const numberOfItems = Math.round(queryWrapWidth / cardWidth);
    const totalWidth = slideInPercentage * (allCards.length - numberOfItems);
    
    console.log(slideInPercentage);
    

    let move = 0;

    arrowRight.addEventListener('click', function(){
        move -= slideInPercentage;

        if(move < -(totalWidth)) {
            move = 0;
        }

        queryWrap.style.transform = `translateX(${move}%)`;
    })

    arrowLeft.addEventListener('click', function(){
        move += slideInPercentage;

        if(move > 0) {
            move = -(totalWidth);
        }

        queryWrap.style.transform = `translateX(${move}%)`;
    })

})

// Gallery 

const titles = document.querySelectorAll('.query__title');
const galleries = document.querySelectorAll('.gallery');

titles.forEach(function(title){
    galleries.forEach(function(gallery){  
        gallery.style.display ='none';

        title.addEventListener('click', function(e){
            if(e.target.innerText === gallery.id){
                gallery.style.display = 'flex';
                e.target.style = 'border-bottom: 2px solid #1C4259';
            } else {
                gallery.style.display = 'none';
            }
            
        })    
    })
})

//FAQ

const faqs = document.querySelectorAll('.faq');

faqs.forEach(function(faq){
    const txt = faq.querySelector('p');

    txt.style.display = 'none';       

    faq.addEventListener('click', function(){
        txt.style.display = 'block';       
    })


})


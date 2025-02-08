import '../css/style.scss';

//Hamburger menu 

const menuIcon = document.querySelector('.menu-icon');
const navMenu = document.querySelector('nav');

menuIcon.addEventListener('click', function(e){
    navMenu.classList.toggle('active');
})

//Carousel

const sections = document.querySelectorAll('.section');

sections.forEach(function(section){
    const arrowLeft = section.querySelector('.fa-angle-left');
    const arrowRight = section.querySelector('.fa-angle-right');
    const query = section.querySelectorAll('.query--carousel');

    query.forEach(function(myquery){
        const queryWrap = myquery.querySelector('.query__wrap');
        const singleCard = myquery.querySelector('.card');

        //Count cards only in visible blocks
        const cardParent = singleCard.parentElement.children;
        
        const cardWidth = singleCard.clientWidth;
        const queryWrapWidth = myquery.clientWidth;    
        
        const slideInPercentage = Math.round((cardWidth / queryWrapWidth) * 100);
        const numberOfItems = Math.round(queryWrapWidth / cardWidth);
        const totalWidth = slideInPercentage * (cardParent.length - numberOfItems);
        
        let move = 0;

        function queryTransform(){
            queryWrap.style.transform = `translateX(${move}%)`;
        }

        arrowRight.addEventListener('click', function(){
            move -= slideInPercentage;
    
            if(move < -(totalWidth)) {
                move = 0;
            }
    
            queryTransform();     
        })
    
        arrowLeft.addEventListener('click', function(){
            move += slideInPercentage;
    
            if(move > 0) {
                move = -(totalWidth);
            }
    
            queryTransform();
        })

    })
})

// Gallery 

const titles = document.querySelectorAll('.query__title');
const galleries = document.querySelectorAll('.gallery');

galleries.forEach(function(gallery){     
    
    titles.forEach(function(title){
        title.addEventListener('click', function(e){
            for(let i = 0; i < titles.length; i++){
                titles[i].style.borderBottom = '2px solid white';  
            }

            e.currentTarget.style.borderBottom = '2px solid #1C4259';            

            gallery.style.display = 'none';

            if(title.innerText === gallery.id){
                gallery.style.display = 'grid';
            } 
        })   
    })
})

//FAQ

const faqs = document.querySelectorAll('.faq');
const faqBtn = document.querySelector('.faqs button');
const faqsArr = Object.values(faqs);

const newArr = faqsArr.slice(5,10);

console.log(faqBtn);

for(let i=0; i < newArr.length; i++){
    newArr[i].style.display = 'none';
}


faqs.forEach(function(faq){
    faq.addEventListener('click', function(e){
        for(let i = 0; i < faqs.length; i++){
            faqs[i].className = 'faq section__content--dark close';
        }
        
        if(faq.classList == 'faq section__content--dark close'){
            e.currentTarget.className = 'faq section__content--dark open';
        } else {
            e.currentTarget.className = 'faq section__content--dark close';
        }
       
    })
})

faqBtn.addEventListener('click', function(e){
    for(let i=0; i < newArr.length; i++){
        newArr[i].style.display = 'block';
    }
    e.currentTarget.style.display = 'none';
})

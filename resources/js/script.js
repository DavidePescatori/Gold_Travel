let Title = document.querySelector('#title');
let Div = document.querySelector('#divTitle');



window.addEventListener('scroll' , ()=>{

    if(window.scrollY > 100){
    Title.classList.add('fixed-top', 'headerMargin');
    Title.style.transform = 'scale(0.6)';
    Div.classList.remove('divTitle');
    Div.classList.add('divTitle2');
    }

});


const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 2000, // Tempo di transizione in millisecondi (3 secondi in questo caso)
      },
  
    // If we need pagination
    // pagination: {
        //   el: '.swiper-pagination',
    // },
    
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    // And if we need scrollbar
    // scrollbar: {
        //   el: '.swiper-scrollbar',
        // },
    });
    
    // let buttonPrev = document.querySelector('#buttonPrev');
    // let buttonNext = document.querySelector('#buttonNext');
    // let Swiper = document.querySelector('#Swiper');
    
    
    // Swiper.addEventListener('mouseenter', ()=>{
    
    //     buttonPrev.classList.remove('d-none');
    //     buttonNext.classList.remove('d-none');
    //     buttonPrev.classList.add('d-block');
    //     buttonNext.classList.add('d-block');
    
    // });
    
    
    // swiper.addEventListener('mouseleave', ()=>{
    
    //     buttonPrev.classList.remove('d-block');
    //     buttonNext.classList.remove('d-block');
    //     buttonPrev.classList.add('d-none');
    //     buttonNext.classList.add('d-none');
    
    // });
    
    
    
    
    
    
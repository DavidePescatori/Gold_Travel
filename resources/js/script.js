let Title = document.querySelector('#title');
let Div = document.querySelector('#divTitle');



// window.addEventListener('scroll' , ()=>{

//     if(window.scrollY > 100){
//     Title.classList.add('fixed-top', 'headerMargin');
//     Title.style.transform = 'scale(0.5)';
//     Title.classList.remove('bg-h1');
    
//     }else{
//     Title.classList.remove('fixed-top', 'headerMargin');
//     Title.style.transform = 'scale(1)';
//     Title.classList.add('bg-h1');
//     }

// });


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
    
    

//  titoli categorie
let check = document.querySelector("#check");
let hidden = document.querySelector("#hidden");
let show = document.querySelector("#show");
let header = document.querySelector("#header");

switch (check.classList[1]) {
  case 'id1':
    header.classList.remove('header-image');
    header.classList.add('abruzzo');
    break;
  case 'id2':
    header.classList.remove('header-image');
    header.classList.add('basilicata');
    break;
  case 'id3':
    header.classList.remove('header-image');
    header.classList.add('calabria');
    break;
  case 'id4':
    header.classList.remove('header-image');
    header.classList.add('campania');
    break;
  case 'id5':
    header.classList.remove('header-image');
    header.classList.add('emilia-romagna');
    break;
  case 'id6':
    header.classList.remove('header-image');
    header.classList.add('friuli-venezia-giulia');
    break;
  case 'id7':
    header.classList.remove('header-image');
    header.classList.add('lazio');
    break;
  case 'id8':
    header.classList.remove('header-image');
    header.classList.add('liguria');
    break;
  case 'id9':
    header.classList.remove('header-image');
    header.classList.add('lombardia');
    break;
  case 'id10':
    header.classList.remove('header-image');
    header.classList.add('marche');
    break;
  case 'id11':
    header.classList.remove('header-image');
    header.classList.add('molise');
    break;
  case 'id12':
    header.classList.remove('header-image');
    header.classList.add('piemonte');
    break;
  case 'id13':
    header.classList.remove('header-image');
    header.classList.add('puglia');
    break;
  case 'id14':
    header.classList.remove('header-image');
    header.classList.add('sardegna');
    break;
  case 'id15':
    header.classList.remove('header-image');
    header.classList.add('sicilia');
    break;
  case 'id16':
    header.classList.remove('header-image');
    header.classList.add('toscana');
    break;
  case 'id17':
    header.classList.remove('header-image');
    header.classList.add('trentino-alto-adige');
    break;
  case 'id18':
    header.classList.remove('header-image');
    header.classList.add('umbria');
    break;
  case 'id19':
    hidden.classList.remove('d-none');
    show.classList.add('d-none');
    header.classList.remove('header-image');
    header.classList.add("valle-di-aosta");
    break;
  case 'id20':
    header.classList.remove('header-image');
    header.classList.add('veneto');
    break;
}
function handleFlagClick(lang) {
  // Chiamare la funzione di traduzione con la lingua selezionata
  translate(lang);
}


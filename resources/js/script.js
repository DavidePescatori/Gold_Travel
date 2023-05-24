let Title = document.querySelector('#title');
let Div = document.querySelector('#divTitle')
let Geo = document.querySelectorAll('option');


window.addEventListener('scroll' , ()=>{

    if(window.scrollY > 100){
    Title.classList.add('fixed-top', 'headerMargin');
    Title.style.marginLeft = 'auto';
    Title.style.marginRight = 'auto';
    Title.style.transform = 'scale(0.6)';
    Div.classList.remove('divTitle');
    Div.classList.add('divTitle2');
    }

});


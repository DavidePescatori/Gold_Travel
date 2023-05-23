let Title = document.querySelector('#title');
let Div = document.querySelector('#divTitle')
let Geo = document.querySelectorAll('option');

Geo.forEach(option=>{

    option.addEventListener('click', ()=>{
        let number=parseInt(option.value)
        if(number == 3){
            document.body.classList.remove="";
            document.body.classList.add('europaOrientale');
           console.log(number);
        }else if(number == 4){
            document.body.innerHTML="";
            document.body.classList.add('europaOccidentale');
          console.log(number);
        }else if(number == 10){
            document.body.innerHTML="";
            document.body.classList.add('Antartide');
    console.log(number);
        }
    
    });
});

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


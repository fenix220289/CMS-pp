(function(){
    
    const sliders = [...document.querySelectorAll('.advantage__body')];
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');
    let value;   

    buttonNext.addEventListener('click', ()=>{
        changePosition(1);
    });

    buttonBefore.addEventListener('click', ()=>{
        changePosition(-1);
    });

    const changePosition = (add)=>{
        const currentadvantage = document.querySelector('.advantage__body--show').dataset.id;
        value = Number(currentadvantage);
        value+= add;


        sliders[Number(currentadvantage)-1].classList.remove('advantage__body--show');
        if(value === sliders.length+1 || value === 0){
            value = value === 0 ? sliders.length  : 1;
        }

        sliders[value-1].classList.add('advantage__body--show');

    }

})();
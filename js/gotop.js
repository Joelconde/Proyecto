/*window.onscroll = function(){
    if (document.documentElement.scrollTop > 100){
        document.querySelector('.go-top-container')
        .classList.add('show');
    } else {
        document.querySelector('.go-top-container')
        .classList.remove('show');
    }
}

document.querySelector('.go-top-container')
.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});*/

$(document).ready(function(){ irArriba(); });

function irArriba(){
    $('.ir-arriba').click(function(){
        if($(this).scrollTop() > 0){
            $('.ir-arriba').slideDown(600):
        } else {
            $
        }
    }
}
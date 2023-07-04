// new Swiper('.sliderLine',{

//     loop: true,
   
//     autoplay: { //автопроигрывать слайдер
//        delay: 2500, //задержка 2500 миллисекунд
//        stopOnLastSlide: false, //не отсанавливаться на последнем слайде
//     },
   
//     slidesPerView: 2.5, //показывать 2.5 слайда на одном экране
// });

// let  currentSlider = 0; (function toggleSlider(count){
//     if (count < 0) {
//         currentSlider = 3
//      }
 
//      if (count > 3) {
//         currentSlider = 0
//      }
 
//      const offset = currentSlider * 256;
//      sliderLine.style.left = -offset + 'px';
// });

// const sliderLine = document.querySelector('.main-slider');

// document.querySelector('.slider-next').addEventListener('click', function(){
//     offset = offset + 1256;
//     if (offset > 768) {
//         offset = 0;
//     }
//     sliderLine.style.left = -offset + 'px';
// });

// document.querySelector('.slider-prev').addEventListener('click', function () {
//     offset = offset - 256;
//     if (offset < 0) {
//         offset = 768;
//     }
//     sliderLine.style.left = -offset + 'px';
// });

new Swiper('.image-slider',{

    loop: true,

    autoplay: { //автопроигрывать слайдер
    delay: 2000, //задержка 2500 миллисекунд
    stopOnLastSlide: false, //не отсанавливаться на последнем слайде
    },

    slidesPerView:1, //показывать один слайд

    effect: 'fade', //эффект фейда

    });
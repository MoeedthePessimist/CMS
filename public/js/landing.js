


// script for transitioning images on the landing page carousel
const images = [
    '../images/1.jpg',
    '../images/2.jpg',
    '../images/3.jpg',
    '../images/4.jpg',
    '../images/5.jpg',
    '../images/6.jpg',
    '../images/7.jpg',
    '../images/8.jpg',
    '../images/9.jpg',
]

let index = 0;

$(document).ready(function() {
    setInterval(function() {
        index = (index >= images.length) ? 0:index+1
        var image = $('.carousel-background');
        image.fadeOut(100, function () {
            image.css("background", `url(${images[index]}) center/cover no-repeat fixed`);
            image.fadeIn(100);
        });
    }, 5000);  
}); 

$('.slide--container').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
        breakpoint: 850,
        settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 2
            }
        },
        {
        breakpoint: 620,
        settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1
            }
        }
    ]
});
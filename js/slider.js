jQuery(document).ready(function ($) {

    $(".rslides").responsiveSlides({
        speed: 1000, // Integer: Speed of the transition, in milliseconds
        timeout: 6000, // Integer: Time between slide transitions, in milliseconds
    });

    // setInterval(function () {
    //     moveRight();
    // }, 3000);
  
    // var slideCount = $('#slider ul li').length;
    // // alert(slideCount);

    // function moveRight() {
        

    //     for (i = 1; i <= slideCount; i++) {

    //         setTimeout(function(){
    //         $('#slider ul li:nth-child(1)').fadeOut();
        
    //         }, 1000);

    //         $('#slider ul li:nth-child(2)').fadeIn();

    //     } 
        
    // };


    // function moveRight() {
    //     $('#slider ul').animate({
    //         left: - slideWidth
    //     }, 200, function () {
    //         $('#slider ul li:first-child').appendTo('#slider ul');
    //         $('#slider ul').css('left', '');
    //     });
    // };

});    

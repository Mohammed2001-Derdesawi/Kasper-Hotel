$(document).ready(function(){
    $(".add-active").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");

    });

   



      // btn_direction
      $(window).scroll(function(){
          var windowscroll = $(this).scrollTop();
          if(windowscroll > 500){
                  $(".btn_direction").fadeIn();
          }
          else{
              $(".btn_direction").fadeOut();
          }
      })
      $(".btn_direction").on('click',function(){
       $("html").animate({
           scrollTop : 0
       },100);
      })
      

  
}
    
)

$('.carousel').carousel({
    interval: 2000

  });


  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
 
     
   
    keyboard: {
        enabled: true,
      },
    coverflowEffect: {
      rotate: 20,
      stretch: 0,
      depth: 200,
      modifier: 1,
      slideShadows: true,
  
      
    },
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
        reverseDirection: false,
        
        
      },
     
       loop:true,
    
  
 
  });


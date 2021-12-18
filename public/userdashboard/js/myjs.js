
var typed2 = new Typed('#title-header-text', {
   strings: ['America','German','Spain','Every Where'],
   typeSpeed: 120,
   backSpeed: 120,
 
   loop: true
 });


 $(document).ready(function(){
        
  $("#one-way").click(function(){
      $(".round-way-details").slideUp(800);
  });
  $("#round-way").click(function(){
      $(".round-way-details").slideDown(800);
  });




  
});

$(function(){
  $(window).scroll(function(){
      var windowscroll = $(this).scrollTop()
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
   },1000);
  })
  
});
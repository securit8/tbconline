
 $(document).ready(function(){
    $('nav .toggle').click(function(){
      $('nav .toggle').toggleClass('nav-active')
    });
  });
   // burger click start
 $(document).ready(function(){
        $('.toggle').click(function(){
            $('.menu_list').toggleClass('active');
        });
    });
// burger click end

// search jquery start
  $(document).ready(function(){
    $(".search-btn").click(function(){
        $('.search-txt').toggleClass('lang_href');
    });
});  
// search style end



//start volume 
  var x = document.getElementById("backSound"); 
function playAudio() { 
    x.play();
}
function pauseAudio() {
    x.pause();
}

$(document).ready(function(){
  $('.sound').on('click', function(){
  if($(this).hasClass('sound-mute')){
    pauseAudio();
    $('.sound').removeClass('sound-mute');
    $('.sound').css('background-color','#d0d1d0');
    }
    else{
    playAudio();
    $('.sound').addClass('sound-mute');
    $('.sound').css('background-color','#fa3737');
    }
  });
});
//end volume





// burger click start
//  $(document).ready(function(){
//         $('.toggle').click(function(){
//             $('.menu_list').toggleClass('active');
//         });
//     });
// // burger click end
// // search jquery start
//   $(document).ready(function(){
//     $(".search-btn").click(function(){
//         $('.search-txt').toggleClass('lang_href');
//     });
// });
//    $(".main_banner").on("click", function(){
//         $('.search-txt.lang_href').removeClass('lang_href');
//     });
// search style end
	// burger click start
 
// // search jquery start
//   $(document).ready(function(){
//     $(".search-btn").click(function(){
//     var bool = $('.search-txt').hasClass('lang_href');
//       if(bool) {
//         $('.search-txt').removeClass('lang_href')
//         } else{ 
//           $('.search-txt').addClass('lang_href')
//         }
//     });  



//     $("body").click(function(e){
//       var bool1 = $(e.target).hasClass('search-img')
//       var bool = $('.search-txt').hasClass('lang_href');
//       if(bool && !bool1) {
//         $('.search-txt').removeClass('lang_href')
//         }
// })

// });



var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    boolean:true,
    // autoplay:true,
    // autoplayTimeout:3000,
    responsiveClass:true,
    nav: true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }


})


//video popup 
$('#videoLink').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
})
   $('#videoLink1').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
})
    $('#videoLink2').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
})
    
   $('#videoLink3').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
}) 



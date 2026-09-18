function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-popup-button');
	$('.open-sticky[aria-popup-button=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup-button=' + get_id +']').removeClass('show-sticky');
    $('.rancak-popup[aria-popup-box=' + get_id +']').slideToggle('fast');
    $('.rancak-popup').not('[aria-popup-box=' + get_id +']').slideUp('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
    ClosePopup();
  });
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
    if(scroll_position >= 4){
      $('header').addClass("header-afterscroll");		
    }
    else{
      $('header').removeClass("header-afterscroll");
    }
  }); 
}



var parallaxSection = document.querySelector(".section-cover .section-bg");
function updateParallax() {
  if (parallaxSection) {
    var scrolled = window.pageYOffset;
    parallaxSection.style.backgroundPositionY = (scrolled * 0.4) + "px";
  }
}
updateParallax();
window.addEventListener("scroll", updateParallax);
var readMoreBtn = document.querySelector('.cover-action button');
var targetSection = document.querySelector('.section-about');
if (readMoreBtn && targetSection) {
  readMoreBtn.addEventListener('click', function(e) {
    e.preventDefault();
    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
}



$(document).ready(function(){
  "use strict";
  open_sticky();
  all_scroll();
});
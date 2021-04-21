$(document).ready(function() {
	$('.go-top').hide(0)
	
	$(window).scroll(function(){
	  if($(this).scrollTop() > 100){
		$('.go-top').fadeIn(200);      
	  } else {
		$('.go-top').fadeOut(300);
	  }
	});
	$('.go-top').click(function() {
	  event.preventDefault();
	  
	  $('html , body').animate({scrollTop: 0}, 1000);
	});
  });	
// Change the header onscroll
$(function(){
	$(window).scroll(function() {
		if(window.pageYOffset >= 10){
			$('header.main').addClass('small');
		}
		else{
			$('header.main').removeClass('small');
		}
	});
});
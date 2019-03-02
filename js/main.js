

/*$(".nav-item a").click(function(){


	$(".nav-item a").removeClass("active");
	$(this).addClass("active");

	var hr=$(this).attr("href");
	var secoffcet=$(hr).offset().top;
	$("body , html").animate({"scrollTop":secoffcet-100},1000)

})*/
$(".nav-item a").click(function(){
	$(".nav-item a").removeClass("active");
	$(this).addClass("active");
})


$(window).scroll(function(){
	var scrlt = $(window).scrollTop();
	if(scrlt>500){
		$("nav").addClass("nav-bg");
		$("nav").removeClass("nav-bg1");
	}
	else{
		$("nav").addClass("nav-bg1");
		$("nav").removeClass("nav-bg");
	}
})





$('.owl-carousel').owlCarousel({
    loop:true,
    items:4,
    autoplay:true
})
var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
      loop: true,
      loopCount: Infinity
  });





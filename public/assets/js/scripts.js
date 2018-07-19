
// выпадающее меню левого сайдбара
$(".dd").hover(function(){
	$(this).find(".cat-sub-menu").show(500).animate({
		top: '20'
	});
	$(this).find("span").css({"duration" : "0.9" , "easing" : "ease-out", "transform" : "rotateZ(90deg)"});
}, function(){
	$(this).find(".cat-sub-menu").hide(500).animate({
		top: '0'
	});
	$(this).find("span").css({"transform" : "rotateZ(0)"}).delay(1000);
});

// Выпадающее меню в хедере Государственные ресурсы
$(".drop").hover( function() {
	$(this).find(".dropdown").fadeIn(200)
}, function() {
	$(this).find(".dropdown").fadeOut(200);
} );
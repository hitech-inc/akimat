
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

// Выпадающее меню Событий
$(".comp_drop").hover( function() {
	$(this).find(".comp_inner_wrap").fadeIn(500);
}, function () {
	$(this).find(".comp_inner_wrap").fadeOut(500);
} );

// Мобильная версия меню
var openMenu = document.getElementById("bar");
var closeMenu = document.getElementById("closeSidenav");

openMenu.addEventListener("click", openNav);
closeMenu.addEventListener("click", closeNav);

function openNav() {
    document.getElementById("mySidenav").style.width = "50%";
    $("#mySidenav").css({"display" : "block"});
    $(".sidenav").css({"padding-left" : "40px"});
    // document.getElementById("mySideNav").style.width = document.getElementById("mySideNav").style.width === "400px" ? "0" : "400px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $(".sidenav").css({"padding-left" : "0"});
}
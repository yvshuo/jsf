$(function(){
	var swiper = new Swiper('.swiper-container', {
                slidesPerView: 5.5,
                //paginationClickable: true
                //,                freeMode: true,                resistanceRatio:0
            });
	$("#ttk").find(".lesson-cont").click(function(){
		window.location = "ttkDetail.php";
	});
	$("#sjk").find(".lesson-cont").click(function(){
		window.location = "sjkDetail.php";
	});

});
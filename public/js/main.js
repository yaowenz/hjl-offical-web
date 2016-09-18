$(document).ready(function(){
    //自适应
    $('body').width($(window).width());
    $(window).resize(function(){
    	if($(window).width() <= 1200){
    		$('body').width(1200);
    	}
    	else{
    		$('body').width($(window).width());
    	} 	
    })
    
    //轮播图
    var mySwiper = new Swiper(".swiper-container",{
        pagination: '.swiper-pagination',
        paginationClickable: true,
        loop: true,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
    })

    //侧边栏
    $('.side-bar').hover(function(){
        $('.wx-qrcode').fadeIn();
    },function(){
        $('.wx-qrcode').fadeOut();
    })

    //回到顶部
    $(window).scroll(function(){
        if($(window).scrollTop() > 3000){
            $('.up').fadeIn();
        } else{
            $('.up').fadeOut();
        }
    })
    $('.up').click(function(){
        $('body,html').animate({scrollTop:0},1000);
    })






















})
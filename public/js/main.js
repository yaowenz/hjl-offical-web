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
    });
    
    //导航
    $('.index-bg .index').addClass('active current');
    $('.ayi-bg .order').addClass('active current');
    $('.join-bg .branches').addClass('active current');
    $('.about-bg .about').addClass('active current');
    
    $('.nav a').hover(function () {
        $(this).addClass('active').siblings().removeClass('active')
    }, function () {
        $(this).hasClass('current') || $(this).removeClass('active')
        if ($(this).parents().is('.nav')) {
            return
        }
        $('.nav a.current').addClass('active')
    })
     $('.nav').hover(function(){}, function () {
            $('.nav a.current').addClass('active')
     });

    //最新业务
    var swiperBusiness = new Swiper(".swiper-container.swiper-business",{
        pagination: '.swiper-pagination.business-pagination',
        paginationClickable: true,
        uniqueNavElements :false,
        loop: true,
        autoplay: 3000,
        // autoplayDisableOnInteraction: false,
    });
    $('.swiper-container.swiper-business').hover(function(){
        swiperBusiness.stopAutoplay();
    },function(){
        swiperBusiness.startAutoplay();
    });

    //最新业务详情
    $('.business-item').hover(function(){
        $(this).find('.business-item-check').slideDown();
    }, function(){
        $(this).find('.business-item-check').slideUp();
    });

    //弹出窗口
    $('.ayi-button').on('click', function(e){
        Custombox.open({
            target: '.join-modal',
            effect: 'fadein',
            speed: 300,
        });
        e.preventDefault();
    });

    //推荐阿姨
    $('.worker-item').hover(function(){
        $(this).addClass('shadow').find('.worker-item-check').addClass('shadow').slideDown();
    }, function(){
        $(this).removeClass('shadow').find('.worker-item-check').removeClass('shadow').slideUp();
    });

    //推荐阿姨循环
    var swiperWorker = new Swiper(".swiper-container.swiper-worker",{
        pagination: '.swiper-pagination.worker-pagination',
        paginationClickable: true,
        uniqueNavElements :false,
        loop: true,
        autoplay: 6000,
        // autoplayDisableOnInteraction: false,
    });
    $('.swiper-container.swiper-worker').hover(function(){
        swiperWorker.stopAutoplay();
    },function(){
        swiperWorker.startAutoplay();
    });

    //在线选门店循环
    var swiperSelect = new Swiper(".swiper-container.shop-select",{
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next',
        observer: true,
    });

    //门店二维码
    $('body').on('mouseenter', '.shop-list-item', function(){
        $(this).addClass('shop-list-item-active');
    });
    $('body').on('mouseleave', '.shop-list-item', function(){
        $(this).removeClass('shop-list-item-active');
    });

    //侧边栏
    // $('.wechat').hover(function(){
    //     $('.wx-qrcode').fadeIn();
    // },function(){
    //     $('.wx-qrcode').fadeOut();
    // })

    //回到顶部
    $(window).scroll(function(){
        if($(window).scrollTop() > 800){
            $('.to-top').fadeIn();
        } else{
            $('.to-top').fadeOut();
        }
    })
    $('.to-top').click(function(){
        $('body,html').animate({scrollTop:0},1000);
    })






















})
$(function(){
    $('.about-slider').slick({
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        infinite: true,
        fade: true,
        arrows: false,
        dots:false,
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.about-count').html(nextSlide+1)
        if($('.about-points')){
            $('.about-points li:nth-child('+(nextSlide+1)+')').addClass('active').siblings().removeClass('active')
        }
    });
    // $('.project-slider').slick({
    //     speed: 500,
    //     autoplay: false,
    //     autoplaySpeed: 5000,
    //     slidesToShow: 3,
    //     infinite: true,
    //     pauseOnHover:false,
    //     arrows: true,
    //     dots:false,
    //     responsive: [
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1
    //             }
    //         }
    //     ]
    // })
    $('.award-slider').slick({
        speed: 500,
        autoplay: true,
        slidesToShow: 1,
        infinite: true,
        arrows: false,
        dots:true,
    })
    $('.banner-slider').slick({
        speed: 1000,
        autoplay: true,
        slidesToShow: 1,
        infinite: true,
        fade: true,
        arrows: false,
        dots: false,
        pauseOnHover:false,
    })
    $('.award-slider2').slick({
        speed: 500,
        autoplay: true,
        slidesToShow: 2,
        infinite: true,
        arrows: false,
        dots:true,
        responsive:[
            {
                breakpoint: 992,
                settings: {
                    slidesToShow:2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow:1
                }
            }
        ]
    })
    

    $('.ptabs a').on('click', function(){
        $(this).addClass('active').siblings().removeClass('active')
        $(this).parents('.ptabs-wrap').find('.pcontent-wrap .pcontent:nth-child('+($(this).index()+1)+')').fadeIn().siblings().hide()
        // if($(window).width()<767){
        //     document.getElementById('pcontent-wrap').scrollIntoView({behavior:'smooth'})
        // }
    })
    function tabTimeout(){
        let index = $('.ptabs.package a.active').next().index()
        if(index==-1) index = 0
        $('.ptabs.package a:nth-child('+(index+1)+')').addClass('active').siblings().removeClass('active');
        $('.ptabs.package').parents('.ptabs-wrap').find('.pcontent-wrap .pcontent:nth-child('+(index+1)+')').fadeIn().siblings().hide()
    }
    var tout = setInterval(() => {tabTimeout()}, 3000)
    $('.ptabs.package a').on('click',function(){
        clearInterval(tout)
        tout = setInterval(() => {tabTimeout()}, 3000)
    })

    $('.nav-trigger').on('click', function(){
        $(this).text() == "☰" ? $(this).text('✕') : $(this).text('☰')
        $(this).toggleClass('text-white')
        $(this).siblings('.navigation').slideToggle()
    })
    $('.navigation a').on('click', function(){
        if($(window).width()<767){
            $('.navigation').hide()
            $('.nav-trigger').text('☰').removeClass('text-white')
        }
    })
})
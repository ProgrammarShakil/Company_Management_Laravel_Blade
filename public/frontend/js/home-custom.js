
$(document).ready(function () {

            $("#owl-carousel2").owlCarousel({
                items:3,
                margin:20,
                autoplay: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:3,
                    }
                }

            });
            $("#owl-carousel3").owlCarousel({
                items:3,
                margin:20,
                autoplay: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:3,
                    }
                }

            });
            $("#client-area").owlCarousel({
                items:1,
                margin:5,
                autoplay: true,
                nav: true,
                dots:false

            });
        
    
        $('[data-toggle="codetooltip"]').tooltip();   
    });


    new WOW().init();
    $(function() {
        if (!sessionStorage.nModal) {
            $('#noticemodal').click();
            sessionStorage.nModal = 1;
        }
    })


    $(function () {
        $('a[href="#search"]').on('click', function(event) {
            event.preventDefault();
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });

        $('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });



    });
    
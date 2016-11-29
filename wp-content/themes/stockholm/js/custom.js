


//Footer fixed
$(window).bind("load", function() {
    var footerHeight = 0,
        footerTop = 0,
        $footer = $(".footer");
    positionFooter();
    function positionFooter() {

         footerHeight = $footer.height();
         footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";


        if ( ($(document.body).height()) < $(window).height()) {
            $footer.css({
                 position: "fixed",
                 bottom: "0px",
                 left: "0",
                 right: "0"
            })
        } else {
            $footer.css({
                 position: "relative",
                 display: "block"
            })
        }
    }
    $(window)
    .scroll(positionFooter)
    .resize(positionFooter)
    .click(positionFooter)

});

$(document).ready(function (){

   $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });


    $('.tab-anc a').on('click', function(e){

        e.preventDefault();
        var thisHref = $(this).attr('href');
        $('.tab-anc').removeClass('active');
        $(this).parent('.tab-anc').addClass('active');
        $('.tab-content-each').hide();

        $('.tab-content-each'+thisHref).css({'display':'block'});

        $('.flower-carousel').get(0).slick.setPosition();

    });



    $('.flower-carousel').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    /// Co worker slider

    console.log('slick');
/*
    $('.worker-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    */


    //home-content-carosel



    $('.content-carousel').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });



if(tabe==1)
{
	 $('.tab-anc:eq(1) > a').click();
}


///-----------------------------------om-oss home page scroll-----------------------------------------

if(omoss==1)
{
	setTimeout(function(){

			$('html, body').animate({
	        scrollTop: $('#om-oss-content').offset().top-110
	    }, 500);
		// console.log($('#om-oss-content').offset().top);

		 },300);
}



	$('.om-oss > a').click(function(){
		setTimeout(function(){
			var n=window.location.pathname;
	  history.pushState('', 'New Page Title', n);

		},50);


	 // console.log($('#om-oss-content').offset().top);
			$('html, body').animate({
	        scrollTop: $('#om-oss-content').offset().top -110
	    }, 500);


		});



//------------------------------------------------------------------------
});


$('body').on('click','.flower-car',function(){
obj=$(this);

$('.flower-car').each(function()
{
if($(this).hasClass('select-class'))
{
	$(this).removeClass('select-class');
	$(this).find('figure > span').remove();
}
});

obj.find('figure').prepend('<span><i    class="fa fa-check" aria-hidden="true" > </i></span>');
obj.addClass('select-class');
//console.log(obj.find('h3').text());
$('.flower-hidden').val(obj.find('h3').text());

});

//slick-current
$(window).load(function(){
	var nm= $('input[name=imcn]').val();
	//alert(nm)
	//alert($('input[name=imcn]').val());
	//alert();
	//var nm=('#imcnid').val();
	//alert(nm);
  $('.flower-carousel .item:eq('+nm+')').click().addClass('newimg');
  // $('.slick-slide').find('.flower-car').addclass('newimg');
  $('.newimg').find('figure').prepend('<span><i    class="fa fa-check" aria-hidden="true" > </i></span>');
  $('.flower-hidden').val($('.newimg').find('h3').text());
});

jQuery(function($) {

    $(function() {
        ///TOP - toggle button
        var $header = $('#top-head');

        ///Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
        //Nav automatically close when you tap somewhere on #nav-conteiner
        $('#nav-container').click(function(){
            $header.toggleClass();
        });
    });


    //smooth scroll
    $(function(){
        $('a[href^=#]').click(function(){
            //scroll duration (m seconds)
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });
});

var fadein_tween = TweenMax.to('#fadein-trigger > div', .375,{ opacity: 1 });
var fadeout_tween = TweenMax.to('#fadein-trigger > div', .375,{ opacity: 0 });

//activate scrollmagic
var controller = new ScrollMagic.Controller();

var fadein_scene = new ScrollMagic.Scene({
  triggerElement: '#fadein-trigger',
  reverse: true
})
.setTween(fadein_tween)
.addTo(controller);

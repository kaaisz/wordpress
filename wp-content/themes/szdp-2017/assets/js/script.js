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

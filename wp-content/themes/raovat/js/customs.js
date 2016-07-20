(function($){
    $(document).ready(function() {
        // $(".txtEditor").editor();
        $(".js-qc-scroling").scrollToFixed({
            marginTop: $('.navbar-fixed-top-custom').outerHeight(),
            limit: function() { return $(".footer").offset().top - $(".js-qc-scroling").outerHeight(true); },
            removeOffsets: true
          });
        $('.navbar-fixed-top-custom').scrollToFixed({
          zIndex: 9999,
          // preFixed: function() { $(this).addClass('navbar-fixed-top'); },
        });

        $('.san_pham_moi_index .thumbnail').matchHeight();
        $('.footer-height').matchHeight();

        go_url = function (url){
          window.location.href  = url;
        }
    });

})(jQuery);



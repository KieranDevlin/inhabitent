(function($) {
  $(document).ready(function() {
    const nav = $('#masthead');
    const navItem = $('.main-navigation');
    const logo = $('.home-logo');
    const featureImage = $('.header-feature-image');

    $(window).load(function() {
      if (featureImage.height() > 0) {
        nav.addClass('reverse-header');
        navItem.addClass('white-items');
        logo.attr(
          'src',
          '/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent-white.svg'
        );

        $(window).scroll(function() {
          if ($(this).scrollTop() > $(window).height()) {
            nav.removeClass('reverse-header');
            navItem.removeClass('white-items');
            logo.attr(
              'src',
              '/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent.svg'
            );
          } else {
            nav.addClass('reverse-header');
            navItem.addClass('white-items');
            logo.attr(
              'src',
              '/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent-white.svg'
            );
          }
        });
      }
    });
  });
})(jQuery);

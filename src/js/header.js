$(".button-collapse").sideNav();

    // Custom scrollbar init
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);


    //Preloader
    $(window).preloader({

      // preloader selector
      selector: '#preloader',

      // Preloader container holder
      type: 'document',

      // 'fade' or 'remove'
      removeType: 'fade',

      // fade duration
      fadeDuration: 750,

      // auto disimss after x milliseconds
      delay: 500
      
    });
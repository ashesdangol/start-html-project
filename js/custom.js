$(document).ready(function(){

  function navigation(){
    $('nav').on('click','.navbar-toggler', function(){
      $(this).closest('nav').find('#navbarNav').toggleClass('open-nav');
      $(this).toggleClass('x');
      $('html, body').toggleClass('hide-overflow');
    });

    $('nav').on('click','.nav-item', function(){
      $(this).closest('.navbar-nav').find('.active').removeClass('active');
      $(this).addClass('active');
    });

    $('nav').on('click','.nav-item', function(){
      var ashes=$('.nav_main--wrapper').find('.open-nav');
      if(ashes.length>0){
        $( ".navbar-toggler" ).trigger( "click" );
      }
    });

    window.addEventListener('resize', function () {
      var docSize=$(document).width();
      if(docSize>991){
        $('nav').find('#navbarNav').removeClass('open-nav');
        $('nav').find('.navbar-toggler').removeClass('x');
        $('body').removeClass('hide-overflow');
      }
    });
  }
  function onScroll_hidemenu() {
      var lastScrollPosition=0;
      $(document).on('scroll', function(){
        var currentScrollPosition=$(this).scrollTop();
        if(currentScrollPosition > lastScrollPosition){

          $(this).find('nav').removeClass('show-this');
          $(this).find('nav').addClass('hide-this');
          $(this).find('body').addClass('hide-padding');

        }else{
          $(this).find('body').removeClass('hide-padding');
          $(this).find('nav').removeClass('hide-this');
          $(this).find('nav').addClass('show-this');
        }
        lastScrollPosition=currentScrollPosition;
      })

  }
  navigation();
  onScroll_hidemenu();

});

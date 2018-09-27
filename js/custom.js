$(document).ready(function(){
  $('nav').on('click','.navbar-toggler', function(){
    $(this).closest('nav').find('#navbarNav').toggleClass('open-nav');
    $('body').toggleClass('hide-overflow');
  });

  $('nav').on('click','.nav-item', function(){
    $(this).closest('.navbar-nav').find('.active').removeClass('active');
    $(this).addClass('active');
  });


});

(function($){
  $(document).ready(function(){
    /* MENU RESPONSIVE */
    $('#main-menu ul.menu').prepend('<div id="fist-item-responsive"><div class="menu-disable">z</div></div>');

    $('#logo').clone().prependTo($('#fist-item-responsive'));
    $('#main-menu>ul ul').before('<div id="icon-up-down" class="icon-sub icon-close"></div>');
    $('#menu-icon, .menu-disable').on('click',function(){
      if($("#main-menu .menu").hasClass("menu-open")){
        $("#main-menu ul.menu").removeClass("menu-open");
      } else {
        $("#main-menu ul.menu").addClass("menu-open");
      }
    });
    $(".icon-sub").on('click',function(){
      if ($(this).hasClass("icon-close"))
      {
        $(this).parent().addClass("submenu-open");
        $(this).addClass("icon-open");
        $(this).removeClass("icon-close");
      } else {
        $(this).parent().removeClass("submenu-open");
        $(this).removeClass("icon-open");
        $(this).addClass("icon-close"); 
      }
    });
    /* SCROLL */
    var exp = 1;
    $(window).on('scroll', function(event) {
      var cur_pos = $(this).scrollTop();
      if (cur_pos > 35 && exp==1) {
        $("#elemento").css("propiedad",'valor');
        exp = 0;
      }
      if (cur_pos < 35 && exp==0) {
        $("#elemento").css("propiedad",'');
        exp = 1;
      }
    });
  });
}(jQuery));

jQuery(document).ready(function(){
 
  $(".contentHover").hover(
    function() {
      $(this).children(".content").fadeTo(200, 0.25).end().children(".hover-content").fadeTo(200, 1).show();
    },
    function() {
      $(this).children(".content").fadeTo(200, 1).end().children(".hover-content").fadeTo(200, 0).hide();
    });
  if($(window).width() <800){
    $(".mbmenu ul").addClass("flexnav");
    $(".mbmenu ul").attr("data-breakpoint","800");
  }

  $(function() {
    $(".flexnav").flexNav();
  });
  
});



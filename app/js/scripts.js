$("#hamburger").on("click", function(){
  $("body").toggleClass('no-move');
  $(this).toggleClass("active");
  $("header").toggleClass('active');

  $(".main-navigation a").click(function(){
    $("header, #hamburger").removeClass('active');
  });
});

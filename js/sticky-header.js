$(document).ready(function() {

  $(window).on("scroll", function() {
    var fromTop = $("body").scrollTop();
    $('.sticky').show("down", (fromTop > 800));

  });

});
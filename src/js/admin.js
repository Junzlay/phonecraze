

$(document).ready(function() {




  $(".view-all-product").click(function(){
    $(this).addClass("sub-active")
    $("#view_books").show()
    $("#dashboard").hide()
  })








  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });

  
$(".add-product").click(function(){
    $(this).addClass("sub-active")
    $("#dashboard").hide()
  $("#add-product").show();
})
  

});
$(document).ready(function(){
    $(".popout .btn").click(function() {
        $(this).toggleClass("active");
        $(this).closest(".popout").find(".panel").toggleClass("active");
    });
    $(document).click(function() {
        close();
    });

    $('.close').click(function() {
        close();
    });

    function close(){
        $(".popout .panel").removeClass("active");
        $(".popout .btn").removeClass("active");
    }
    $(".popout .panel").click(function(event) {
        event.stopPropagation();
    });
    $(".popout .btn").click(function(event) {
        event.stopPropagation();
    });
})
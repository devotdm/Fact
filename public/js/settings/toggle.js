$(document).ready(function() {

    $('#showDiv').click(function() {
        $(this).toggleClass( "active" );
        if ($(this).hasClass("active")) {
            $(this).text("Cacher la documentation");
        } else {
            $(this).text("Afficher la documentation");
        }
    });

});
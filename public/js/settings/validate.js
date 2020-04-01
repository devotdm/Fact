$(document).ready(function () {

    $("#form6").submit(function (event){
        var email = $("#email").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

        if(email == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".email_").hasClass("d-none"))
                $(".email_").toggleClass("d-none");
        }
        else {
            if(!$(".email_").hasClass("d-none"))
                $(".email_").toggleClass("d-none");
            if(email != "" && !pattern.test(email)){
                event.preventDefault();
                $('.scroll-to-top').click();
                if($(".email").hasClass("d-none"))
                    $(".email").toggleClass("d-none");
            } else {
                if(!$(".email").hasClass("d-none"))
                    $(".email").toggleClass("d-none");
            }
        }
    });
    
     $("#form7").submit(function (event){
        var raison = $("#raison option:selected").val();
        var pass = $("#pass").val();

        if(raison == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".raison").hasClass("d-none"))
                $(".raison").toggleClass("d-none");
        } else {
            if(!$(".raison").hasClass("d-none"))
                $(".raison").toggleClass("d-none");
        }
        if(pass == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".pass").hasClass("d-none"))
                $(".pass").toggleClass("d-none");
        } else {
            if(!$(".pass").hasClass("d-none"))
                $(".pass").toggleClass("d-none");
        }
    });

});
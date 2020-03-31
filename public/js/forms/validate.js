$(document).ready(function () {

    $("#form1").submit(function (event){
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var email = $("#email").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
        if(nom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".nom").hasClass("d-none"))
                $(".nom").toggleClass("d-none");
        } else {
            if(!$(".nom").hasClass("d-none"))
                $(".nom").toggleClass("d-none");
        }
        if(prenom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".prenom").hasClass("d-none"))
                $(".prenom").toggleClass("d-none");
        } else {
            if(!$(".prenom").hasClass("d-none"))
                $(".prenom").toggleClass("d-none");
        }
        if(email != "" && !pattern.test(email)){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".email").hasClass("d-none"))
                $(".email").toggleClass("d-none");
        } else {
            if(!$(".email").hasClass("d-none"))
                $(".email").toggleClass("d-none");
        }
    });

        $("#form2").submit(function (event){
        var nom = $("#nom_").val();
        var prenom = $("#prenom_").val();
        var email = $("#email_").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
        if(nom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".nom_").hasClass("d-none"))
                $(".nom_").toggleClass("d-none");
        } else {
            if(!$(".nom_").hasClass("d-none"))
                $(".nom_").toggleClass("d-none");
        }
        if(prenom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".prenom_").hasClass("d-none"))
                $(".prenom_").toggleClass("d-none");
        } else {
            if(!$(".prenom_").hasClass("d-none"))
                $(".prenom_").toggleClass("d-none");
        }
        if(email != "" && !pattern.test(email)){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".email_").hasClass("d-none"))
                $(".email_").toggleClass("d-none");
        } else {
            if(!$(".email_").hasClass("d-none"))
                $(".email_").toggleClass("d-none");
        }
    });
    
     $("#form3").submit(function (event){
        var nom = $("#nom").val();
        if(nom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".nom").hasClass("d-none"))
                $(".nom").toggleClass("d-none");
        } else {
            if(!$(".nom").hasClass("d-none"))
                $(".nom").toggleClass("d-none");
        }
    });
    
    $("#form4").submit(function (event){
        var nom = $("#destinataire option:selected").val();
        if(nom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".dest").hasClass("d-none"))
                $(".dest").toggleClass("d-none");
        } else {
            if(!$(".dest").hasClass("d-none"))
                $(".dest").toggleClass("d-none");
        }
    });
    
    $("#form5").submit(function (event){
        var nom = $("#destinataire_ option:selected").val();
        if(nom == ""){
            event.preventDefault();
            $('.scroll-to-top').click();
            if($(".destf").hasClass("d-none"))
                $(".destf").toggleClass("d-none");
        } else {
            if(!$(".destf").hasClass("d-none"))
                $(".destf").toggleClass("d-none");
        }
    });

});
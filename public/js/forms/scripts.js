$(document).ready(function () {

    $("#remise").keyup(function(){
        var v = $(this).val()
        $("#remise_span").text(v);
    });
    
    $('#tva_check').change(function(){
        if($(this).is(':checked')){
            $('.ltva').prop('disabled', false);
            $('.tva_label').text('TVA applicable');
        }
        else {
            $('.ltva').prop('disabled', true);
            $('.ltva').val("");
            $('.tva_label').text('TVA non applicable');
        }
    });

    var new_data = $('.line').clone();
    $('#btn').click(function(e){
        e.preventDefault();
        new_data.appendTo(this).insertBefore('.div_ajout');
        $('.container-fluid').each(function(){
            new_data = $('.line:last', this).clone();
        });

        for (var $i = 0; $i < $('.line').length; $i++) {
            var $cmp = $i+1;
            $('.nbr').eq($i).text($cmp);
        }
    });

    //
    //  $(".inp").keyup(calcLigne);

    //    
    //    function calcLigne($n) {
    //        var p = $(".inp").index(this);
    //        var $qt = parseFloat($(".line").eq($n).find(".qtity").val()) , $ht = parseFloat($(".line").eq($n).find(".ht").val()) , $tva = parseFloat($(".line").eq($n).find(".tva").val()) , $rdc = parseFloat($(".line").eq($n).find(".reduction").val());
    //        var $t = $qt*$ht;
    //        var $tf = $t+($t*$tva/100)-($t*$rdc/100);
    //        $(".total_ht").val($t);
    //        $(".total_ttc").val($tf);
    //    }

    //    $('.c_ligne').click(function(e){
    //        e.preventDefault();
    //        $(this).parent().parent().remove();
    //
    //        // for (var $i = 0; $i < $('.line').length; $i++) {
    //        //     var $cmp = $i+1;
    //        //     $('.nbr').eq($i).text($cmp);
    //        // }
    //    });
});
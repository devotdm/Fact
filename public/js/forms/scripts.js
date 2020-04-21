$(document).ready(function () {

    $('#tva_check').change(tvaAppli);

    function tvaAppli(){
        if($("#tva_check").is(':checked')){
            $('.ltva').prop('disabled', true);
            $('.ltva').val('0');
        }
        else {
            $('.ltva').prop('disabled', false);
            $('.ltva').val('20');
        }
    }

    function nbrSpan(){
        for (var i = 0; i < $('.line').length; i++) {
            var $cmp = i+1;
            $('.nbr').eq(i).text($cmp);
        }
    }

    function closeAbility(){
        if($('.line').length == 1){
            if(!$('.c_ligne').hasClass('disabled'));
            $('.c_ligne').addClass('disabled');
        }
        else {
            if($('.c_ligne').hasClass('disabled'))
                $('.c_ligne').removeClass('disabled');
        }
    }


    function closeLine(event){
        event.preventDefault();
        $(this).parent().parent().remove();

        nbrSpan();
        closeAbility();
    }

    function duplicateLine(event){
        event.preventDefault();
        var line = $(this).parent().parent();
        var new_line = line.clone();
        new_line.appendTo('.container-fluid').insertAfter(line);

        nbrSpan();
        closeAbility();

        $('.c_ligne').click(closeLine);
        
        $('.d_ligne').click(duplicateLine);
    }

    var new_data = $('.line').clone();
    $('#btn').click(function(e){
        e.preventDefault();
        new_data.appendTo(this).insertBefore('.div_ajout');
        $('.container-fluid').each(function(){
            new_data = $('.line:last', this).clone();
        });
        tvaAppli();

        nbrSpan();
        closeAbility();

        $('.c_ligne').click(closeLine);
        
        $('.d_ligne').click(duplicateLine);
        
    });

    setInterval(calcLigne,500);

    function calcLigne() {
        var $tht = 0;
        var $tva_t = 0;
        for (var i = 0; i < $('.line').length; i++) {
            var $qt = parseFloat($(".qtity").eq(i).val());
            var $ht = parseFloat($(".ht").eq(i).val());
            var $tvap = parseFloat($(".tva").eq(i).val());
            var $rdp = parseFloat($(".reduction").eq(i).val());
            var $t = $qt*$ht;
            var $rdn = $t*$rdp/100;
            var $tvan = $t*$tvap/100;
            $t -= $rdn;
            var $tf = $t+$tvan;
            $(".total_ht").eq(i).val($t.toFixed(2));
            $(".total_ttc").eq(i).val($tf.toFixed(2));
            $tht += parseFloat($t);
            $tva_t += parseFloat($tvan);
        }
        var $rms = parseFloat($("#remise").val());
        $rms = $tht*$rms/100;
        var $htf = $tht - $rms;
        var $total = $htf + $tva_t;
        $("#totalht").val(($tht).toFixed(2));
        $("#remise_span").val(($rms).toFixed(2));
        $("#htfinal").val(($htf).toFixed(2));
        $("#tva_tot").val(($tva_t).toFixed(2));
        $("#total").val(($total).toFixed(2));
    }

       setInterval(function(){
           console.log($('.line').length);
       },500);


    $('.c_ligne').click(closeLine);
    
    $('.d_ligne').click(duplicateLine);
    
    //setInterval(nbrSpan,500);
    setInterval(closeAbility,500);


});
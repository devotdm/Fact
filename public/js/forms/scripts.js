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

    var new_data = $('.line').clone();
    $('#btn').click(function(e){
        e.preventDefault();
        new_data.appendTo(this).insertBefore('.div_ajout');
        $('.container-fluid').each(function(){
            new_data = $('.line:last', this).clone();
        });
        tvaAppli();

        for (var $i = 0; $i < $('.line').length; $i++) {
            var $cmp = $i+1;
            $('.nbr').eq($i).text($cmp);
        }
    });

    setInterval(calcLigne,500);

    function calcLigne() {
        var $tht = 0;
        var $tva_t = 0;
        for (var $i = 0; $i < $('.line').length; $i++) {
            var $qt = parseFloat($(".qtity").eq($i).val());
            var $ht = parseFloat($(".ht").eq($i).val());
            var $tvap = parseFloat($(".tva").eq($i).val());
            var $rdp = parseFloat($(".reduction").eq($i).val());
            var $t = $qt*$ht;
            var $rdn = $t*$rdp/100;
            var $tvan = $t*$tvap/100;
            $t -= $rdn;
            var $tf = $t+$tvan;
            $(".total_ht").eq($i).val($t);
            $(".total_ttc").eq($i).val($tf);
            $tht += parseFloat($t);
            $tva_t += parseFloat($tvan);
        }
        var $rms = parseFloat($("#remise").val());
        $rms = $tht*$rms/100;
        var $htf = $tht - $rms;
        var $total = $htf + $tva_t;
        $("#totalht").text(($tht).toFixed(2));
        $("#remise_span").text(($rms).toFixed(2));
        $("#htfinal").text(($htf).toFixed(2));
        $("#tva_tot").text(($tva_t).toFixed(2));
        $("#total").text(($total).toFixed(2));
    }

    //        $('.c_ligne').click(function(e){
    //            e.preventDefault();
    //            $(this).parent().parent().remove();
    //    
    //            // for (var $i = 0; $i < $('.line').length; $i++) {
    //            //     var $cmp = $i+1;
    //            //     $('.nbr').eq($i).text($cmp);
    //            // }
    //        });
});
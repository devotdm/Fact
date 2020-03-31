$(document).ready(function() {

    showNum();

    $(".codes").change(showNum);

    $("#taille").keyup(showNum);
    
    $("#taille").change(showNum);

    function showNum(){
        var c1 = makeCmp($("#code1"));
        var c2 = makeCmp($("#code2"));
        var c3 = makeCmp($("#code3"));
        var s = c1+c2+c3;
        $('#res').val(s);
    }

    function makeCmp(el){
        var c = el.val();
        if(el[0].selectedIndex == 2){
            var t = parseFloat($("#taille").val());
            var dif = t - c.length;
            var n = "";
            while(dif>0){
                n += "0";
                dif--;
            }
            c = n + c;
        }
        return c;
    }

});
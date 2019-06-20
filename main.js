$(function () {
    $("#Redes").click(function () {
        if ($(this).is(":checked")) {
            $("#CardRedes").show();
            $("#vistaPrevia").append('<map name="redes" id="mapeo"><area alt="instagram" shape="rect" coords="34,1,54,14" href="https://www.instagram.com/cuencadelplata"><area alt="twitter" shape="rect" coords="12,2,32,14" href="https://www.twitter.com/cuencadelplata"><area alt="facebook" shape="rect" coords="-6,2,11,14" href="https://www.facebook.com/cuencadelplata"><area alt="youtube" shape="rect" coords="58,3,76,13" href="https://www.youtube.com/cuencadelplata"></map>');
            //$("#AddPassport").hide();
        } else {
            $("#CardRedes").hide();
            $("#mapeo").remove();
           // $("#AddPassport").show();
        }
    });
});
 
 
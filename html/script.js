$(document).ready(function () {

//    $(".divs_items h2").each(function(){
//        alert($(this).html());
//    });

    $("#ipt_search").keyup(function(){
        var buscado = $(this).val();
        buscado = buscado.toUpperCase();
        $.each($(".divs_items"),function(){
            var cadena = $(this).attr("title");
            cadena = cadena.toUpperCase();
            if(cadena.indexOf(buscado)===-1){
                $(this).hide(500);
            } else{
                $(this).show(500);
            }
        });
    });
});
(function(){
    $('.btn-show').on('click', function(){
        $('.container').toggleClass('show-border');
        $('.element').toggleClass('show-border');
    });
})();

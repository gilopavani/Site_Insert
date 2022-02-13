$(function () {
    $("#chkPassport").click(function () {
        if ($(this).is(":checked")) {
            $("#dvPassport").show();
        } else {
            $("#dvPassport").hide();
        }
    });
});

if($("#pesquisa").val()== ''){
    $.post('proc_pesq_user.php', function(retorna){
        //Mostra dentro da ul os resultado obtidos 
        $("#resultado").html(retorna);
    });
}
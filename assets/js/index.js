$(document).ready(function () {
    $('.carousel').carousel({interval: 4000})
})

$(document).ready(function(){
$('.edit-movie').click(function(){
    /*Save Information about the row, we pretend to edit */
        $id=$('.id-movie:eq('+$(this).val() + ')').html();
        $title=$('.title-movie:eq('+$(this).val() + ')').html();
        $body=$('.body-movie:eq('+$(this).val() + ')').html();
        $rating=$('.rating-movie:eq('+$(this).val() + ')').html();
    
        $('#id_filme').val($id);
        $('#titulo_filme').val($title);
        $('#descricao_filme').val($body);
        $('#aval_filme').val($rating);

});
});
$(document).ready(function(){
$('.edit-serie').click(function(){
    /*Save Information about the row, we pretend to edit */
        $id=$('.id-series:eq('+$(this).val() + ')').html();
        $title=$('.title-series:eq('+$(this).val() + ')').html();
        $body=$('.body-series:eq('+$(this).val() + ')').html();
        $rating=$('.rating-series:eq('+$(this).val() + ')').html();
    
        $('#id_serie').val($id);
        $('#titulo_serie').val($title);
        $('#descricao_serie').val($body);
        $('#aval_serie').val($rating);

});
});
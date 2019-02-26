
$('.radio_btn label').click(function(){

    var form_price = $(this).attr('data-price');

    $('#form_price').text(form_price);

});
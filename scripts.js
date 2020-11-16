$(document).ready(function() {
    var total = $('.total').html();
    $('.product').on('change', 'input.qty', function() {

        var precioProducto = $(this).data('price');
        var qty = $(this).val();
        var newTotal = precioProducto * qty;

        $(this).parent('.product').find('.subtotal').text(parseFloat(newTotal));

        calcularTotal();
    });

    function calcularTotal() {

        var suma = 0;
        $('.subtotal').each(function() {
            suma += parseFloat($(this).text());
        });


        $('.precioTotal').html(suma);
        console.log(suma);
    };


    $(".eliminar").click(function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');

        $.post('eliminar.php', {
            Id: id
        }, function(a) {
            console.log(a);
            if (a) {
                $(this).closest('.product').remove();
                //alert('Si se borro');
                //location.href='./carritodecompras.php'
            }
        });

    });

    $('.agregarProducto').on('click',function(e){
        e.preventDefault();
        alert('si lo tomo');
        var id = $(this).attr('data-id');

        $.post('acciones/agregar.php', {
            id: id
        }, function(a) {
            console.log(a);
            if (a) {
               alert('El producto se agrego a tu carrito');
            }
        });
    })
});
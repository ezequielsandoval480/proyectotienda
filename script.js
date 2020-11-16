$(document).ready(function(){
  
  //Capturo el valor parcial del subtotal
  var total = $('.total').html();
  
  //Opera sobre cada producto
  $('.product').on('change','input.qty',function(){
    //ejecuto esto cuando typeo 
    var precioProducto = $(this).data('price');
    var qty = $(this).val();
    
    var newTotal = precioProducto * qty;
    
    $(this).parent('.product').find('.subtotal').text(parseFloat(newTotal));
     
    //Ejecuto la funcion
    calcularTotal();
  }); 
  
  //Calculo sobre todos los subtotales
 
  
function calcularTotal(){
  //Sumar todos los valores de subtotal
  var suma = 0;
  $('.subtotal').each(function(){
    suma += parseFloat($(this).text());
});
  
  //Imprimo ese valor en el span total global
  $('.precioTotal').html(suma);
  console.log(suma);
};

  });

  

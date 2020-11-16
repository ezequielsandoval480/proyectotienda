var inicio=function() {
    $(".eliminar").click(function(e){
        e.preventDefault();
        var id=$(this).attr('data-id');
        alert(id);
  }

  $(document).on('ready',inicio);
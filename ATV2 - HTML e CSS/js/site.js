$( function() {
  $( "#dialog" ).dialog({
      autoOpen: false,
      modal: true,
      buttons: {
        "Confirmar": function() {
            window.location.href='lista.html';
                   return false;
        },
        Cancelar: function() {
          $( this ).dialog( "close" );
        }
      }
    });

  $("form").serialize();

 $( "form" ).on( "submit", function() {
      $( "#dialog" ).dialog( "open" );
      
      return false;
    });
  } );
$('.crearCargo').on('click', function (e) {
  var idCard = $("#idCard").val();
  var email = $('#email').val();

  $.ajax({
         type: 'POST',
         url: 'http://localhost:8083/cargo_recurrente/culqi-php-develop/examples/02-create-charge.php',
         data: { idCard , email},
         datatype: 'json',
         success: function(data) {
           var result3 = "";
             if(data.constructor == String){
                 result3 = JSON.parse(data);
             }
             if(data.constructor == Object){
                 result3 = JSON.parse(JSON.stringify(data));
             }
           if(result3.object === 'charge'){
            alert('La venta ha sido exitosa con el siguiente ID: ' + result3.id);
           }
           if(result3.object === 'error'){
               alert(result3.merchant_message);
           }
         },
         error: function(error) {
           alert(error)
         }
      });
});

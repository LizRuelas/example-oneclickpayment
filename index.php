<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Culqi Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style media="screen">
      #response {
        background-color: #9ED9EA
      }
      #response2 {
        background-color: #9ED9EA
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4" >
          <div>
            <h1>Registrate</h1><br><br>
            <form>
              <div>
                <label>address:</label>
                <input type="text" class="form-control" id="address" value="lima 2443">
              </div>
              <div class="form-group">
                <label>address_city:</label>
                <input class="form-control" id="address_c" value="arequipa">
              </div>
              <div class="form-group">
                <label>country_code:</label>
                <input class="form-control" id="country" value="PE">
              </div>
              <div class="form-group">
                <label>email:</label>
                <input class="form-control" id="email">
              </div>
              <div class="form-group">
                <label>first_name:</label>
                <input class="form-control" id="f_name" value="rual">
              </div>
              <div class="form-group">
                <label>last_name:</label>
                <input class="form-control" id="l_name" value="gomez">
              </div>
              <div class="form-group">
                <label>phone_number:</label>
                <input class="form-control" id="phone">
              </div>
              <a id="crearCustomer" class="btn btn-primary btn-lg" href="#" >Crear Customer</a>
            </form>
            <br/><br/>
            <div class="panel panel-default" id="response-panel">
              <div class="panel-heading">Response</div>
              <div class="panel-body" id="response">
              </div>
            </div>
            <!-- <div id="check" style="width: 400px; height: 600px">

            </div> -->
          </div>
        </div>
        <div class="col-md-4" >
          <div>
            <h1>Guarda tu tarjeta</h1><br><br>
            <a id="crearCard" class="btn btn-primary btn-lg" href="#">Crear Card</a><br><br>
            <input id="idCustomer" class="form-control" type="text" name="" value=""><br><br>
            <div class="panel panel-default" id="response-panel2">
              <div class="panel-heading">Response</div>
              <div class="panel-body" id="response2">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" >
          <div>
            <h1>Realiza tu compra</h1><br><br>
            <input id="idCard" class="form-control" type="text" name="" value="">
            <div class="">
              <img src="img/scooter.jpg" alt="" style="height:200px">
              <a  class="btn btn-primary btn-lg crearCargo" href="#">Crear Charge</a><br><br>
            </div><br><br>
            <div class="">
              <img src="img/xiaomi.jpg" alt="" style="height:200px">
              <a class="btn btn-primary btn-lg crearCargo" href="#">Crear Charge</a><br><br>
            </div><br><br>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://checkout.culqi.com/js/v3"></script>

    <script>
      Culqi.publicKey = '<?php echo($_ENV["PUBLIC_KEY"]); ?>';
    </script>
    
    <script type="text/javascript" src="js/crearCustomer.js" ></script>
    <script type="text/javascript" src="js/crearCard.js" ></script>
    <script type="text/javascript" src="js/crearCargo.js" ></script>
  </body>
</html>

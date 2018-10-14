<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Test Aivo</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="page-container">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <!-- Default form contact -->
              <form role="form" id ="formTwitter" method='post'  action='' name='datos' class="text-center border border-light p-4">

                  <p class="h4 mb-4">New Twitter</p>

                  <!-- Reply -->
                  <label>Reply</label>
                  <select id="user" name="user" class="browser-default custom-select mb-4" required>
                      <option value="">Choose option</option>
                  </select>

                  <!-- Message -->
                  <div class="form-group">
                      <textarea class="form-control rounded-0" id="text" name="text" rows="1" placeholder="Message" required="required"></textarea>
                  </div>

                  <!-- Send button -->
                  <button class="btn btn-info btn-block" type="submit">Send</button>

              </form>
              <!-- Default form contact -->
        </div>
        <div class="col-md-6">
            <!-- Default form contact -->
              <div class="text-center border border-light p-4">

                  <p class="h4 mb-4">Show Results</p>

                  <!-- Count -->
                  <label>Last Tweets</label>

                  <div class="form-group">
                      <input type="number" class="form-control rounded-0" id="count" name="count" min="1" max="10" step="1" value="1" required="required"></input>
                  </div>

                  <!-- Send button -->
                  <button class="btn btn-info btn-block" onclick="consultaTwits();">Show</button>

              </div>
              <!-- Default form contact -->
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea class="form-control rounded-0" id="result" name="result" rows="14"></textarea>
            </div>
        </div>
      </div>
      <div class='cargando'>
          <img src="img/load.gif" ><h3>Procesando ...</h3>
        </div>  
    </div>
</div>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Funciones -->
  <script type="text/javascript" src="js/funciones.js"></script>
  <script type"javascript">
      cargarDatos();
      cargaTwits();
  </script>
</body>

</html>

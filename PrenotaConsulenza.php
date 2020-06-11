<?php include 'config.php'; ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <!--<link rel="stylesheet" href="./Stile.css" > -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <title>Prenota Consulenza</title>
  </head>
  <body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><span class="badge badge-info">Studio di Consulenza del Lavoro</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Chi Siamo? <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#servizio">Servizi </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Prezzi</a>

        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Contatti </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Prenota una Consulenza </a>
        </li>
      </ul>
         <a class="btn btn-outline-info" href="accedi.php">Area Riservata</a>
    </div>
  </nav>



  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Consulenze.jpg" class="d-block w-100" style ="height: 600px" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h1>  <a class="btn-lg btn-danger" href="#Consulenzaform">Prenota la tua Consulenza</a></h1>
      <h3>  <span class="badge badge-light">Contattaci per chiedere maggiori informazioni e per fissare un appuntamento.
      <br>  Il nostro team sarà lieto di illustrati nel dettaglio ciò che possiamo offrirti<br> e ti guiderà nella ricerca della soluzione adatta alla tua impresa.</span> </h3>

      </div>
    </div>

  </div>

  </div>

  <div class="container">       <!--Container CSS-->

    <div class="row">
      <div class="col-sm">

<a name="Consulenzaform"></a>
  <form class="needs-validation" action="PrenotaConsulenza.php" method="post" ><!--novalidate-->
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom01">Nominativo</label>
<input type="text" class="form-control" id="validationCustom01" name="nominativo" value=" " required>

</div>

<!--NomeAzienda-->
<div class="col-md-6 mb-3">
<label for="validationCustom02">Data Appuntamento :</label>
<input type="text" class="form-control" id="validationCustom02" name="datappuntamento"value="" required>

</div>
</div>

<div class="form-row">

<!--Ragione sociale-->
<div class="col-md-6 mb-3">
<label for="validationCustom03">Orario Appuntamento :</label>
<input type="text" class="form-control" id="validationCustom03" name="orarioappuntamento" required>
<div class="invalid-feedback">

</div>
</div>

<div class="form-group">
 <label for="exampleFormControlTextarea1">Motivazione : </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivazione"></textarea>
</div>



<!--numtelefono-->

<div class="col-md-3 mb-3">
<label for="validationCustom05">Numero di Telefono :</label>
<input type="text" class="form-control" id="validationCustom05" name="numtelefono" required>
<div class="invalid-feedback">

</div>
</div>

<!--email-->
<div class="col-md-3 mb-3">
<label for="validationCustom05">Email :</label>
<input type="text" class="form-control" id="validationCustom05" name="email" required>
<div class="invalid-feedback">

</div>
</div>



<!--codfisc o partiva-->

<div class="col-md-3 mb-3">
<label for="validationCustom05">Codice Fiscale</label>
<input type="text" class="form-control" id="validationCustom05" name="CodFiscale">
<div class="invalid-feedback">

</div>
</div>

<div class="col-md-3 mb-3">
<label for="validationCustom05">PartitaIva</label>
<input type="text" class="form-control" id="validationCustom05" name="partitaiva" >
<div class="invalid-feedback">

</div>
</div>


<div class="col-8 col-sm-6">                                                           <!--col-md-3 mb-3" per vedere se é ben allineato-->
<input type="submit" class="btn btn-outline-danger" value="Invia" name="invia">                <!--Submit-->
</div>
</div>
</form>

<?php

if (isset($_POST['invia'])){
	$DataAppuntamento=$_POST["datappuntamento"];
	$OrarioAppuntamento=$_POST["orarioappuntamento"];
	$Motivazione=$_POST["motivazione"];
	$Nominativo=$_POST["nominativo"];
  $NumTelefono=$_POST['numtelefono'];
	$Email=$_POST["email"];
	$CodFiscale=$_POST["CodFiscale"];
  $PartitaIVA=$_POST['partitaiva'];


	$query1="INSERT INTO Appuntamenti(DataAppuntamento, OrarioAppuntamento, Motivazione, Nominativo, NumTelefono, Email, CodFiscale, PartitaIVA) VALUES('{$DataAppuntamento}', '{$OrarioAppuntamento}', '{$Motivazione}', '{$Nominativo}', '{$NumTelefono}', '{$Email}', '{$CodFiscale}', '{$PartitaIVA}')";

	$risultato=@mysqli_query($conn,$query1);

}
?>



<div class="invalid-feedback">

</div>
</div>

</div>


<!--Controlli-->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>


</div>

</div>
</form>
</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

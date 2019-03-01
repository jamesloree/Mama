<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php include 'navbar.php';?>

        <div style="margin-bottom: 200px; padding-top: 100px;" class="container-fluid middle-services">
            
            <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum viverra elit, in volutpat massa bibendum at. Maecenas at elit nunc. Nam id augue vel lorem dignissim pretium. Sed sed lorem interdum, pretium nulla in, faucibus ipsum. Duis tincidunt purus lectus, non ultricies mauris imperdiet a. Duis ut risus non arcu consectetur pharetra.</p>
                      <div class="row">
                <div class="col-6">
                    <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col" for="email">Nombre y apellidos</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col" for="pwd">Teléfono</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col" for="pwd">Correo electrónico</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="">
    </div>
  </div>                     
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
                </div>
                <div class="col-6 ">
                    <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                </div>
            </div>
                </div>
            </div>
    </div>
    

        <?php include 'footer.php';?>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom JavaScript for this theme -->
            <script src="js/scrolling-nav.js"></script>

</body>

</html>
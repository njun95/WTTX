<?php
session_start();
include 'connection.php';
include 'header.php';
include 'coverage/gestionCOUV.php';
include 'capacity/gestionCAP.php';
if(isset($_SESSION['pwd']) && isset($_SESSION['hpwd'])){
if(password_verify($_SESSION['pwd'], $_SESSION['hpwd'])){
?>


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">WTTX PLANNING</a>
          </li>
          <li class="breadcrumb-item active">MAP- <?php  if(!isset($_SESSION["ProjectID"]) || empty($_SESSION["ProjectID"])) { echo " ";} else { echo $_SESSION["ProjectName"]; }  ?></li>
        </ol>

        <!-- Icon Cards-->
      

        <!-- Area Chart Example-->
        
        <div class="card mb-3" >
          <div class="card-header">
            Catography </div>
            <div class="card-body">
               <?php if(!isset($_SESSION["ProjectID"]) || empty($_SESSION["ProjectID"])) {
            echo "<p>pleae create a project </p><a href='projectform.php'>click here</a>";}
            else{?>
              <div id="googleMap" style="width:100%;height:400px;"></div>
              

<script>
function myMap() {
  var ville = "<?php echo $_SESSION['zonename'] ;?>";
var param = getZone(ville);
  var superficie = "<?php echo $_SESSION['zonesurfacearea'];?>";
  var cote = Math.sqrt(superficie);
  var lonMin = param[0] - cote/200, lonMax = param[0] + cote/200, latMin = param[1] - cote/200, latMax = param[1] + cote/200;
  console.log(lonMin+","+lonMax+","+latMin+","+latMax);
  
console.log("ok");
var mapProp= {
    center:new google.maps.LatLng(param[0],param[1]),
    zoom:13,
};
var nbsite =12;
var nbligne = Math.sqrt(nbsite);
var distanceenode = (lonMax - lonMin)/nbligne;

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker;
var myCity;
  var lon = lonMin, lat = latMin, control = 0;
  //echo "<table  class='table table-bordered table-striped table-condensed'>";
             //echo "<tr style='background-color:#2D2D2D'><th style='color:#F0F0F0'>SITE</th><th style='color:#F0F0F0'>Latitude</th><th style='color:#F0F0F0'>Longitude</th></tr>";
             document.write("latitude and longitudes of sites");
              
for(var i=0; i<nbsite;i++) {
  if(control>=nbligne) {
    lon += distanceenode;
    lat = latMin;
    control = 0;
  }
  var lonrand = getRandom(-0.0006,0.0006),latrand = getRandom(-0.0006,0.0006);
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(lon+lonrand,lat+latrand),
    map: map
  });
  myCity = new google.maps.Circle({
  center:new google.maps.LatLng(lon+lonrand,lat+latrand),
  radius:2.3*1000,
  strokeColor:"#0000FF",
  strokeOpacity:0.8,
  strokeWeight:2,
  fillColor:"#0000FF",
  fillOpacity:0.4,
  map:map
});
  lat += distanceenode;
  
  //document.write("<?php //echo "<table  class='table table-bordered table-striped table-condensed'>";echo"<tr>";echo "<td> </td>";echo "<td> lat </td>";echo "<td> </td>";echo "</tr>";echo "</table>";?>");
  control++;
  document.write("<table class='table table-bordered table-striped table-condensed'><tr>");
   document.write("<td> site0" + i + "</td>");
  document.write("<td>" + lon + "</td>");
  document.write("<td>" + lat + "</td>");
  document.write("</tr></table>");

       //echo "<td> site"i" </td>";
        //echo "<td> "lat"</td>";
        //echo "<td> "lon "</td>";
        //echo "<tr>";
      //echo "</table>";

  
}

google.maps.event.addListener(map, 'click', function(event) {
  placeMarker(map, event.latLng);
  });
}
function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}
function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() +
    '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);


}

function getZone(ville) {
  ville = ville.toLowerCase();
  console.log(ville);
  ville = ville.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
  ville = ville.replace(/a©/g, "e");
  if(ville.match(/^yaounde/)) {
      console.log(ville);
    var ret = [3.8476786220878267,11.50217056274414];
    return ret;
  }
  if(ville.match(/^nomayos/)) {  
      console.log(ville); 
    var ret = [3.790096767510023,11.440622505199258];
    return ret;
  }
  if(ville.match(/^douala/)) {
      console.log(ville);
    var ret = [4.050619594277706,9.76786494255066];
    return ret;
  }
  if(ville.match(/^bafoussam/)) {
      console.log(ville);
    var ret = [5.480282520724558,10.428621768951416];
    return ret;
  }
  if(ville.match(/^bafang/)) {
      console.log(ville);
    var ret = [5.158479368481802,10.18733024597168];
    return ret;
  }
  console.log("Erreur");
  return null;
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByMt8TBAbsJWHDDh_FBFH2303Vw2xDcsw&callback=myMap"></script> 
         <?php } ?>

          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    
        
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'footer.php'; 
 }
}
 else
{
  echo "<script language='JavaScript'> document.location.replace('index.php'); </script>";
  session_destroy();
}


<?php
include('./config/CDb.php');
$db = new CDb;
$id =    $db->Insert("Insert into `frm_empresa`(
           `rfc` , `razon_social`, `usuario_creacion`,  `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) values
           ( :rfc , :razon_social, :usuario_creacion, :fecha_creacion, :usuario_modificacion, :fecha_modificacion )", [
             'rfc' => 'AAAA',
             'razon_social' => 'Hola',
             'usuario_creacion'=>'Admin',
             'fecha_creacion'=>'2021-03-10',
             'usuario_modificacion'=>' ',
             'fecha_modificacion'=>'2021-03-10'
    ]);

/* $db->Insert("Insert into `frm_empresa`
                ( `rfc`,`razon_social`,`nombre_comercial`,`direccion`,`estado`,`usuario_creacion`,`fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`)
                       values
                       (`:rfc`,
                        `:razon_social`,
                         `:nombre_comercial`,
                         `:direccion`,
                         `:estado`,
                         `:usuario_creacion`,
                         `:fecha_creacion`,
                         `:usuario_modificacion`,
                         `:fecha_modificacion`)",
                         [
                           'rfc' => ':rfcAAA',
                           'razon_social' =>'Hola',
                           'nombre_comercial' => 'Papeleria ZACARIAS',
                           'direccion' =>'No',
                           'estado' => 1,
                           'usuario_creacion' => 'admin',
                           'fecha_creacion' => '2016-03-06 19:49:34',
                           'usuario_modificacion' => 'admin',
                           'fecha_modificacion' => '2016-03-06 19:49:41'
                         ]); */

print_r(["id "=>$id]);
print_r($db->Select("Select * from frm_empresa"));

?>

<!DOCTYPE html>
<html lang="en">
<title>Cancun Music Fest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="#register" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTER</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
  <a href="#register" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REGISTER</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="../images/Cancun.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Cancun</h3>
      <p><b>The best events on the beach!</b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="../images/Spring-Break.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="../images/Mandala-Beach-Cancun-2.jpg" style="width:100%">
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="../images/the-city-cancun-festa.jpg" style="width:100%">
  </div>

  <!-- The Abou us Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="about">
    <h2 class="w3-wide">ABOUT US</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-opacity">Sport is to the body what music is to the hear and the true universal language is written on a staff and spoken with instruments.</p>
    <p class="w3-justify">We are a group of people who bring to your senses and your feelings the best moment, music is the element that cannot be missing in us and that is why we create the best musical events, Rock, Pop, R&B, Metal, Hip-Hop and Rap, Jazz and more, let us be part of your musical history enjoy the best moments in sound, animation and lights.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Jazz</p>
        <img src="/images/jazz.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:180px; height: 150px">
      </div>
      <div class="w3-third">
        <p>Rap</p>
        <img src="/images/rap.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:180px; height: 150px">
      </div>
      <div class="w3-third">
        <p>Pop</p>
        <img src="/images/pop.jpg" class="w3-round" alt="Random Name" style="width:150px">
      </div>
    </div>
  </div>

  <!-- The Register Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="register">
    <h2 class="w3-wide w3-center">REGISTER</h2>
    <p class="w3-opacity w3-center"><i>Event is free, enjoy your moment.!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Cancun Quintana Roo, MX<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +52 998 4992 593<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: cancunmusicfest@mail.com<br>
      </div>
      <div class="w3-col m6">

        <form id="testForm">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Last Name" required name="LastName">
            </div>

          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="How old are you?" required name="Years">
            </div>
            <div class="w3-half">
              <select class="w3-input w3-border" name="Country" id="Country" value="0">
                <option value="0">Favorite genre?</option>
                <option value="saab">Salas</option>
                <option value="opel">Rock</option>
                <option value="audi">Metal</option>
              </select>
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="Type your Favorite Music genre" required name="Other_genre">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="Favorite Band or Singer?" required name="Other_genre">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="Message">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <select class="w3-input w3-border" name="Country" id="Country" value="0">
                <option value="0">From which country you visit us?</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select>
            </div>
          </div>


          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
            </div>
          </div>
        </form>
          <button class="w3-button w3-black w3-section w3-right" onclick="postStuff()" >SEND</button>
      </div>
    </div>
  </div>

<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="/images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}


function postStuff(){
// Create our XMLHttpRequest object
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
// var url = "processForm.php";
var form = document.querySe('testForm');
var data = new FormData(form);

console.log(data);
var req = new XMLHttpRequest();
// req.send(data);
/*var fn = document.getElementById("fname").value;
var ln = document.getElementById("lname").value;
var vars = "firstname="+fn+"&lastname="+ln;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
document.getElementById("status").innerHTML = "processing..."; */
}

</script>

</body>
</html>

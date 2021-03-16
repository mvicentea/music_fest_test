<?php
include('Form.php');

/**
 * Tratamiento de las peticiones de metodos http seguros, permitiendo metodos idempotentes
 */
define('ALLOWEDMETHODS', ['PUT', 'PATCH', 'POST', "GET", "UPDATE"]);
$is_nginx = strpos(strtoupper($_SERVER['SERVER_SOFTWARE']), 'NGINX') !== false;

if(!function_exists('apache_request_headers') || $is_nginx)
{
    /**
     * Tratamiento de las peticiones de metodos http seguros, permitiendo metodos idempotentes
     */
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (in_array($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'], ALLOWEDMETHODS)) {
            $_SERVER['REQUEST_METHOD'] = $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'];
        }
    }
    
}
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
#assistant {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#assistant td, #assistant th {
  border: 1px solid #ddd;
  padding: 8px;
}

#assistant tr:nth-child(even){background-color: #f2f2f2;}

#assistant tr:hover {background-color: #ddd;}

#assistant th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #181918;
  color: white;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
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
    <a href="#assistant_list" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ASSISTANTS LIST</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
  <a href="#register" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REGISTER</a>
  <a href="#assistant_list" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ASSISTANTS LIST</a>
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

        <form id="testForm" method="post">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Last Name" required name="last_name">
            </div>

          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="number" placeholder="How old are you?" required name="years">
            </div>
            <div class="w3-half">
              <select class="w3-input w3-border" name="iddef_musical_genre" id="gener" value="0">
                <option value="0">Favorite genre?</option>
                <?php
                $data = $db->Select("SELECT * from def_musical_genre");
                foreach ($data as $valores):
                    echo '<option value="'.$valores["iddef_musical_genre"].'">'.$valores["name"].'</option>';
                endforeach;
                ?>
        
              </select>
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="(*Other) Type your Favorite Music genre" required name="other_music">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="Favorite Band or Singer?" required name="favorite_singer">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="email" placeholder="Email" required  name="email">
            </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <select class="w3-input w3-border" name="iddef_county" id="Country" value="0">
                <option value="0">From which country you visit us?</option>
                <?php
                $data = $db->Select("SELECT * from def_country");
                foreach ($data as $valores):
                    echo '<option value="'.$valores["iddef_county"].'">'.$valores["name"].'</option>';
                endforeach;
                ?>
              </select>
            </div>
          </div>

          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-large">
              <input class="w3-input w3-border" type="text" placeholder="Message" required name="note">
            </div>
          </div>
        </form>
          <button class="w3-button w3-black w3-section w3-right" onclick="send_req('event_resgister')" >SEND</button>
      </div>
    </div>
  </div>
  
  
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="assistant_list">
    <h2 class="w3-wide">ASSISTANT LIST </h2>
    <p class="w3-opacity"><i>Enjoy Music.!</i></p>
    <table id="assistant">
        <tr>
            <?php
            $data_assistant = $db->Select("SELECT name, last_name, years, note  from event_resgister");
            $header = array_keys($data_assistant[0]);
            foreach ($header as $valores):
                echo '<th>'.$valores.'</th>';
            endforeach;
            ?>
        </tr>
            <?php
            
            foreach ($data_assistant as $valores){
                echo '<tr>';
                foreach ($valores as $_row):
                    echo '<td>'.$_row.'</td>';
                endforeach;
                echo '<tr>';
            }
            
            ?>
    </table>
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
const url_base = window.location.origin;
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


function send_req(table){
    const form = document.querySelector('form');
    var data = getDataElementsForm(form, false);
    data.table = table;

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if( xml.readyState==4 && xml.status==200 ){
            alert("Successful registration");
        }
    };

    xml.open("POST", "Form.php", false);
    xml.setRequestHeader("Content-type", "application/json");
    xml.send(JSON.stringify(data));
}
/**
	* @author Manuel Vicente <manuel_vicente@outlook.com>
	* Funcion para obtener los valores de los elementos de un formulario
	* @param Object form. instancia del formualrio a enviar | !importante: el formulario definido
	* @param Boolean string. para retornar un STRING || JSON (default STRING)
	* @return STRING || JSON
	*/
	function getDataElementsForm(form, string) {
		var elements, element, value, json = {};
		elements = form.elements;
		for (var i = 0; i < elements.length; i++) {
			element = elements[i];
			if (element.name) {
				if (element.nodeName == 'INPUT' && element.type == 'radio') {
					var options = document.getElementsByName(element.name);
					for (var j = 0; j < options.length; j++) {
						if (options[j].checked) {
							value = options[j].value;
						}
					}
				} else if (element.nodeName == 'INPUT' && element.type == 'checkbox') {
					value = element.checked ? 1 : 0;
				} else {
					value = element.value;
				}

				json[element.name] = value;
			}
		}
		return string === undefined || string ? JSON.stringify(json) : json;
	}
</script>

</body>
</html>

<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.img{
  display: block;
    margin-left: auto;
    margin-right: auto
}
</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">ZEROFOTO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <?php
                    if(isset($_SESSION['id'])){
                ?>
                
      <a class="dropdown">
        <a href="portfolio.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" data-toggle="dropdown"><?php echo $_SESSION['username'];?> <span class="caret"></span></a>
        <div class="dropdown-menu">
            <a href="index.php?menu=profile" class="dropdown-item w3-button"><i class="fa fa-user"></i> Profile</a>
            <a href="index.php?menu=upload" class="dropdown-item w3-button"><i class="fa fa-envelope"></i> Upload</a>
            <a href="logout.php" class="dropdown-item">Logout</a>
            
        </div>
        <?php
                        }
                        else{
                    ?>
                    <a href="login.php" class="w3-bar-item w3-button">Login</a></li>
                    <a href="register.php" class="w3-bar-item w3-button">Register</a></li>
                    <?php
                        }
                    ?>
        </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>

  <?php
                    if(isset($_SESSION['id'])){
                ?>
                    <a href="portfolio.php" class="w3-bar-item w3-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name'];?></span>
                        
                    </a>
                        <a href="index.php?menu=profile" class="w3-bar-item w3-button active">Profile</a>
                        <a href="index.php?menu=upload" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Upload</a>
                        <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
                    
                
                    <?php
                        }
                        else{
                    ?>
                    <a href="login.php" class="w3-bar-item w3-button">Login</a>
                    <a href="register.php" class="w3-bar-item w3-button">Register</a>
                    <?php
                        }
                    ?>
      
</nav>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content">
  
  <!-- Photo grid -->
  <div class="w3-row w3-grayscale-min">
            <?php
                if(isset($_GET["menu"])){
                  $menu=$_GET["menu"];
              }
              else{
                  $menu="";
              }
              switch($menu){
                  case "profile":{
                      $page="profile.php";
                      break;
                  }
                  case "upload":{
                      $page="upload.php";
                      break;
                  }
                  case "show":{
                      $page="show.php";
                      break;
                  }
                  case "product":{
                    $page="product.php";
                    break;
                  }
                  case "dow":{
                    $page="dow.php";
                    break;
                  }
                  default:{
                      $page="main.php";
                  }
              }
                  include($page);

              ?>  
              </div>
</div>
</div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        
        <p> by <a href="https://www.facebook.com/ZERO-FOTO-1352021214888021/?epa=SEARCH_BOX" target="_blank">ZERO FO TO</a></p>
      </footer>
<script>
  
  function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<SCRIPT LANGUAGE="JavaScript">
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
// --> 
</script>
</body>
</html>

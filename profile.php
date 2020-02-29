<style>
  * {
  box-sizing: border-box;
}



/* Clearfix (clear floats) */
</style>
<br>
<br>
<input type="hidden" name="upname" value="<?php echo $_SESSION['name'];?>">
<!-- MAIN (Center website) -->
<div class="main">

<h1>PROFILE</h1>
<hr>

<h2><?php echo $_SESSION['name'];?></h2>
<?php

    $sql = "SELECT * FROM products ORDER BY id";
    $result = $conn->query($sql);
    if(!$result){
        echo "Error during data retrieval" . $conn->error;
    }
    else{
        //ดึงข้อมูล
        while($prd=$result->fetch_object()){
?>


  <div class="column nature">
    <div class="content">
    <img src="img/<?php echo $prd->picture ?>" alt="Norway" style="width:100%" class="w3-hover-opacity">
    <h4><?php echo $prd->name ?></h4>
    <input type="button" name="submit" value="Delete" class="w3-button w3-red"onClick="location.href='delete.php?pid=<?php echo $prd->id ?>'">
    </div>
  </div>


  <?php
  }
                }
            ?>
              </div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
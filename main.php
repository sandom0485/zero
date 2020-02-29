<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

</style>
<header class="w3-container w3-center w3-padding-32"><br>
    <h1><b>ZERO FOTO </b></h1>
    <!--<p>Free<span class="w3-tag">download</span></p>-->
    <hr>
    <div id="myBtnContainer">
    <button onclick="location.href='index.php?menu=show&category=1'" class="w3-button w3-black">1</button>
    <button onclick="location.href='index.php?menu=show&category=2'" class="w3-button w3-black">2</button>
    <button onclick="location.href='index.php?menu=show&category=3'" class="w3-button w3-black">3</button>
    <button onclick="location.href='index.php?menu=show&category=0'" class="w3-button w3-black">4</button>
</div>
  </header>
<!-- Header with full-height image -->

  
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
    <div class="w3-quarter">
    <div class="w3-display-container content">
      <img src="img/<?php echo $prd->picture; ?>" style="width:100%" onclick="onClick(this)" alt="Canoeing again" class="img">
          <div class="w3-display-middle w3-display-hover">

          <a href="index.php?menu=product&pid=<?php echo $prd->id; ?>">
          <?php
              if(isset($_SESSION['id'])){
          ?>
          <input type="button" name="submit" value="Buy now" class="w3-button w3-black"onClick="location.href='index.php?menu=product&pid=<?php echo $prd->id; ?>'">
          <?php
              }
          ?>
          </a>
          </div>
      </div>
</div>
  
    <?php
  }
                }
            ?>

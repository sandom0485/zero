<header class="w3-container w3-center w3-padding-32"><br>
    <h1><b>ZERO FOTO </b></h1>
    <p><span class="w3-tag">download</span></p>
    <hr>
    <div id="myBtnContainer">
    <button onclick="location.href='index.php?menu=show&category=1'" class="w3-button w3-black">1</button>
    <button onclick="location.href='index.php?menu=show&category=2'" class="w3-button w3-black">2</button>
    <button onclick="location.href='index.php?menu=show&category=3'" class="w3-button w3-black">3</button>
    <button onclick="location.href='index.php?menu=show&category=0'" class="w3-button w3-black">4</button>

</div>
  </header>
<?php
        session_start();
        include("connect.php");
        if(isset($_GET['category'])){
            $cty=$_GET['category'];
        }
        else{
            header("location:index.php");
        }
                $sql = "SELECT * FROM products WHERE category=$cty";
                $result = $conn->query($sql);
                if(!$result){
                    echo "Error during data retrieval" . $conn->error;
                }
                else{
                    //ดึงข้อมูล
                    while($prd=$result->fetch_object()){
            ?>

<div class="w3-quarter">
    <div class="w3-display-container">
      <img src="img/<?php echo $prd->picture; ?>" style="width:90%" onclick="onClick(this)" alt="Canoeing again" class="img">
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

<?php
    include("connect.php");
    echo ini_get("upload_max_filesize")."<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);
    $size = $_FILES["filePic"]["size"]/2048/2048;

    if(!in_array($fileType[1],$allowedType)){
        //เมื่ออัพโหลดไฟล์ไม่ตรงกับ type ใน AllowedType
        echo "Non-image file is not allowed.";
    }
    else if($size>1.00){
        echo "File siz exceeds the meximum treshold";
    }


    else{
        $name = $_POST['txtName'];
        $price = $_POST['txtPrice'];
        $filename = $_FILES ['filePic']['name'];
        $cty = $_POST['rdoType'];

    move_uploaded_file($_FILES["filePic"]["tmp_name"],"img/".$_FILES["filePic"]["name"]);
    
    $sqlInsert = "INSERT INTO products (name,price,picture,category) VALUE('$name', '$price', '$filename','$cty')";
    //echo $sqlInsert;
    $result = $conn->query($sqlInsert);
    if($result){
        echo "<script> alert('Inser Products Complete'); </script>"; 
        header("Location: index.php");
    }
    else{
        echo "Error during insert products: ".$conn->error;
    }
    
    }
?>
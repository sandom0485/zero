<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="register.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.min.js"></script>
</head>
<body style="background-image: url(img/up.jpg)">
<?php
    include("connect.php");
    if(isset($_POST['submit'])){ //check if it is posted back
        // รับข้อมูล
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = md5($conn->escape_string($_POST['password']));
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];

        //echo "$firstname $lastname $username $password $email";
        //insert to table
        $sqlInsert ="INSERT INTO customer (username, password,firstname, lastname, email, phonenumber, active) VALUES('$username','$password','$firstname','$lastname','$email','$phonenumber','0')";

        $result = $conn->query($sqlInsert);
        if($result){
            //เมื่อ Register สำเร็จ 
            echo "<script> alert('Register Complete');</script>";
            header("Location: login.php");
        }
        else{
            echo "Error during Insert".$conn->error; 
        }
    }
?>
<div class="container">
        <h1 class="brand animated zoomIn" class="ff3"></h1>
        <div class="wrapper animated zoomIn ">
            <div class="company-zero animated zoomIn">
            <h1 class="ff3">Zero FOTO</h1>
                    <!--<h2 class="ff3">ติดต่อเรา</h2>
                    <ul>
                        <li><i class="fa fa-road"></i>90 Tesa Rd. Mueng, Nakhon Pathom</li>
                        <li><i class="fa fa-phone" class="ff3"></i>094-562-8703</li>
                        <li><a href="mailto:pete04855@gmail.com,ff3"><i class="fa fa-envelope"></i></a>pete04855@gmail.com</li>
                    </ul>-->
            </div>
            <div class="contact animated zoomIn">
                    <h3></h3>
                    <form action="" id="form1" method="post">
                        <p>
                            <label for="password" class="ff3">Username</label>
                            <input type="text" name="username" id="username" class="a">
                        </p>
                        <p>
                            <label for="password" class="ff3">Password</label>
                            <input type="password" name="password" id="password" class="a">
                        </p>
                        <p class="full" class="">
                            <label for="password" class="ff3">Email</label>
                            <input type="email" name="email" id="email" class="a">
                        </p>
                        <p class="full" class="">
                            <label for="" class="ff3">Phone</label>
                            <input type="number" name="phonenumber" id="phonenumber" class="a">
                        </p>
                            <ul id="err" style="color: red"></ul>
                        <p class="full" class="ff">
                            <button class="ff3" type="submit" name="submit">Register</button>
                        </p>
                            
                    </form>
                </div>
        </div>
        
    </div>
    
    
    <script>
        
        $(document).ready(function(){
            $("#form1").validate({
                rules:{
                    "username":"required",
                    "email":{
                        "required":true,
                        "email":true
                    },
                    "phonenumber":{
                        "required":true,
                        "equalTo":"#phonenumber"
                    },
                    "password":{
                        "required":true,
                        "rangelength":[8,10]
                    },
                    "mess":"required",
                },
                messages:{
                    "firstname":"กรุณากรอกชื่อ",
                    "lastname":"กรุณากรอกนามสกุล",
                    "email":{
                        "required":"กรุณาใส่อีเมล",
                        "email":"E-mail is invalid"
                    },
                    "phonenumber":{
                        "required":"กรุณาใส่เบอร์โทรศัพท์",
                        "equalTo":"phone don't match"
                    },
                    "password":{
                        "required":"กรุณาใส่รหัส 8-10 ตัว",
                        "equalTo":"phone don't match"
                    },
                    "mess":"ใส่ข้อความติดต่อกลับ",
                },
                highlight:function(element){
                    $(element).closest("p").addClass('has-error').removeClass('has-success');
                },
                unhighlight:function(element){
                    $(element).closest("p").addClass('has-success').removeClass('has-error');
                }
            });
        });
    </script>
</body>
</html>
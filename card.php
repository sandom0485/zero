<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="card.css">
  <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.min.js"></script>
</head>
<body>
<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>฿</p>
    </div>
    
    <form class="form" id="form1" onsubmit="return checkForm(this);">
      <div class="card space icon-relative">
        <label class="label">Card holder:</label>
        <input type="text" class="input" placeholder="Coding Market" name="name">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label class="label">Card number:</label>
        <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="number">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label class="label">Expiry date:</label>
          <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label class="label">CVC:</label>
          <input type="text" class="input" data-mask="000" placeholder="000" name="CVC">
          <i class="fas fa-lock"></i>
        </div>
      </div>
        
      <div>
        <center><a href="dow.php" class="btn" type="submit" style="background: #2196F3;">Pay</a></center>
      </div>

      
    </form>
  </div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  <script type="text/javascript">

function checkForm(form)
/*{
  if(form.name.value == "") {
    alert("Error: name cannot be blank!");
    form.name.focus();
    return false;
  }
  re = /^\w+$/;
  if(!re.test(form.name.value)) {
    alert("Error: name must contain only letters, numbers and underscores!");
    form.name.focus();
    return false;
  }

  if(form.number.value != "" && form.number.value == form.number.value) {
    if(form.number.value.length < 16) {
      alert("Error: Password must contain at least six characters!");
      form.number.focus();
      return false;
    }
  }
}*/

</script>
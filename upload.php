<br>
<br>
<div class="container">
        <div class="row">
            <form action="save.php" class="form-horizontal" method= "post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Name : </label>
                <div class="col-md-9">
                    <input type="text"name="txtName" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Price : </label>
                <div class="col-md-9">
                    <input type="text"name="txtPrice" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="control-label col-md-3">picture : </label>
                <div class="col-md-9">
                    <input type="file" name="filePic" class="form-control-file" accept="img/*">
                </div>
            </div>
            <div class="form-group">
                <label for="picture" class="control-label col-md-3">type: </label>
                <div class="col-md-9">
                    <input type="radio" name="rdoType" value="1" checked required>ชมพูพันธุ์ทิพย์</label>
                    <input type="radio" name="rdoType" value="2">สถานีรถไฟ</label>
                    <input type="radio" name="rdoType" value="3">องค์พระปฐมเจดีย์</label>
                    <input type="radio" name="rdoType" value="0">อื่นๆ</label>
                </div>
            </div> 
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary w3-button w3-dark-grey">Save </button>
                    <button type="reset" class="btn btn-danger w3-button w3-dark-grey">Reset </button>
                </div>
            </div>  
            </form>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
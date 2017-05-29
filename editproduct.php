<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col 12">
      <?php
          $ID = $_GET['ID'];
          $sql = "SELECT * FROM product WHERE Product_ID = '$ID'";
          $result=$connect->query($sql);
          $row = $result->fetch_array();
       ?>
    </div>
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6 center-align">
                <div class="col s6 left-align">
                  <br>
                  <b>รหัสสินค้า : <?php echo $row['Product_ID']; ?></b>
                </div>
                <div class="col s6 input-field">
                  <input name="Product_Name" type="text" class="validate" required value="<?php echo $row['Product_Name']?>">
                  <label for="ชื่อสินค้า">ชื่อสินค้า</label>
                </div>
                <div class="col s6 input-field">
                  <input name="Product_Price" type="number" class="validate" step="0.01" required value="<?php echo $row['Product_Price']?>">
                  <label for="ราคาสินค้า">ราคาสินค้า</label>
                </div>
                <div class="col s6 input-field">
                  <input name="Product_QTY" type="number" class="validate" required value="<?php echo $row['Product_QTY']?>">
                  <label for="จำนวนสินค้า">จำนวนสินค้า</label>
                </div>
                <div class="col s12 input-field">
                  <textarea name="Product_Title" class="materialize-textarea"><?php echo $row['Product_Title']?></textarea>
                  <label for="Title สินค้า">Title สินค้า</label>
                </div>
                <div class="col s12 input-field">
                  <textarea name="Product_Detail" class="materialize-textarea"><?php echo $row['Product_Detail']?></textarea>
                  <label for="รายละเอียดสินค้า">รายละเอียดสินค้า</label>
                </div>
            </div>
            <div class="col s6 center-align">
              <div class="col s12">
                <div class="img"> <img id="output"/ width=500px height=400px src="<?php echo $row['Product_IMG']?>"> </div>
                <br>
              </div>
              <div class="col s12">
                <input type="file" name="fileToUpload"  accept="product/*" onchange="loadFile(event)" >
                    <script>
                      var loadFile = function(event) {
                      var output = document.getElementById('output');
                          output.src = URL.createObjectURL(event.target.files[0]);
                      };
                    </script>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col s12 center">
            <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">Save
                    <i class="material-icons right">mode_edit</i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
<?php  include 'footer.php'; ?>
<?php
    if ($_POST) {
      $Product_Name = $_POST['Product_Name'];
      $Product_Price = $_POST['Product_Price'];
      $Product_QTY = $_POST['Product_QTY'];
      $Product_Title = $_POST['Product_Title'];
      $Product_Detail = $_POST['Product_Detail'];

      $insert_picture = $row['Product_IMG'];

      if ($_FILES['fileToUpload']['name'] != "") {
        $target_dir = "product/";
        $insert_picture = "product/";
        $insert_picture = $insert_picture.$_FILES['fileToUpload']['name'];
        $target_file = $target_dir.$_FILES["fileToUpload"]["name"];
        if(copy($_FILES['fileToUpload']['tmp_name'], $target_file)){
          echo "Add Complete";
        }
      }



      $sql = "UPDATE product SET Product_Name = '$Product_Name',
                                  Product_Price = '$Product_Price',
                                  Product_QTY = '$Product_QTY',
                                  Product_Title = '$Product_Title',
                                  Product_Detail = '$Product_Detail',
                                  Product_IMG = '$insert_picture'
                                  WHERE Product_ID = '$ID'";
      $connect->query($sql);
      header("Location:product.php?ID=$ID");
    }

 ?>

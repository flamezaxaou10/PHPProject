<?php include 'header.php'; ?>
<script type="text/javascript">
  $(document).ready(function() {
     $('select').material_select();
   });
</script>
<div class="container">
  <form class="" action="#" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col s12">
        <h3 class="center">เพิ่มสินค้า</h3>
      </div>
    </div>
    <div class="row">
      <div class="col s6 center-align">
          <div class="col s6 input-field">
            <input name="Product_ID" type="text" class="validate" required>
            <label for="รหัสสินค้า">รหัสสินค้า</label>
          </div>
          <div class="col s6 input-field">
            <input name="Product_Name" type="text" class="validate" required>
            <label for="ชื่อสินค้า">ชื่อสินค้า</label>
          </div>
          <div class="col s6 input-field">
            <input name="Product_Price" type="number" class="validate" step="0.01" required>
            <label for="ราคาสินค้า">ราคาสินค้า</label>
          </div>
          <div class="col s6 input-field">
            <input name="Product_QTY" type="number" class="validate" required>
            <label for="จำนวนสินค้า">จำนวนสินค้า</label>
          </div>
          <div class="col s12 input-field">
            <textarea name="Product_Title" class="materialize-textarea"></textarea>
            <label for="Title สินค้า">Title สินค้า</label>
          </div>
          <div class="col s12 input-field">
            <textarea name="Product_Detail" class="materialize-textarea"></textarea>
            <label for="รายละเอียดสินค้า">รายละเอียดสินค้า</label>
          </div>
          <div class="col s6 input-field">
            <select name="Type_ID" required>
              <option value="" disabled selected>เลือกประเภทสินค้า</option>
            <?php
              $sql = "SELECT * FROM type";
              $result = $connect->query($sql);
              while ($row = $result->fetch_array()) {
            ?>
              <option value="<?php echo $row['Type_ID']; ?>"><?php echo $row['Type_Name']; ?></option>
            <?php
              }
             ?>
             </select>
             <label>เลือกประเภทสินค้า</label><br>
          </div>
          <div class="col s6 input-field">
            <select name="Band_ID" required>
              <option value="" disabled selected>เลือกแบรนสินค้า</option>
            <?php
              $sql = "SELECT * FROM band";
              $result = $connect->query($sql);
              while ($row = $result->fetch_array()) {
            ?>
              <option value="<?php echo $row['Band_ID']; ?>"><?php echo $row['Band_Name']; ?></option>
            <?php
              }
             ?>
             </select>
             <label>เลือกแบรนสินค้า</label><br>
          </div>
      </div>
      <div class="col s6 center-align">
        <div class="col s12">
          <div class="img"> <img id="output"/ width=500px height=400px> </div>
          <br>
        </div>
        <div class="col s12">
          <input type="file" name="fileToUpload"  accept="product/*" onchange="loadFile(event)">
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
      <div class="col s6 right-align">
        <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">เพิ่มสินค้า
                <i class="material-icons right">send</i>
        </button>
      </div>
      <div class="col s6 left-align">
        <button class="btn waves-effect waves-light #b71c1c red darken-4 z-depth-4" type="reset" name="action">Reset
                <i class="material-icons right">settings_backup_restore</i>
        </button>
      </div>
    </div>
  </form>
</div>
<?php include 'footer.php'; ?>
<?php
  if($_POST){
    $Product_ID = $_POST['Product_ID'];
    $Product_Name = $_POST['Product_Name'];
    $Product_Price = $_POST['Product_Price'];
    $Product_QTY = $_POST['Product_QTY'];
    $Product_Title = $_POST['Product_Title'];
    $Product_Detail = $_POST['Product_Detail'];
    $Type_ID = $_POST['Type_ID'];
    $Band_ID = $_POST['Band_ID'];
    $target_dir = "product/";
    $insert_picture = "product/";

    $target_file = $target_dir.$_FILES["fileToUpload"]["name"];
    $insert_picture = $insert_picture.$_FILES['fileToUpload']['name'];

    if(copy($_FILES['fileToUpload']['tmp_name'], $target_file)){
      echo "Add Complete";
    }

    $sql = "INSERT INTO product (Product_ID,Product_Name,Product_Price,Product_QTY,Product_Title,Product_Detail,Product_IMG,Type_ID,Band_ID)
            VALUES ('$Product_ID','$Product_Name','$Product_Price','$Product_QTY','$Product_Title','$Product_Detail','$insert_picture','$Type_ID','$Band_ID');";
    $connect->query($sql);


  }
 ?>

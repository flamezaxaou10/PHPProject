<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Cssregis.css" />
  </head>


  <body>
    <div class="box">
    <form class="" action="" method="post">
      <div class="header">
        <h1>สมัครสมาชิกใหม่</h1>
          ชื่อ <input type="text" name="name" value=""><br>
          นาม-สกุล <input type="text" name="sername" value=""><br>
          ID <input type="text" name="id" value=""required=""><br>
          Password <input type="text" name="password" value="" required=""><br>
          ยืนยันรหัสผ่าน <input type="text" name="password2" value="" required=""><br>
        E-mail <input type="text" name="email" value="" required=""><br>
       หมายเลขโทรศัพท์ <input type="text" name="numbercall" value="" required=""><br>
       หมายเลขบัตรประชาชน <input type="text" name="number" value=""required=""><br>
        เพศ ชาย <input type="radio" name="gen" value="mela"required="">
        หญิง <input type="radio" name="gen" value="femela" required=""><br>
        ที่อยู่   <br> <textarea name="message" rows="10" cols="30"></textarea><br>
        จังหวัด <input type="text" name="county" value=""><br>
        รหัสไปรษณี <input type="text" name="post" value=""><br>
          </div>
        <div class="footer">
         <input type="submit" name="submit" value="สมัคร"class="button">
         <input type="reset" name="reset" value="ยกเลิก"class="register"><br>
         </div>
       </form>
       </div>
  </body>
</html>

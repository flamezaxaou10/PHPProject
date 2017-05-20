
<?php include 'header.php' ?>
<body>
  <div class="container">
    <div class="row">
    <div class="col s12">
      <div class="slider">
        <ul class="slides">
          <li>
            <img clss="responsive-img" src="img/p1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="white-text">This is our big Tagline!</h3>
              <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3 class="white-text">Left Aligned Caption</h3>
              <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3 class="white-text">Right Aligned Caption</h3>
              <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="white-text">This is our big Tagline!</h3>
              <h5 class="light white-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- js Slideer Copy คนอื้นมา -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slider();
        });
    </script>


    <div class="row">
      <div class="col s3 "><p><img class="responsive-img" src="img/cpu.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/case.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/fan.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/gc.jpg" width="315"></p></div>
    </div>

    <div class="row">
      <div class="col s3 "><p><img class="responsive-img" src="img/heat.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/mb.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/PS.jpg" width="315"></p></div>
      <div class="col s3"><p><img class="responsive-img" src="img/ram.jpg" width="315"></p></div>
    </div>
  </div>
</div>
</body>
<?php include 'footer.php' ?>

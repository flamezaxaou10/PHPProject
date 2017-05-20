
<?php include 'header.php' ?>
<body>
  <div class="container">
    <div class="row">
    <div class="col s12">
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/900x450.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="black-text">This is our big Tagline!</h3>
              <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/900x450.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3 class="black-text">Left Aligned Caption</h3>
              <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/900x450.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3 class="black-text">Right Aligned Caption</h3>
              <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/900x450.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="black-text">This is our big Tagline!</h3>
              <h5 class="light black-text text-lighten-3">Here's our small slogan.</h5>
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
      <div class="col s3 "><p><img class="materialboxed" src="img/cpu.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/case.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/fan.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/gc.jpg" width="300"></p></div>
    </div>

    <div class="row">
      <div class="col s3 "><p><img class="materialboxed" src="img/heat.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/mb.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/PS.jpg" width="300"></p></div>
      <div class="col s3"><p><img class="materialboxed" src="img/ram.jpg" width="300"></p></div>
    </div>
  </div>
</div>
</body>
<?php include 'footer.php' ?>

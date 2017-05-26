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
              <h3 class="white-text">Gigabyte Aorus</h3>
              <h5 class="light white-text text-lighten-3">เย็นและแรงมาพร้อมกับไฟ RGB</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3 class="white-text">RX 580 SAPPHIRE</h3>
              <h5 class="light white-text text-lighten-3">Design หรูหรา</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3 class="white-text">ASUS STRIX 1080 Ti</h3>
              <h5 class="light white-text text-lighten-3">มาพร้อมไฟ RGB และความแรงเกินคาด!!</h5>
            </div>
          </li>
          <li>
            <img clss="responsive-img" src="img/p4.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="white-text">MSI GAMING X GTX 1080</h3>
              <h5 class="light white-text text-lighten-3">มาพร้อมความเงียบ เย็น และแรงงง</h5>
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
      <div class="col s4"><a href="main.php?ID=T001"><img class="responsive-img hoverable" src="img/cpu.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T003"><img class="responsive-img hoverable" src="img/case.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T005"><img class="responsive-img hoverable" src="img/fan.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T002"><img class="responsive-img hoverable" src="img/gc.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T008"><img class="responsive-img hoverable" src="img/heat.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T004"><img class="responsive-img hoverable" src="img/mb.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T007"><img class="responsive-img hoverable" src="img/PS.jpg" width="400"></a></div>
      <div class="col s4"><a href="main.php?ID=T006"><img class="responsive-img hoverable" src="img/ram.jpg" width="400"></a></div>
    </div>

  </div>
</div>
</body>
<?php include 'footer.php' ?>

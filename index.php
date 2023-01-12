<?php
  require 'includes/head.php';
  ?>
 
  <body>
  <?php
  require "./includes/header.php";
  ?>
  
  <main>
    <div class="container main">
      <div class="row justify-content-evenly">
        <div class="col-sm bg-secondary">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatum a consequuntur inventore optio nostrum quaerat, eos nam impedit? Iste odio eos corporis harum in magni ipsam laudantium quas perferendis.
          <!--       <p>
                  <label for="slider">Select a value:</label>
                  <div class="slider-icon-container">
                  <input type="range" min="0" max="100" step="10" value="50" id="slider"> 
                  </div>
                  <span id="sliderValue">50</span>
                </p> -->
    
          <i class="fa-solid fa-heart-circle-plus icongen"></i>
          <i class="fa-solid fa-dumbbell icongen"></i>
        </div>
        <div class="col-sm bg-secondary">
            <label for="slider">Slider 1 to 5:</label>
              <input type="range" min="0" max="5" step="1" value="5" id="slider"  class="slider">
              <div class="slider-icon">
              <img src="./assets/img/keyboard-solid.svg" alt="Icon">
                </div>
              <span id="sliderValue">half</span>
                  <script>
                    var slider = document.getElementById("slider");
                    var output = document.getElementById("sliderValue");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                      output.innerHTML = this.value;
                    }
                  </script>

        </div>
      </div>
    </div>

  
</main>


  <?php
  require 'includes/footer.php';
  ?>
  <?php
  require 'includes/include_javascript.php';
  ?>


</body>
</html>
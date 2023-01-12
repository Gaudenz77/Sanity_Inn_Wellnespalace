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
    


<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

          <i class="fa-solid fa-heart-circle-plus icongen"></i>
          <i class="fa-solid fa-dumbbell icongen"><?php $value = 3; ?></i>
            </div>
            <div class="col-sm bg-secondary">
              <label for="slider">Slider 1 to 5:</label>
              <p><br></p>
              <input type="range" min="1" max="5" step="1" value="<?php $value ?>" id="slider"  class="slider">
              <p><br></p>
              <span id="sliderValue"></span>

<!-- Press "next/weiter"-Button: name => $value to PHP-Session  -->
<!-- Back link einfügen // Reset-Button um Clear-Session einzuleiten und restart homepage -->              

     




        </div>
      </div>
    </div>

  
</main>

<?php 
require 'includes/head.php';
require "./includes/header.php";
require 'includes/include_javascript.php';
require 'includes/include_styles.php';
require 'includes/footer.php'
?>




</body>
</html>
<body>
<main>
    <div class="container main">
      <div class="row"><div class="col">
      <!-- <form action="" method="POST" onsubmit="return validateRange();">
        <input type="range" name="range-slider" id="range-slider" class="form-range" 
               min="0" max="5" step="0.5" onchange="sliderChanged();">
            
               <input type="hidden" name="range-slider-changed" id="range-slider-changed">
               <button type="submit" class="btn btn-success">Submit</button>
              </div>
               
               </form>
        <p id="validation-warning">tetxt</p> -->
      </div>
   


<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        
        require 'includes/head.php';
        require 'includes/include_styles.php';
        require './includes/pseudo01.php';
        require "./includes/header.php";

        $seite =  0;

        $survey = $questions[$seite]["question"];

        echo "<form action='' method='POST' onsubmit= return 'validateQuestion1()';>
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";
              $type = $questions[$seite]["type"];
              $id = $questions[$seite]["id"];
              $min = $questions[$seite]["min"];
              $max = $questions[$seite]["max"];
                /* if bedingung ob in der session existiert */
            $value = $questions[$seite]["value"]; 
            echo  "<input type=$type name=$id min='$min' max='$max' step='1' value='$value' id='slider' id='$id'  class='slider' onchange='sliderChange();'>
            <label for='slider'>1 = Ungesund // 5 = gesund</label><br> <p><br></p>
            <span id='sliderValue'>$value</span><br>
            <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
            <button type='button' class='btn btn-danger'>Zurück</button>
            <button type='button' class='btn btn-warning'>Neu Start</button>
            <button type='button' class='btn btn-success'>Weiter</button>
            </div>
            </form>
            ";
        ?>

        <?php echo 
        '<form action="" method="POST" onsubmit="return validateRange();">
        <input type="range" name="range-slider" id="range-slider" class="form-range" 
               min="0" max="5" step="0.5" onchange="sliderChanged();">
            
               <input type="hidden" name="range-slider-changed" id="range-slider-changed">
               <button type="submit" class="btn btn-success">Submit</button>
              </div>
               
               </form>
        <p id="validation-warning"></p>'
        ?>


          
          
            
            
             
              
              
              

<!-- Press "next/weiter"-Button: name => $value to PHP-Session  -->
<!-- Back link einfügen // Reset-Button um Clear-Session einzuleiten und restart homepage -->              

     





      </div>
    </div>
</main>

<?php 
require 'includes/include_javascript.php';
require 'includes/footer.php';
?>




</body>
</html>
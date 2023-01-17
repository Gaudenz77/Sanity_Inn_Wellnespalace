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
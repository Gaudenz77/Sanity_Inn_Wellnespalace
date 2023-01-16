<main>
    <div class="container main">
      <div class="row">
   


<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        
        require 'includes/head.php';
        require 'includes/include_styles.php';
        require './includes/pseudo01.php';
        require "./includes/header.php";

        $seite =  0;

        $survey = $questions[$seite]["question"];

        echo "<form action='' method='POST'
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";
              $type = $questions[$seite]["type"];
              $id = $questions[$seite]["id"];
              $min = $questions[$seite]["min"];
              $max = $questions[$seite]["max"];
                /* if bedingung ob in der session existiert */
            $value = $questions[$seite]["value"]; 
            echo  "<input type=$type name=$id min='$min' max='$max' step='1' value='$value' id=$id  class='slider'>
            <label for='slider'>$value</label><br> <p><br></p>
            <span id='sliderValue'></span><br>
            <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
            <button type='button' class='btn btn-danger'>Zurück</button>
            <button type='button' class='btn btn-warning'>Neu Start</button>
            <button type='button' class='btn btn-success'>Weiter</button>
            </div>
            </form>
            ";
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
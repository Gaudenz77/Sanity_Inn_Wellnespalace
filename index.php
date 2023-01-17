<?php 
require 'includes/phpValidation.php';
?>
<body>
<main>
    <div class="container main">
      <div class="row"><div class="col">
      </div>
   
<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        
        require 'includes/head.php';
        require 'includes/include_styles.php';
        require 'includes/pseudo01.php';
        require 'includes/header.php';

        $seite =  0;

        $survey = $questions[$seite]["question"];

        echo "<form action='question2.php' method='POST' onsubmit= 'return validateQuestion1();'>
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";
              $type = $questions[$seite]["type"];
              $id = $questions[$seite]["id"];
              $min = $questions[$seite]["min"];
              $max = $questions[$seite]["max"];
              /* if bedingung ob in der session existiert */
              if(isset($_SESSION['question01']['question1'])){
                $value = number_format($_SESSION['question01']['question1']); 
              } else {
                $value = $questions[$seite]['value']; 
              }
        echo  "<input type=$type name=$id min='$min' max='$max' step='1' value='$value' id='$id' class='slider' onchange='sliderChange();'>
              <label for='slider'>1 = Ungesund // 5 = gesund</label><br> <p><br></p>
              <input type='hidden' name='lastPageID' value='question01'>
              <span id='sliderValue'>$value</span><br>
              <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
              <button type='button' class='btn btn-danger'><a href='index.php'>Zurück</a></button>
              <button type='button' class='btn btn-warning' onclick='deleteAllCookies()'>Neu Start</button>
              <button type='submit' class='btn btn-success'>Weiter</button>
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
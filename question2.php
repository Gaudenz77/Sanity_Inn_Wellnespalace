<?php 
require 'includes/session.php';
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

        $pageID =  1;
        $pageid = $pageID + 1;
        $a = $pageID + 2;
        $link = 'question' . $a;
        $page = 'question' . $pageid;
        $survey = $questions[$pageID]["question"];
        $type = $questions[$pageID]["type"];
        require 'includes/phpValidation.php';

        echo "<form action='$link.php' method='POST' onsubmit= 'return $type();'>
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";

              $id = $questions[$pageID]["id"];
              /* if bedingung ob in der session existiert */
              if(isset($_SESSION[$page])){
                $value = number_format($_SESSION[$page][$page]); 
              } else {
                $value = $questions[$pageID]['value']; 
              }
        echo  "
              <input class='form-check-input' type=$type name=$id value='$value' id='$id' class=''>
              <label class='form-check-label' for='flexRadioDefault1'>Ja</label><br>
              <input class='form-check-input' type=$type name=$id value='$value' id='$id' class=''>
              <label class='form-check-label' for='flexRadioDefault1'>Nein</label><br> <p><br></p>
              <input type='hidden' name='lastPageID' value='$page'>
              <span id='sliderValue'>$value</span><br>
              <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
              <button type='button' class='btn btn-danger'><a href='index.php'>Zurück</a></button>
              <button type='button' class='btn btn-warning' onclick='deleteAllCookies()'>Neu Start</button>
              <button type='submit' class='btn btn-success'>Weiter</button>
              </div>
              </form>
              ";
        ?>
<!-- <div class='form-check'>
  <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'>
  <label class='form-check-label' for='flexRadioDefault1'>
    Default radio
  </label>
</div> -->

          
          
            
            
             
              
              
              

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
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

        $pageID =  9;
        $pageid = $pageID + 1;
        $a = $pageID + 2;
        $back = 'question' . $pageID . '.php';
        $link = 'question' . $a;
        $page = 'question' . $pageid;
        $survey = $questions[$pageID]["question"];
        $type = $questions[$pageID]["type"];
        require 'includes/phpValidation.php';

        echo "<form action='reasult.php' method='POST' onsubmit='return $type();'>
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";

              $id = $questions[$pageID]["id"];
              $min = $questions[$pageID]["min"];
              $max = $questions[$pageID]["max"];
              /* if bedingung ob in der session existiert */
              if(isset($_SESSION[$page][$page])){
                $value = number_format($_SESSION[$page][$page]); 
              } else {
                $value = ''; 
              }
        echo  "<input type=$type name=$id min='$min' max='$max' step='1' value='$value' id='$id' class='check' onchange='sliderChanged();'>
              <label for='slider'>1 = Ungesund // 5 = gesund</label><br> <p><br></p>
              <input type='hidden' name='lastPageID' name='range-slider' value='$page' value='' id='pageID'>
              <input type='hidden' name='type' value='$type' value=''>
              <span id='sliderValue'>$value</span><br>
              <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
              <button type='button' class='btn btn-danger'><a href='$back'>Zurück</a></button>
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
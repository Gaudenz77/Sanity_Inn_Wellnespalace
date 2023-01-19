<?php 
require ('includes/session.php');
require ('includes/head.php');
?>
<body>
  <?php
    require ('includes/header.php');
  ?>
<main>
    <div class="container main">
      <div class="row"><div class="col">
      </div>
   
<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        require ('includes/include_styles.php');
        require ('includes/pseudo01.php');

        $pageID =  3;
        $pageid = $pageID + 1;
        $a = $pageID + 2;
        $back = 'question' . $pageID . '.php';
        $link = 'question' . $a;
        $page = 'question' . $pageid;
        $survey = $questions[$pageID]["question"];
        $type = $questions[$pageID]["type"];
        require 'includes/phpValidation.php';

        echo "<form action='$link.php' method='POST' onsubmit='return $type();'>
                  <div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";

              /* if bedingung ob in der session existiert */

              for($i = 0; $i < count($questions[$pageID]['value']); $i++){
                $value = $questions[$pageID]['value'][$i];
            echo "<input type='$type' name='checkbox_$value' step='1' value='$value' id='$value'";
                if(isset($_SESSION[$page][$value])){
                  if ($_SESSION[$page][$value] === $value = $questions[$pageID]['value'][$i]){
                    echo "checked";
                  }
                }
          echo " class='check'>";// !!!achtung ich brauche eine check class zum validieren!!!
        echo  "<label for='slider'>$value</label><br> <p><br></p>";
              }

        echo  "<input type='hidden' name='type' value='$type' id='type'>
              <input type='hidden' name='lastPageID' value='$page'>
              <span id='sliderValue'></span><br>
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
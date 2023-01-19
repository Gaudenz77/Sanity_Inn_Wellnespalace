<?php 
require ('includes/session.php');
require ('includes/head.php');
?>
<body >
  <?php
    require ('includes/header.php');
  ?>
<main>
    <div class="container main">
      <div class="row">
        <div class="col"  style="margin-top:100px;">
        
      
      
<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        require ('includes/include_styles.php');
        require ('includes/pseudo01.php');
        
        $pageID =  0;
        $pageid = $pageID + 1;
        $a = $pageID + 2;
        $link = 'question' . $a;
        $page = 'question' . $pageid;
        $survey = $questions[$pageID]["question"];
        $type = $questions[$pageID]["type"];
        require ('includes/phpValidation.php');

        echo "<h2>Deine Gesundheit ist uns wichtig!</h2>
              <form action='$link.php' method='POST' onsubmit='return $type();'>
              <div class='col-sm queryField'>
              <!--<<button type='button' class='btn btn-light' onclick='buttonChangeBrightDark()'>
                      i class='fa-solid fa-circle-half-stroke'></i></button></li>-->
              $survey
              <p><br></p>";

              $id = $questions[$pageID]["id"];
              $min = $questions[$pageID]["min"];
              $max = $questions[$pageID]["max"];
              /* if bedingung ob in der session existiert */
              if(isset($_SESSION[$page][$page])){
                $value = number_format($_SESSION[$page][$page]); 
              } else {
                $value = $questions[$pageID]['value']; 
              }
        echo  "<input type=$type name=$id min='$min' max='$max' step='1' value='$value' id='$id' class='slider' onchange='sliderChanged();'>
              <label for='slider'>1 = ungesund // 5 = gesund</label><br> <p><br></p>
              <input type='hidden' name='lastPageID' name='range-slider' value='$page' value='' id='pageID'>
              <input type='hidden' name='type' value='$type' value=''>
              <input type='hidden' name='range-slider' value='' id='range-slider-changed'>
              <span id='sliderValue'>$value</span><br>
              <div class='row justify-content-evenly p-5'>
              <div class='col-sm-4 text-center'><button type='button' class='btn btn-light'><i class='fa-regular fa-circle-left icongen'></i><a href='index.php'><p class='icnbtns'>Zurück</p></a></button></div>
              <div class='col-sm-4 text-center'><button type='button' class='btn btn-light' onclick='deleteAllCookies()'><i class='fa-solid fa-rotate-right icongen'></i><p class='icnbtns'>Neu Start</p></button></div>
              <div class='col-sm-4 text-center'><button type='submit' class='btn btn-light'><i class='fa-regular fa-circle-right icongen'></i><p class='icnbtns'>Weiter</button></p></div>
              </div>
              </form>
              ";
        ?>

<!-- Press "next/weiter"-Button: name => $value to PHP-Session  -->
<!-- Back link einfügen // Reset-Button um Clear-Session einzuleiten und restart homepage -->              

          </div>
      </div>
    </div>
</main>


<?php 
require 'includes/include_javascript.php';
require 'includes/footer.php';
?>

</body>
</html>
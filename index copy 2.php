<main>
    <div class="container main">
      <div class="row">
      <h1>index copy 2</h1>
      <form action="./index copy 3.php" method="post">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
      <input type="submit">
      </form>



<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

        <?php
        require 'includes/include_styles.php';
        require './includes/pseudo01.php';
        $seite =  1;
        
        $survey = $questions[$seite]["question"];

        echo "<div class='col-sm bg-secondary p-5'>
              $survey
              <p><br></p>";
              $type = $questions[$seite]["type"];
              $id = $questions[$seite]["id"];

              for($i=0; $i < count($questions[$seite]["value"]);$i++){

                /* if bedingung ob in der session existiert */
                $value = $questions[$seite]["value"][$i]; 

                echo  "<input type=$type name=$id";
                if ($type !== 'radio' || $type !== 'checkbox' ){
                  $min = $questions[$seite]["min"];
                  $max = $questions[$seite]["max"];

                  echo "min='$min' max='$max'";
                }
                echo "step='1' value='$value' id=$id  class='slider'>
                       <label for='slider'>$value</label><br>";
              }
       
              
        echo
              "<p><br></p>
              <span id='sliderValue'></span><br>
              <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
              <button type='button' class='btn btn-danger'>Zurück</button>
              <button type='button' class='btn btn-warning'>Neu Start</button>
              <button type='button' class='btn btn-success'>Weiter</button>
              </div>
              ";
        ?>


          
          
            
            
             
              
              
              

<!-- Press "next/weiter"-Button: name => $value to PHP-Session  -->
<!-- Back link einfügen // Reset-Button um Clear-Session einzuleiten und restart homepage -->              

     





      </div>
    </div>
</main>

<?php 
require 'includes/head.php';
require "./includes/header.php";
require 'includes/include_javascript.php';
require 'includes/footer.php'
?>




</body>
</html>
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
        $pageid =  9;
        require 'includes/phpValidation.php';
        $prüfung = 'hacker';
        switch($prüfung){
          case 'hacker':
            echo "<p id='validateAllquestion'>Wenn du nicht richtig ausfüllst können wir dich auch nicht richtig beraten!</p>";
          case 'helthy':
            echo "<p id='validateAllquestion'>Super du bist kern gesund wir empfehle dieses Abo demit das auch so bleibt.</p>";
          case 'unhalthi':
            echo "<p id='validateAllquestion'>Wir empfehle dieses Abo demit das auch so bleibt.</p>";
        }


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
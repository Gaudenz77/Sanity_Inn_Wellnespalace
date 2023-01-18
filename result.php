<?php 
/* require 'includes/session.php'; */
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
        /* require 'includes/phpValidation.php'; */
        $prüfung = 'hacker';
        switch($prüfung){
          case 'hacker':
            echo "<p id='validateAllquestion'>Wenn Du nicht richtig ausfüllst, können wir Dich auch nicht richtig beraten!</p>";
          case 'helthy':
            echo "<p id='validateAllquestion'>Super, Du bist kern gesund! Wir empfehlen das Top-Abo, damit das auch so bleibt.</p>";
          case 'unhalthi':
            echo "<p id='validateAllquestion'>Wir empfehlen das Top-Abo, damit das auch so bleibt./p>";
        }

        echo "<div class='container'>
        <div class='row justify-content-center'>
            <div class='col-sm bg-secondary p-2'>
                <div class='one'>Wenn Du nicht richtig ausfüllst, können wir Dich auch nicht richtig beraten!</div>
                <div class='one'>Super, Du bist kern gesund! Wir empfehlen das Top-Abo, damit das auch so bleibt.</div>
                <div class='one'>Wir empfehlen das Top-Abo, damit das auch so bleibt.</div>
            </div>
            <div class='col-sm bg-secondary p-2'>
            <div class='table-responsive'>
                <table class='table table-dark table-striped'>
                    <thead>
                        <tr>
                            <th scope='col'>Frage No. X</th>
                            <th scope='col'></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=''>
                            <td scope='row'>Frage No. 1</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, aliquid voluptates eum est amet hic rem esse numquam laborum consequatur vel mollitia dolorem possimus ab impedit aperiam quas et sequi.
                            </td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 2</td>
                            <td>Antwort No. 2</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 2</td>
                            <td>Antwort No. 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            </div>
        </div>
    </div>";





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
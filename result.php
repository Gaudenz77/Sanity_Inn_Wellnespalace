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
        $pageid =  9;
        /* require 'includes/phpValidation.php'; */
        echo "<div class='container'>
        <div class='row <!-- -fluid --> justify-content-center'>
        <div class='col-sm-5 p-5'>
        <h2 class='text-center'>Das perfekte Abo für Dich:</h2>


        <img src='assets/img/sanity_inn_header_pic_day.jpg' class='img-fluid rounded-circle p-2' alt='...'>";

        $prüfung = 'hacker';
        switch($prüfung){
          case 'hacker':
            echo "<div class='one'><p id='validateAllquestion'>Wenn Du nicht richtig ausfüllst, können wir Dich auch nicht richtig beraten!</p></div>";
          case 'helthy':
            echo "<div class='one'><p id='validateAllquestion'>Super, Du bist kern gesund! Wir empfehlen das Top-Abo, damit das auch so bleibt.</p></div>";
          case 'unhalthi':
            echo "<div class='one'><p id='validateAllquestion'>Wir empfehlen das Top-Abo, damit das auch so bleibt.</p></div>
            </div>";
        }
        echo "<div class='col-sm-7 p-2'>
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
                            <td scope='row'>Frage No. 3</td>
                            <td>Antwort No. 3</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 4</td>
                            <td>Antwort No. 4</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 5</td>
                            <td>Antwort No. 5</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 6</td>
                            <td>Antwort No. 6</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 7</td>
                            <td>Antwort No. 7</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 8</td>
                            <td>Antwort No. 8</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 9</td>
                            <td>Antwort No. 9</td>
                        </tr>
                        <tr class=''>
                            <td scope='row'>Frage No. 10</td>
                            <td>Antwort No. 10</td>
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
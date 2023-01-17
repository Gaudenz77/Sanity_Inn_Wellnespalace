<?php 
require 'includes/head.php'; 
require 'includes/data-collector.php'; ?>
<body>
<main>
    <div class="container main">
      <div class="row">
      <h1>index copy</h1>
      <form action="./trainingCrissSession2.php" method="post">
      vorname: <input type="text" name="name"><br>
      alter: <input type="text" name="number"><br>
      <input type='hidden' name='lastPageID' value='question1'>
      <input type="submit">
      </form>



<!--  wir holen php den session-value raus, wenn keine Eingabe(empty) if-bedingung =  $value="3" -->  

<!-- Javascript-Validierung -->

       

          
          
            
            
             
              
              
              

<!-- Press "next/weiter"-Button: name => $value to PHP-Session  -->
<!-- Back link einfügen // Reset-Button um Clear-Session einzuleiten und restart homepage -->              

     





      </div>
    </div>
</main>

<?php 
require "./includes/header.php";
require 'includes/include_javascript.php';
require 'includes/footer.php';
?>




</body>
</html>
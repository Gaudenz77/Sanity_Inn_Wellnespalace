<?php

        require 'includes/head.php';
        require 'includes/include_styles.php';
        require 'includes/pseudo01.php';
        require 'includes/header.php';
        ?>
<div class='container'>
    <div class='row'>
        <div class='col-sm'>
            <div class='one'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, aliquid voluptates eum est amet hic rem esse numquam laborum consequatur vel mollitia dolorem possimus ab impedit aperiam quas et sequi.
            </div>
            <div class='one'></div>
            <div class='one'></div>
        </div>
        <div class='col-sm'>
        <div class='table-responsive'>
            <table class='table table-dark table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>Column 1</th>
                        <th scope='col'>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=''>
                        <td scope='row'>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class=''>
                        <td scope='row'>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        </div>
    </div>
</div>



<!-- buttons version self working  (when using only class button without explicit <button>-tag type='submit' is NT working) -->

<div class='button-container'>
<button i class='fa-regular fa-circle-left btn text-center' type='button' id='testBtns'><p class='icnbtns'><a href='index.php' style='text-decoration: none;'>BACK</a></p></i>
<button i class='fa-solid fa-rotate-right btn text-center' type='button' onclick='deleteAllCookies()' id='testBtns'><p class='icnbtns'>NEUSTART</p></i>
<button type='submit' i class='fa-regular fa-circle-right btn text-center' id='testBtns'><p class='icnbtns'>NEXT</p></i>
</div>

<!-- buttons version RESPONSIVE WORKING!!! Test (in Use)-->

<div class='row justify-content-evenly bg-secondary'>
    <div class='col-sm-4 text-center'><button type='button' class='btn'><i class='fa-regular fa-circle-left'></i><a href='index.php'> Zurück</a></button></div>
    <div class='col-sm-4 text-center'><button type='button' class='btn' onclick='deleteAllCookies()'><i class='fa-solid fa-rotate-right'></i> Neu Start</button></div>
    <div class='col-sm-4 text-center'><button type='submit' class='btn'><i class='fa-regular fa-circle-right'></i> Weiter</button></div>
</div>

<!-- buttons version WORKING NONRESPONSIVE-->
<div class='button-container' role='group' aria-label='Basic mixed styles example'>
              <button type='button' class='btn'><i class='fa-regular fa-circle-left'></i><a href='index.php'> Zurück</a></button>
              <button type='button' class='btn' onclick='deleteAllCookies()'><i class='fa-solid fa-rotate-right'></i> Neu Start</button>
              <button type='submit' class='btn'><i class='fa-regular fa-circle-right'></i> Weiter</button>
              </div>

<i class='fa-regular fa-circle-left'></i>
<i class='fa-solid fa-rotate-right'></i>
<i class='fa-regular fa-circle-right'></i>

<h1 class='titleresult'>Das perfekte Abo für Dich:</h1>

<img src='...' class='img-fluid' alt='...'>

</body>
</html>
class='btn'><i class='fa fa-home'></i> Home</button>



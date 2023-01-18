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



<!-- buttons version working -->
<div class='button-container'>
<button i class='fa-regular fa-circle-left btn text-center' type='button' id='testBtns'><p class='icnbtns'><a href='index.php' style='text-decoration: none;'>BACK</a></p></i>
<button i class='fa-solid fa-rotate-right btn text-center' type='button' onclick='deleteAllCookies()' id='testBtns'><p class='icnbtns'>NEUSTART</p></i>
<button type='submit' i class='fa-regular fa-circle-right btn text-center' id='testBtns'><p class='icnbtns'>NEXT</p></i>
</div>

<!-- buttons version NOT YET working -->
<div class='row justify-content-evenly bg-secondary icnbtns'>
    <div class='col-sm-4 text-center'><a href='index.php'><i class='fa-regular fa-circle-left btn' type='button' id='testBtns'><p class='icnbtns'>BACK</p></i></a></div>
    <div class='col-sm-4 text-center'><i class='fa-solid fa-rotate-right btn' type='button' onclick='deleteAllCookies()' id='testBtns'><p class='icnbtns'>NEUSTART</p></i></div>
    <div class='col-sm-4 text-center'><i class='fa-regular fa-circle-right btn' type='submit' id='testBtns'><p class='icnbtns'>NEXT</p></i></div>
</div>

<i class='fa-regular fa-circle-left'></i>
<i class='fa-solid fa-rotate-right'></i>
<i class='fa-regular fa-circle-right'></i>

</body>
</html>



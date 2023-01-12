                <!-- Fill-Email -->
                <?php
                echo "<br>";
                if (strlen($_POST["email"]) === 0) {
                    $email = $_POST["email"];
                    echo "Please enter your email";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-Gender missing -->
                <?php
                if (strlen($_POST["gender"]) === 0) {
                    $email = $_POST["email"];
                    echo "Please enter a gender";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-fName missing -->
                <?php
                if (strlen($_POST["fName"]) === 0) {
                    $email = $_POST["fName"];
                    echo "Please enter your first name";
                 }
                 echo "<br>";
                ?>
                
                <!-- Fill-lName missing -->
                <?php
                if (strlen($_POST["lName"]) === 0) {
                    $email = $_POST["lName"];
                    echo "Please enter your last name";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-age missing -->
                <?php
                if (strlen($_POST["age"]) === 0) {
                    $email = $_POST["age"];
                    echo "Please enter your age between 18 nd 99";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-phone missing -->
                <?php
                if (strlen($_POST["phone"]) === 0) {
                    $email = $_POST["phone"];
                    echo "Please enter your phone-no.";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-level missing -->
                <?php
                if (strlen($_POST["level"]) === 0) {
                    $email = $_POST["level"];
                    echo "Please enter a class level";
                 }
                 echo "<br>";
                ?>
                <!-- Fill-level missing -->
                
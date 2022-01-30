<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                $persons = array(
                    array("Reza", "35", "white"),
                    array("Shenaya", "6", "Yellow"),
                    array("Shahbanoo", "23", "Black"),
                    array("Armin", "25", "Red")
                );
                
                for($i = 0; $i < count($persons); $i++){
                    echo "This person number : $i" . "<br>";
                    echo "<ul>";
                    foreach($persons[array_keys($persons)[$i]] as $value){
                        echo "<li>" . $value . "</li>";
                    }
                    echo "</ul>";
                }
                
            ?>

        </div>

        <form action="<?php ?>" method="post" autocomplete="FALSE">
            <input type="text" name="f-Name" placeholder="enter your first name">
            <input type="text" name="l-Name" placeholder="enter your last name">
            
            <div class="radio-frame">
                <span>Gender :</span>
                <input type="radio" name="gender" value="Male" id="radio-male">
                <label for="radio-male">Male</label><br>
                <input type="radio" name="gender" value="Female" id="radio-female">
                <label for="radio-female">Female</label><br>
                <input type="radio" name="gender" value="Other" id="radio-other">
                <label for="radio-other">Other</label><br>   
            </div>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
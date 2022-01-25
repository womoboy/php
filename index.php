<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                $cars = array("BMW" => "Red", "Benz" => "Black", "Vovo" => "Blue");
                $cars_counter = count($cars);

                /*
                foreach($cars as $carName => $carColor){
                    echo $carName . ' ' . $carColor . '<br>';
                }
                */

                for($i = 0; $i < $cars_counter; $i++){
                    echo array_keys($cars)[$i] . ' ' . $cars[array_keys($cars)[$i]] . '<br>';
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
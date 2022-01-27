<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                $cars = array(
                    array('BMW', 'Red', '1392'),
                    array('FordMustang', 'Black', '1969'),
                    array('Benz', 'Blue', '2020'),
                    array('Mack', "white", '2022')
                );

                for ($i = 0; $i < count($cars); $i++){
                    echo "<p>The Array $i</p>";
                    echo "<ul>";
                    for ($x = 0; $x < 3; $x++){
                        echo "<li>";
                        echo $cars[$i][$x];
                        echo "</li>";
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
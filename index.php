<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                function showName(){
                    global $x, $string, $string2;
                    echo $string2 . "<br>";
                }

                $x = "Reza is very good persons, Reza love the Nickola Tesla";
                $string = "/reza/i";
                $string2 = preg_replace($string, "Sara", $x);

                showName();
                showName();
                showName();
            ?>
    
        </div>

        <form action="<?php $_SERVER['PHP_SELF']?>"  method="post">
            <input type="text" name="f-Name" placeholder="enter your first name">
            <input type="text" name="l-Name" placeholder="enter your last name">
            
            <div class="radio-frame">
                <span>Gender :</span>
                <input type="radio" name="gender" value="Male" id="radio-male" checked="checked">
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
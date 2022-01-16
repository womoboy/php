

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                $x = 5;
                
                function myTest() {
                    //global $x;
                    $y = $GLOBALS['x'];
                    echo "the number is :" . $y . "<br>";
                }
                myTest();
                echo "the number is :" . $x;
            ?>

        </div>

        <form action="" method="post" autocomplete="FALSE">
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
<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                function showFullName(){
                    global $firstName, $lastName;
                    return $firstName . ' ' . $lastName . "<br>";
                }
                
                function showGender(){
                    global $gender;
                    return $gender . "<br>";
                }

                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $firstName = htmlspecialchars($_REQUEST['f-Name']);
                    $lastName = htmlspecialchars($_REQUEST['l-Name']);
                    $gender = htmlspecialchars($_REQUEST['gender']);

                    echo showFullName();
                    echo showGender();
                    echo $_SERVER['REQUEST_METHOD'] . "<br>";
                }
                
            ?>
    
        </div>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
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
<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                function showMethod(){
                    $methodName = htmlspecialchars($_SERVER['REQUEST_METHOD']);
                    return $methodName;
                }

                function showFirstName(){
                    $firstName = htmlspecialchars($_REQUEST['f-Name']);
                    return $firstName;
                }

                function showLastName(){
                    $lastName = htmlspecialchars($_REQUEST['l-Name']);
                    return $lastName;
                }

                function showGender(){
                    $gender = htmlspecialchars($_REQUEST['gender']);
                    return $gender;
                }

                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    echo showMethod() . "<br>";
                    echo showFirstName() . "<br>";
                    echo showLastName() . "<br>";
                    echo showGender() . "<br>";
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
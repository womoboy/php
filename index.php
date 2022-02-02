<?php declare(strict_types=1);?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error-frame">
            <?php
                function showInfo(){
                    global $first_name, $last_name, $gender;
                    echo "your name is : $first_name" . "<br>";
                    echo "your last name is : $last_name" . "<br>";
                    echo "your gender is : $gender" . "<br>";
                }

                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $first_name = htmlspecialchars($_REQUEST['f-Name']);
                    $last_name = htmlspecialchars($_REQUEST['l-Name']);
                    $gender = htmlspecialchars($_REQUEST['gender']);

                    if(empty($first_name) && empty($last_name)){
                        echo "the first name field is empty" . "<br>";
                        echo "the last name field is empty" . "<br>";

                    } else if(empty($first_name) && !empty($last_name)){
                        echo "first name field is empty";
                    } else if(empty($last_name) && !empty($first_name)){
                        echo "last name field is empty";
                    } else {
                        showInfo();
                    }
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
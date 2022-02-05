
<?php
    # actions
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        # inputs
        $name = validInput($_POST['f-Name']);
        $lastName = validInput($_POST['l-Name']);
        $gender = validInput($_POST['gender']);

        if(isset($name, $lastName, $gender) && (!empty($name) && !empty($lastName) && !empty($gender))){
            showName();
        }

    }
    
    # functions

    function validInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function errorBox($x){
        echo "this $x field is empty!";
    }

    function goAddress(){
        $target = htmlspecialchars($_SERVER['PHP_SELF']);
        return $target;
    }

    function showName(){
        global $name, $lastName, $gender;
        echo $name . ' ' . $lastName . ' / ' . $gender . "<br>";
    }
?>

<html>
    <head>
        <title>php tutorial</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="error-frame">
            <?php
                // Required field names
                $required = array('f-Name', 'l-Name', 'gender');
                $errorText = " field is requred!";

                // Loop over field names, make sure each one exists and is not empty
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $error = " field is requared!";
                    foreach($required as $field) {
                        if (empty($_POST[$field])) {
                            if($field == "f-Name"){
                                echo "first name" . $errorText . "<br>"; 
                            } else if($field == "l-Name"){
                                echo "last name" . $errorText . "<br>";
                            } else if($field == "gender"){
                                echo "gender" . $errorText . "<br>";
                            }
                        }
                    }

                }
                
            ?>
        </div>

        <form action="<?php echo goAddress();?>"  method="post">
            <input type="text" name="f-Name" placeholder="enter your first name">
            <input type="text" name="l-Name" placeholder="enter your last name">
            
            <div class="radio-frame">
                <span>Gender :</span>
                <input type="radio" name="gender" value="Male" id="radio-male" checked>
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
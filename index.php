
<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        # inputs
        $name = validateData($_POST['f-Name']);
        $lastName = validateData($_POST['l-Name']);
        $gender = validateData($_POST['gender']);

        if(!empty($name) && !empty($lastName) && !empty($gender)){
            echo showInformation();
        }     
    }

    # functions
    function validateData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function showInformation(){
        global $name, $lastName, $gender;
        $send_data_er = "your data is sended, your information is : " . "<br>";
        return $send_data_er . $name . ' ' . $lastName . ' ' . $gender;
    }

    function goAddress(){
        $target = validateData($_SERVER['PHP_SELF']);
        return $target;
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
                $inputsName = array('f-Name', 'l-Name', 'gender');
                foreach($inputsName as $val){
                    $field_empty_er = " fields is empty !";
                    if($_SERVER['REQUEST_METHOD'] == "POST" && empty($_POST[$val])) {
                        if($val == "f-Name"){
                            echo "first name" . $field_empty_er . "<br>";
                        } else if($val == "l-Name"){
                            echo "last name" . $field_empty_er . "<br>";
                        } else {
                            echo "gender" . $field_empty_er . "<br>";
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
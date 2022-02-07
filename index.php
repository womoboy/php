<?php
    # actions
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        # inputs
        $email = validateInput($_POST['email']);
        
        if(isset($email) && !empty($email)){
            $regX_email = "/^[a-zA-Z\s\.\_\d]+@[a-zA-Z\s]+[\.]+[a-zA-Z\s]+$/";
            if(preg_match($regX_email, $email)){
                echo showInfo();
                echo "the input is truth !" . "<br>";
            } else {
                echo "the inputs is not email standard !";
            }
        } else {
            echo "the fields is empty !";
        }
    }

    # functions
    
    function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function showInfo(){
        global $email;
        return $email . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="container" method="POST">
            <div>
                <input type="text" value="" name="email" id="email">
                <label for="#email">email</label>
            </div>
            <div class="container">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
    </section>
</body>
</html>
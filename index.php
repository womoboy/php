
<?php
    //variables
    $f_name = $_POST['f-Name'];
    $l_name = $_POST['l-Name'];
?>

<html>
    <head>
        <title>php tutorial</title>
    </head>
    <body>

        <?php
            if(isset($f_name) && $f_name !== '' && isset($l_name) && $l_name !== '') {
        ?>
            <p>information sended succesfull ! your information is :</p>
            <p>your first name is : <?php echo $f_name ?></p>
            <p>your last name is : <?php echo $l_name ?></p>

        <?php } else { ?>
        <form action="" method="post" autocomplete="FALSE">
            <input type="text" name="f-Name" placeholder="enter your first name">
            <input type="text" name="l-Name" placeholder="enter your last name">
            <input type="submit" value="Submit">
        </form>
        <?php }?>
    </body>
</html>
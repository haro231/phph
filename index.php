<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 03/05/2016
 * Time: 17:00
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice</title>
</head>
<body>
<h1>SPECS, MUGS & SAUSAG ROLLS</h1>
<form method = "post" action ="index.php">
    Name: <input type = "text" name = "name">
    Age: <input type = "number" name="age">
    <input type = "submit" name = "submit" value=" Submit">
</form>

<?php
$myage = $_POST ['age'];
$name = $_POST ['name'];

if ($myage >= 21){
    print "You can buy Specs, Mugs & Sausages";
}
elseif($myage >= 18){
    print "You can buy Specs & Mugs only";
}
elseif($myage >= 16){
    print "You can buy only Specs";
}
elseif($myage > 16){
    print "Come back when you are 16";
}

?>


</body>
</html>


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
<?php
$myage = "";
$name = "";
$wantedgood = ""
?>
<h1>SPECS, MUGS & SAUSAGE ROLLS</h1>
<form method = "post" action ="index.php">
    <h5>Name: <input type = "text" name = "name"></h5>
    <h5>Age: <input type = "number" name="age"></h5>
    <h5>Goods: <input type = "text" name="wantedgoods"></h5>
    <input type = "submit" name = "submit" value=" Submit">
</form>

<?php

$wantedgood = $_POST ['wantedgoods'];
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
else{
    print "Come back when you are 16";
}
?>
<br>
<?php
switch($wantedgood){
    case "Specs":
        echo "You have to be 16 to buy this";
        break;
    case "Mugs":
        echo "You have to be 18 to buy this";
        break;
    case "Sausages":
        echo "You need to be 21 to buy this";
        break;
    default:
        echo "Thank You";

}
?>


</body>
</html>


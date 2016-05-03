<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 03/05/2016
 * Time: 19:45
 */
?>

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

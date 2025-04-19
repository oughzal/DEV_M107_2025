<?php
// code PHP
/*
commentaire
sur
plusieurs 
lignes
*/
echo "DEV101";
echo "DEV";
define("CONST",5);
const C1 = 8;
$x = 4;
$nom = "var1";
$$nom = 5; // $var1 = 5
if(isset($_POST["nom"])){
 echo "<h1>" . $_POST["nom"] ."</h1>";
}

echo "<h1>$var1</h1>";
echo "<h1>".__DIR__."</h1>";
$x = 0b101_111_111;
echo "<h1 class=\"class1\"> $x</h1>";
$s = 'test $x';
$s2 = "test $x"

?>
<h1 class="c1"><?php echo $x ?></h1>
<form action="#" method="post">
    <input type="text" name="nom">
    <input type="submit" value="Envoyer">
</form>
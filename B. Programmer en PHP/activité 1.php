<?php

echo "Salut, nous somme me ". Date("d/m/Y");

if(Date("H")<12){
    echo "<h1>c'est le matin</h1>";
}else{
    echo "<h1>c'est l'apes-midi</h1>";
}

?>

<?php if(Date("H")<12): ?>
    <h1><"<?php echo "est le matin"?></h1>
<?php else: ?>
    <h1><?php echo "c'est le matin"?></h1>
<?php endif ?>

<?php echo $_SERVER["HTTP_HOST"]; ?>
<!-- <?php //echo gethostbyaddr($_SERVER["HTTP_HOST"]); ?> -->

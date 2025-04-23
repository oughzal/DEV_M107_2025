<?php
// instruction if
// La structure de base de l'instruction if est la suivante :
    const condition1 = true;
    const condition2 = false;
    const condition3 = false;
if (condition1) {
    // instructions à exécuter si la condition1 est vraie
} elseif(condition2) {
    // instructions à exécuter si la condition2 est vraie
    // et les conditions précédentes sont fausses
} elseif(condition3) {
    // instructions à exécuter si la condition3 est vraie
    // et les conditions précédentes sont fausses
    // et ainsi de suite pour d'autres conditions

}else{
    // instructions à exécuter si aucune des conditions n'est vraie
}
?>

<?php if ($condition1 == true): ?>
    Ceci sera affiché si l'expression1 est vrai.
<?php elseif ($condition2 == true): ?>
    Ceci sera affiché si l'expression2 est vrai. et les conditions précédentes sont fausses.
<?php elseif ($condition3 == true): ?>
    Ceci sera affiché si l'expression3 est vrai. et les conditions précédentes sont fausses.
    ainsi de suite pour d'autres conditions
<?php else: ?>
    Ceci sera affiché si aucune des conditions n'est vraie.
<?php endif; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?" method="">
        <input type="text" name="nom" value="nom1"><br>
        <input type="text" name="prenom" value="prénom1"><br>
        <input type="radio" name="sexe" value="F" checked> F<br>
        <input type="radio" name="sexe" value="M"> M<br>
        <input type="checkbox" name="cours[]" value="simple"> Simple<br>
        <input type="checkbox" name="cours[]" value="moyen"> Moyen<br>
        <input type="checkbox" name="cours[]" value="difficile"> Difficile<br>
        <input type="submit" value="envoyer">
    </form>
<pre>
    <?php var_dump($_REQUEST)?>
</pre>
<?php if(isset($_REQUEST["nom"])):?>
<table>
    <tr>
        <td>Nom</td>
        <td><?=$_REQUEST["nom"] ?></td>
    </tr>
        <tr>
        <td>Nom</td>
        <td><?=$_REQUEST["nom"] ?></td>
    </tr>
        <tr>
        <td>prenom</td>
        <td><?=$_REQUEST["prenom"] ?></td>
    </tr>
        <tr>
        <td>Sexe</td>
        <td><?=($_REQUEST["sexe"]=="F")?"Femme":"Homme" ?></td>
        <tr>
            
                <td>Cours</td>
                <td>
                <?php foreach($_REQUEST["cours"] as $c): // for e in L ?>
                    <p><?=$c ?></p>
                <?php endforeach;?>
                </td>
        </tr>
    </tr>
    
</table>
<?php endif; ?> 
</body>
</html>
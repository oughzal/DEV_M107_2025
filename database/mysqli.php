<?php
// créer une connexion Mysqli
$con = mysqli_connect("localhost","root","root","php",33066);

// exécuter une requête SQL
$sql = " select * from stagiaire";
$result = mysqli_query($con,$sql);
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
    </tr>
<?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?=$row[0] ?></td>
        <td><?=$row[1] ?></td>
        <td><?=$row[2] ?></td>
    </tr>

<?php endwhile; ?>
</table>


<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
    </tr>
<?php
$pdo = new PDO("mysql:host=localhost:33066;dbname=php", "root", "root");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into stagiaire (nom, prenom) values (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['nom'],
    $_POST['prenom']

]);
$sql = "SELECT * FROM stagiaire";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($result as $row) :
?>
    <tr>
        <td><?= $row->id ?></td>
        <td><?= $row->nom ?></td>
        <td><?= $row->prenom ?></td>
    </tr>
<?php endforeach; ?>
</table>
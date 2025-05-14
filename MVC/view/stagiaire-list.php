<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Groupe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stagiaires as $stagiaire): ?>
            <tr>
                <td><?=$stagiaire["id"]?></td>
                <td><?=$stagiaire["nom"]?></td>
                <td><?=$stagiaire["prenom"]?></td>
                <td><?=$stagiaire["groupe"]?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
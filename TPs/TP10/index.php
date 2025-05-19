<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <script src="../../assets/bootstrap.bundle.js"></script>
</head>
<body>
  <div class="container mt-5">
    <h1 class="h1">Liste</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
            <th>CIN</th>
            <th>nom Complet</th>
            <td>service</td>
            <th>action</th>  
            </tr>
          
        </thead>
        <tbody>
        <?php
        require_once('connexion.php');
        $query = "SELECT e.*,s.intitulé as service FROM employés e join services s on e.service_id = s.id";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['CIN'] . "</td>";
                echo "<td>" . $row['nomComplet'] . "</td>";
                echo "<td>" . $row['dateNaissance'] . "</td>";
                echo "<td>" . $row['service'] . "</td>";
                echo "<td>
                        <a href='modifier.php?id=" . $row['id'] . "' class='btn btn-primary'>Modifier</a>
                        <a href='supprimer.php?id=" . $row['id'] . "' class='btn btn-danger delete'>Supprimer</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Aucun enregistrement trouvé</td></tr>";
        }
        ?>
        </tbody>
    </table>
  </div> 
  <script>
    function deleteRecord(element){
        element.onclick = function(event) {
        if(! confirm("Voulez-vous vraiment supprimer cet enregistrement ?")) {
            event.preventDefault();
        }
    }
    }
    let deleteButtons = document.querySelectorAll('.delete');
    deleteButtons.forEach(function(button) {
        button.onclick =  function(event) {
            if (!confirm("Voulez-vous vraiment supprimer cet enregistrement ?")) {
                event.preventDefault();
            }
        }
    });
  </script> 
</body>
</html>
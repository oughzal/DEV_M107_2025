<?php
// Connexion à la base de données SQLite
$db = new PDO('sqlite:' . __DIR__ . '/users.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Création de la table si elle n'existe pas
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    prenom TEXT NOT NULL
)");

// Définir les en-têtes
header("Content-Type: application/json");

// Récupérer la méthode HTTP
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

// Routes CRUD
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            // Récupérer un utilisateur par ID
            $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->execute([':id' => $_GET['id']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            echo json_encode($user ?: ["message" => "User not found"]);
        } else {
            // Récupérer tous les utilisateurs
            $stmt = $db->query("SELECT * FROM users");
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($users);
        }
        break;

    case 'POST':
        // Créer un nouvel utilisateur
        if (!empty($input['nom']) && !empty($input['prenom'])) {
            $stmt = $db->prepare("INSERT INTO users (nom, prenom) VALUES (:nom, :prenom)");
            $stmt->execute([':nom' => $input['nom'], ':prenom' => $input['prenom']]);
            echo json_encode(["message" => "User created", "id" => $db->lastInsertId()]);
        } else {
            echo json_encode(["error" => "Invalid input"]);
        }
        break;

    case 'PUT':
        // Mettre à jour un utilisateur
        if (isset($_GET['id']) && !empty($input['nom']) && !empty($input['prenom'])) {
            $stmt = $db->prepare("UPDATE users SET nom = :nom, prenom = :prenom WHERE id = :id");
            $stmt->execute([':nom' => $input['nom'], ':prenom' => $input['prenom'], ':id' => $_GET['id']]);
            echo json_encode(["message" => "User updated"]);
        } else {
            echo json_encode(["error" => "Invalid input or missing ID"]);
        }
        break;

    case 'DELETE':
        // Supprimer un utilisateur
        if (isset($_GET['id'])) {
            $stmt = $db->prepare("DELETE FROM users WHERE id = :id");
            $stmt->execute([':id' => $_GET['id']]);
            echo json_encode(["message" => "User deleted"]);
        } else {
            echo json_encode(["error" => "Missing ID"]);
        }
        break;

    default:
        echo json_encode(["error" => "Unsupported HTTP method"]);
        break;
}
?>
<?php
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';
switch ($controller) {
    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        break;
    case 'produit':
        require_once 'controllers/ProduitController.php';
        $controller = new ProduitController();
        break;
    case 'employe':
        require_once 'controllers/EmployeController.php';
        $controller = new EmployeController();
        break;
    default:
        die('Controller not found');
}
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('Action not found');
}

?>
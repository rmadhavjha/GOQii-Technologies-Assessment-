<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0); 
}
require_once 'user_controller.php';


$method = $_SERVER['REQUEST_METHOD'];
$userController = new UserController();

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $user = $userController->getUserById($_GET['id']);
            echo json_encode($user);
        } else {
            $users = $userController->getUsers();
            echo json_encode($users);
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        $userController->createUser($data->name, $data->email, $data->password, $data->dob);
        echo json_encode(['message' => 'User created']);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"));
        $userController->updateUser($data->id, $data->name, $data->email, $data->password, $data->dob);
        echo json_encode(['message' => 'User updated']);
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents("php://input"));
        $userController->deleteUser($data->id);
        echo json_encode(['message' => 'User deleted']);
        break;

    default:
        echo json_encode(['message' => 'Method not allowed']);
        break;
}

?>

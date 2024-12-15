<?php
include_once 'db.php';

class UserController {
    public function createUser($name, $email, $password, $dob) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, dob) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, password_hash($password, PASSWORD_DEFAULT), $dob);
        $stmt->execute();
        $stmt->close();
    }

    public function getUsers() {
        global $conn;
        $result = $conn->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateUser($id, $name, $email, $password, $dob) {
        global $conn;
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, password = ?, dob = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $email, password_hash($password, PASSWORD_DEFAULT), $dob, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteUser($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
?>

<?php

class Task {
    private $conn;

    public function __construct($conn) { // Type hint for better code clarity
        $this->conn = $conn;
    }

    public function add(string $title): void { // Type hint and return type
        $stmt = $this->conn->prepare("INSERT INTO todo (title) VALUES (?)");
        $stmt->execute([$title]);
    }

    public function toggle(int $id): void { // Type hint and return type
        $stmt = $this->conn->prepare("UPDATE todo SET done = 1 - done WHERE id = ?"); // More efficient toggle
        $stmt->execute([$id]);
    }

    public function delete(int $id): void { // Type hint and return type
        $stmt = $this->conn->prepare("DELETE FROM todo WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getAll(): array {
        $stmt = $this->conn->query("SELECT * FROM todo");
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }
}
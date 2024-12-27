<?php
namespace App;
class Task {
  private $conn;
  public function __construct($conn) {
    $this->conn = $conn;
  }
  public function add($title) {
    $insertTaskQuery = $this->conn->prepare("INSERT INTO todo (title) VALUES (?);");
    $insertTaskQuery->execute([$title]);
  }
  public function toggle($id) {
    if ($id === '0') {
      $updateTask = $this->conn->prepare('update todo set done=1 where id=?');
    } else {
      $updateTask = $this->conn->prepare('update todo set done=0 where id=?');
    }
    $updateTask->execute([$id]);
  }
  public function delete($id) {
    $deletTaskQuery = $this->conn->prepare('DELETE FROM todo WHERE id=?');
    $deletTaskQuery->execute([$id]);
  }
}
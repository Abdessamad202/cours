<?php
if (isset($_POST['delete'])) {
  $deletTaskQuery = $conn->prepare('DELETE FROM todo WHERE id=?');
  $deletTaskQuery->execute([$_POST['task_id']]);
}
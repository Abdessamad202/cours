<?php
if (isset($_POST['toggle'])) {
  echo "yes";
  if ($_POST['toggle'] === '0') {
    $updateTask = $conn->prepare('update todo set done=1 where id=?');
  } else {
    $updateTask = $conn->prepare('update todo set done=0 where id=?');
  }
  $updateTask->execute([$_POST['task_id']]);
  # code...
}
<?php
if (isset($_POST['toggle'])) {
  $task->toggle($_POST['task_id']);
  # code...
}
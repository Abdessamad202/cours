<?php
if (isset($_POST['delete'])) {
  $task->delete($_POST['task_id']);
}
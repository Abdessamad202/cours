<?php
if (isset($_POST["new"])) {
  if(trim($_POST['title']) === ''){
    $error = 'the title should not be empty';
  }else{
    $task->add($_POST['title']);
  }
  // echo "good";
  # code...
}
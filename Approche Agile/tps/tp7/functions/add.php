<?php
if (isset($_POST["new"])) {
  if(trim($_POST['title']) === ''){
    $error = 'the title should not be empty';
  }else{
    $insertTaskQuery = $conn->prepare("INSERT INTO todo (title) VALUES (?);");
    $insertTaskQuery->execute([$_POST["title"]]);
  }
  // echo "good";
  # code...
}
<?php
require('connexion.php');
require('operations/add.php');
require('operations/toggle.php');
require('operations/delete.php');
// var_dump($tasks)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    .form-control,
    .form-control:focus {
      /* border: none !important; */
      box-shadow: none !important;
      height: 100%;
    }

    form {
      margin-bottom: 0;
      height: 100%;
    }

    form * {
      height: 100%;

    }

    i {
      padding: 0;
    }
  </style>
</head>

<body>
  <div class="container mt-5 d-flex justify-content-center">
    <form class="w-50 h-100" action="" method="post">
      <div class="input-group mb-3 h-100">
        <input type="text" class="form-control" name="title" placeholder="Enter The Task Title"
          aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" name="new" type="submit" id="button-addon2">Button</button>
      </div>
      <p class="text-danger"><?= isset($error) === true ? $error : "" ?></p>
    </form>
  </div>

  <div class="container mt-5 d-flex justify-content-center ">
    <div class="row w-50">
      <?php
      include_once 'tasks.php'
      ?>
    </div>
  </div>
</body>
</html>
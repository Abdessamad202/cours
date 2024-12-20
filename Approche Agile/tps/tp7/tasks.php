<?php
$tasksQuery = $conn->query("select * from todo");
$tasks = $tasksQuery->fetch_all(MYSQLI_ASSOC);
foreach ($tasks as $task) {
  # code...
?>
  <div class="col-12">
    <div class="alert alert-<?= $task['done'] === '1' ? 'success' : 'warning' ?> d-flex justify-content-between align-items-center" role="alert">
      <div class="task">
        <?= $task['title'] ?>
      </div>
      <div class="actions d-flex gap-3">
        <div class="switch">
          <form action="" method="post">
            <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
            <button type="submit" class="btn btn-primary" value="<?= $task['done'] ?>" name="toggle"><?= $task['done'] === '1' ? 'Undo' : 'Done' ?>
            </button>
          </form>
        </div>
        <div class="delete">
          <form action="" method="post">
            <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
            <button type="submit" class="btn btn-danger pt-2 d-flex align-items-center justify-content-center" name="delete"><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
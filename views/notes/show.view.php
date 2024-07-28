<?php require base_path('views/partials/head.php') ?>

<body>
  <?php require base_path('views/partials/header.php') ?>
  <main>
    <div class="note">
      <li><?= htmlspecialchars($note['body']) ?></li>
      <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <button style="margin-top:16px">Delete</button>
        <input type="hidden" name="note_id" value="<?= $note['id'] ?>">
      </form>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php') ?>
</body>

</html>
<?php require base_path('views/partials/head.php') ?>

<body>
  <?php require base_path('views/partials/header.php') ?>
  <main>
    <div class="note">
      <li><?= htmlspecialchars($note['body']) ?></li>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php') ?>
</body>

</html>
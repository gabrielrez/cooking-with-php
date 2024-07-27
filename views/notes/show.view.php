<?php require('views/partials/head.php') ?>

<body>
  <?php require('views/partials/header.php') ?>
  <main>
    <div class="note">
      <li><?= htmlspecialchars($note['body']) ?></li>
    </div>
  </main>
  <?php require('views/partials/footer.php') ?>
</body>

</html>
<?php require('partials/head.php') ?>

<body>
  <?php require('partials/header.php') ?>
  <main>
    <p>This is the <?= $heading ?> Page</p>
    <br>
    <div class="notes">
      <?php foreach ($notes as $note) : ?>
        <li class="note">
          <a href="/note?id=<?= $note['id'] ?>"><?= $note['body'] ?></a>
        </li>
      <?php endforeach; ?>
    </div>
  </main>
  <?php require('partials/footer.php') ?>
</body>

</html>
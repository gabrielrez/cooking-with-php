<?php require('views/partials/head.php') ?>

<body>
  <?php require('views/partials/header.php') ?>
  <main>
    <p>This is the <?= $heading ?> Page</p>
    <br>
    <div class="notes">
      <ul>
        <?php foreach ($notes as $note) : ?>
          <li class="note">
            <a href="/note?id=<?= $note['id'] ?>">
              <?= htmlspecialchars($note['body']) ?> - <?= htmlspecialchars($note['user_id']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <p style="margin-top: 32px;">
      <a href="/notes/create" style="color: #000">Create Note</a>
    </p>
  </main>
  <?php require('views/partials/footer.php') ?>
</body>

</html>
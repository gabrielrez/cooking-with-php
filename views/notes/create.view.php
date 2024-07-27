<?php require('views/partials/head.php') ?>

<body>
  <?php require('views/partials/header.php') ?>
  <main>
    <form action="" method="POST">
      <label style="display: block;" for="body">Body</label>
      <textarea name="body" id="body" required style="margin-top:8px;"></textarea>
      <?php
      if (isset($errors['body'])) {
        echo "<p>" . htmlspecialchars($errors['body'], ENT_QUOTES, 'UTF-8') . "</p>";
      }
      ?>
      <p>
        <button style="margin-top:32px;">Create</button>
      </p>
    </form>
  </main>
  <?php require('views/partials/footer.php') ?>
</body>

</html>
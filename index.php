<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Agenda Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Agenda Mahasiswa</h1>
  <form method="POST">
    <input type="text" name="agenda" placeholder="Tambah agenda..." required>
    <button type="submit">Tambah</button>
  </form>
  <ul>
    <?php foreach (getAgendas() as $a): ?>
      <li><?= htmlspecialchars($a) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
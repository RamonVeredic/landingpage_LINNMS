<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php require BASE_PATH . '/public/views/partials/head.php'; ?>
<body>
<div class="linnms__loader__page" id="linnms__loader__page">
  <div class="spinner-grow" role="status">
    <span class="visually-hidden">Memuat halaman...</span>
  </div>
</div>
<?php require BASE_PATH . '/public/views/partials/navigation.php'; ?>
<?= $content ?>
<?php require BASE_PATH . '/public/views/partials/footer.php'; ?>
<script src="<?= asset('js/script.js') ?>" defer></script>
</body>
</html>

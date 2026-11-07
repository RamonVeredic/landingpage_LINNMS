<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php require BASE_PATH . '/resources/views/partials/head.php'; ?>
<body class="<?= e($bodyClass ?? '') ?>">
<?php require BASE_PATH . '/resources/views/partials/navigation.php'; ?>
<?= $content ?>
<?php require BASE_PATH . '/resources/views/partials/footer.php'; ?>
<script src="<?= asset('js/script.js') ?>" defer></script>
</body>
</html>

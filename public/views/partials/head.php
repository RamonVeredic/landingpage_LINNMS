  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#18181b" />
    <script>document.documentElement.classList.add('linnms__page__loading');</script>
    <meta name="description" content="<?= htmlspecialchars($pageDescription ?? 'LINNMS Network Management', ENT_QUOTES, 'UTF-8') ?>" />
    <title><?= htmlspecialchars($pageTitle ?? 'LINNMS', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="<?= asset('vendor/bootstrap/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= asset('vendor/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= asset('css/styles.css') ?>" />
    <?php if (($activePage ?? '') === 'home'): ?>
    <link rel="stylesheet" href="<?= asset('css/home.css') ?>" />
    <?php endif; ?>
    <?php if (($activePage ?? '') === 'docs'): ?>
    <link rel="stylesheet" href="<?= asset('css/docs.css') ?>" />
    <?php endif; ?>
    <?php if (($activePage ?? '') === 'about'): ?>
    <link rel="stylesheet" href="<?= asset('css/about.css') ?>" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?= asset('vendor/bootstrap/icons/bootstrap-icons.min.css') ?>" />
    <link rel="icon" href="<?= asset('favicon.ico') ?>" sizes="any" />
    <script src="<?= asset('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>" defer></script>
  </head>

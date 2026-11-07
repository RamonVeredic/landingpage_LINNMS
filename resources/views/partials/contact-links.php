<?php
$email = site('email');
$phone = site('phone');
$whatsapp = preg_replace('/\D/', '', $phone);
?>
<a href="<?= e($email !== '' ? 'mailto:' . $email : '#') ?>">
  <i class="bi bi-envelope" aria-hidden="true"></i>
  <span>Email<?php if ($email !== ''): ?><span class="contact-value"><?= e($email) ?></span><?php endif; ?></span>
</a>
<a href="<?= e($whatsapp !== '' ? 'https://wa.me/' . $whatsapp : '#') ?>">
  <i class="bi bi-whatsapp" aria-hidden="true"></i>
  <span>WhatsApp<?php if ($phone !== ''): ?><span class="contact-value"><?= e($phone) ?></span><?php endif; ?></span>
</a>

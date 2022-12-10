<?php if (logged_in()) : ?>
<?= $this->include('pages/users/admin/index'); ?>

<?php else : ?>
<?= $this->include('landing_page'); ?>
<?php endif; ?>
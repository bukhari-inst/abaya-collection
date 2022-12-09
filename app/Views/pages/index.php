<?php if (logged_in()) : ?>
<?= $this->include('pages/users/index'); ?>

<?php else : ?>
<?= $this->include('landing_page'); ?>
<?php endif; ?>
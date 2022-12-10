<?php if (in_groups('Staff')) : ?>

<?= $this->include('pages/users/staff/index'); ?>

<?php elseif (in_groups('Manager')) : ?>

<?= $this->include('pages/users/manager/index'); ?>

<?php elseif (in_groups('Customers')) : ?>

<?= $this->include('pages/users/customer/index'); ?>

<?php endif; ?>
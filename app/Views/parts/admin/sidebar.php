<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('/dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('/hero') ?>">
                <i class="bi bi-grid"></i>
                <span>Hero</span>
            </a>
        </li>

        <?php if (in_groups('Staff')) : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= site_url('/produk') ?>">
                        <i class="bi bi-circle"></i><span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('/produkItems') ?>">
                        <i class="bi bi-circle"></i><span>Produk Items</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <?php endif ?>

        <?php if (in_groups('Manager')) : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= site_url('/produkItems') ?>">
                <i class="bi bi-menu-button-wide"></i>
                <span>Produk</span>
            </a>
        </li>
        <?php endif ?>
    </ul>

</aside>
<?= $this->include('parts/header'); ?>

<!-- Navbar -->
<?= $this->include('parts/navbar'); ?>
<!-- / Navbar-->

<!-- Main Section-->
<section class="mt-0 ">
    <!-- Page Content Goes Here -->

    <!-- / Hero Section -->
    <?= $this->include('parts/hero'); ?>
    <!--/ Hero Section-->

    <!-- Featured Brands-->
    <div class="mb-lg-7 bg-light py-4" data-aos="fade-in">
        <div class="container">
            <div class="row gx-3 align-items-center">
                <div
                    class="col-12 justify-content-center justify-content-md-between align-items-center d-flex flex-wrap">
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Kathmandu">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-1.svg" alt="img">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Billabong">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-2.svg" alt="img">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Oakley">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-9.svg" alt="img">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Patagonia">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-4.svg" alt="img">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop North Face">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-5.svg" alt="img">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Salomon">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-7.svg" alt="img">
                        </a>
                    </div>
                    <a href="#" class="btn btn-link fw-bolder">Explore All Brands <i
                            class="ri-arrow-right-line align-bottom fw-bold"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--/ Featured Brands-->

    <!-- Staff Picks-->
    <section class="mb-9 mt-5" data-aos="fade-up">
        <div class="container brand-section">
            <div class="w-md-50 mb-5">
                <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Rekomendasi Abaya</p>
                <h2 class="display-5 fw-bold mb-3">Abaya Terlaris</h2>
                <p class="lead">Kami menyediakan berbagai macam gaya namun sederhana dalam berbagai desain dan
                    kain
                    untuk dipilih.</p>
            </div>
            <!-- Swiper Latest -->
            <div class="swiper-container overflow-visible" data-swiper data-options='{
                    "spaceBetween": 25,
                    "cssMode": true,
                    "roundLengths": true,
                    "scrollbar": {
                      "el": ".swiper-scrollbar",
                      "hide": false,
                      "draggable": true
                    },      
                    "navigation": {
                      "nextEl": ".swiper-next",
                      "prevEl": ".swiper-prev"
                    },  
                    "breakpoints": {
                      "576": {
                        "slidesPerView": 1
                      },
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      },
                      "1200": {
                        "slidesPerView": 4
                      }            
                    }
                  }'>
                <div class="swiper-wrapper pb-5 pe-1">
                    <?php foreach ($produk as $prd) : ?>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url('/assets/images/products/cover/' . $prd->prdFileName); ?>"
                                        alt="<?= $prd->prdFileName ?>">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title=""
                                        src="<?= base_url('/assets/images/products/' . $prd->prdtFileName); ?>"
                                        alt="<?= $prd->prdtFileName ?>">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick
                                        Add</span>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                        <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                        <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 90%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="#"><?= $prd->nama ?></a>
                                <p class="fw-bolder m-0 mt-2">
                                    <?= "Rp " . number_format($prd->harga, 2, ',', '.'); ?>
                                </p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <?php endforeach; ?>
                    <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                        <a href="<?= base_url('/category') ?>"
                            class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                            <span class="btn btn-dark btn-icon mb-3"><i
                                    class="ri-arrow-right-line ri-lg lh-1"></i></span>
                            <span class="lead fw-bolder">Lihat Semua</span>
                        </a>
                    </div>
                </div>

                <!-- Buttons-->
                <div
                    class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4">
                    <i class="ri-arrow-left-s-line ri-lg"></i>
                </div>
                <div
                    class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5">
                    <i class="ri-arrow-right-s-line ri-lg"></i>
                </div>

                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>

            </div>
            <!-- / Swiper Latest-->
        </div>
    </section>
    <!-- / Staff Picks-->

    <!-- Image Hotspot Banner-->
    <?= $this->include('parts/hotspot_banner'); ?>

    <!-- Linked Product Carousels-->
    <?= $this->include('parts/product_carousels'); ?>

    <!-- Reviews -->
    <?= $this->include('parts/reviews'); ?>
</section>
<!-- / Main Section-->

<!-- Footer -->
<?= $this->include('parts/footer'); ?>

<!-- Offcanvas Imports-->

<!-- Theme JS -->
<!-- Vendor JS -->
<?= $this->include('parts/end_footer'); ?>
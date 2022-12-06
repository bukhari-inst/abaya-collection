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
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Kathmandu">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-1.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Billabong">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-2.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Oakley">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-9.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Patagonia">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-4.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop North Face">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-5.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="./category.html" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Shop Salomon">
                            <img class="img-fluid d-table mx-auto"
                                src="<?= base_url(); ?>/assets/images/logos/logo-7.svg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </a>
                    </div>
                    <a href="./category.html" class="btn btn-link fw-bolder">Explore All Brands <i
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
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-1.jpg" alt="">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-1b.jpg" alt="">
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
                                    href="./product.html">Black Series</a>
                                <p class="fw-bolder m-0 mt-2">Rp 650.000</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-25%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-2.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 60%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>725.000</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>1.500.000</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-65%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-3.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 20%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (754)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Catleya Dress</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>750.000</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>1.100.000</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-4.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 70%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Kanna Dress</a>
                                <p class="fw-bolder m-0 mt-2">Rp730.000</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-5.jpg" alt="">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-5b.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 84%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.8 (189)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Maida Dress</a>
                                <p class="fw-bolder m-0 mt-2">Rp650.000</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-6.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 60%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.5 (1567)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Ecrin Dress</a>
                                <p class="fw-bolder m-0 mt-2">Rp750.999</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-13%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-7.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 60%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Syirin Set</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>599.550</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>750.000</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-33%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="<?= base_url(); ?>/assets/images/products/product-8.jpg" alt="">
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
                                        <div class="position-absolute stars" style="width: 20%">
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
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (754)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                    href="./product.html">New Arrival - Aghna Set</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>679.55</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>750.000</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                        <a href="./category.html"
                            class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                            <span class="btn btn-dark btn-icon mb-3"><i
                                    class="ri-arrow-right-line ri-lg lh-1"></i></span>
                            <span class="lead fw-bolder">See All</span>
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
    <section class="my-10 position-relative">
        <!-- SVG Shape Divider-->
        <div class="position-absolute z-index-50 text-white top-0 start-0 end-0">
            <svg class="align-self-start d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25">
                <polygon fill="currentColor" points="1283 0 0 0 0 53.25 1283 0" />
            </svg>
        </div>
        <!-- /SVG Shape Divider-->

        <div class="w-100 h-100 bg-img-cover bg-pos-center-center hotspot-container py-5 py-md-7 py-lg-10"
            style="background-image: url(<?= base_url() ?>/assets/images/banners/banner-5.jpg);">
            <div class="hotspot d-none d-lg-block" data-options='{
                    "placement": {
                        "left": "68%",
                        "bottom": "40%"
                    },
                    "alwaysVisible": true,
                    "alwaysAnimate": true,
                    "contentTarget": "#hotspot-one",
                    "trigger": "mouseenter"
                }'>
            </div>
            <div class="hotspot d-none d-lg-block" data-options='{
                    "placement": {
                        "left": "53%",
                        "top": "40%"
                    },
                    "alwaysVisible": true,
                    "alwaysAnimate": true,
                    "contentTarget": "#hotspot-one"
                }'>
            </div>
            <div class="container py-lg-8 position-relative z-index-10 d-flex align-items-center" data-aos="fade-left">
                <div
                    class="py-8 d-flex justify-content-end align-items-start align-items-lg-end flex-column col-lg-4 text-lg-end">
                    <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Kualitas Terbaik</p>
                    <h2 class="display-5 fw-bold mb-3">Nyaman Dipakai</h2>
                    <p class="lead d-none d-lg-block">Mencari abaya? Anda di tempat yang tepat! Koleksi kami
                        menyediakan bermacam-macam desain modis dan fashion tinggi. Anda akan menemukan abaya sempurna
                        yang Anda sukai. Tersedia dalam berbagai
                        panjang dan ukuran, penuh dengan desain elegan. Kami akan membuat Anda menarik di
                        setiap kesempatan.</p>
                    <a class="text-decoration-none fw-bolder" href="#">Berbelanja sekarang &rarr;</a>
                </div>
            </div>

            <!-- Example Hotspot HTML Content -->
            <div id="hotspot-one" class="d-none">
                <div class="m-n2 rounded overflow-hidden">
                    <div class="mb-1 bg-light d-flex justify-content-center">
                        <div class="f-w-48 px-3 pt-3">
                            <img class="img-fluid" src="<?= base_url(); ?>/assets/images/products/product-3.jpg"
                                alt="Bootstrap 5 Template by Pixel Rocket">
                        </div>
                    </div>
                    <div class="px-4 py-4 text-center">
                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 80%">
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
                            </div> <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                        </div>
                        <p class="mb-0 mx-4">New Arrival - Catleya Dress</p>
                        <p class="lead lh-1 m-0 fw-bolder mt-2 mb-3">Rp750.000</p>
                        <a href="./product.html" class="fw-bolder text-link-border pb-1 fs-6">Dress details <i
                                class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Shape Divider-->
        <div class="position-absolute z-index-50 text-white bottom-0 start-0 end-0">
            <svg class="align-self-end d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25">
                <polygon fill="currentColor" points="0 53.25 1283 53.25 1283 0 0 53.25" />
            </svg>
        </div>
        <!-- /SVG Shape Divider-->
    </section>
    <!-- / Image Hotspot Banner-->

    <!-- Linked Product Carousels-->

</section>
<!-- / Main Section-->

<!-- Footer -->
<!-- / Footer-->

<!-- Offcanvas Imports-->

<!-- Theme JS -->
<!-- Vendor JS -->
<script src="<?= base_url(); ?>/assets/js/vendor.bundle.js"></script>

<!-- Theme JS -->
<script src="<?= base_url(); ?>/assets/js/theme.bundle.js"></script>
</body>

</html>
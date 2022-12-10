<?= $this->include('parts/header'); ?>

<!-- Navbar -->
<?= $this->include('parts/navbar'); ?>
<!-- / Navbar-->

<!-- Main Section-->
<section class="mt-0 ">

    <!-- Category Top Banner -->
    <div class="py-6 bg-img-cover bg-dark bg-overlay-gradient-dark position-relative overflow-hidden mb-4 bg-pos-center-center"
        style="background-image: url(./assets/images/banners/banner-1.jpg);">
        <div class="container position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-6">
                    <li class="breadcrumb-item breadcrumb-light"><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active breadcrumb-light" aria-current="page">Category</li>
                </ol>
            </nav>
            <h1 class="fw-bold display-6 mb-4 text-white">Abaya Dress</h1>
            <div class="col-12 col-md-6">
                <p class="lead text-white mb-0">
                    Kami tahu betapa pentingnya merasa percaya diri, itu sebabnya kami di sini. Pilihan gaun abaya
                    elegan berkualitas tinggi kami akan menjadi tambahan yang sempurna untuk lemari pakaian Anda.
                </p>
            </div>
        </div>
    </div>
    <!-- Category Top Banner -->

    <div class="container">

        <div class="row">

            <!-- Category Aside/Sidebar -->
            <div class="d-none d-lg-flex col-lg-3">
                <div class="pe-4">
                    <!-- Category Aside -->
                    <aside>

                        <!-- Filter Category -->
                        <div class="mb-4">
                            <h2 class="mb-4 fs-6 mt-2 fw-bolder">Abaya Dress Category</h2>
                        </div>
                        <!-- / Filter Category-->

                        <!-- Price Filter -->
                        <div class="py-4 widget-filter widget-filter-price border-top">
                            <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                                data-bs-toggle="collapse" href="#filter-price" role="button" aria-expanded="true"
                                aria-controls="filter-price">
                                Price
                            </a>
                            <div id="filter-price" class="collapse show">
                                <div class="filter-price mt-6"></div>
                                <div class="d-flex justify-content-between align-items-center mt-7">
                                    <div class="input-group mb-0 me-2 border">
                                        <span
                                            class="input-group-text bg-transparent fs-7 ps-2 py-2 pe-1 text-muted border-0">Rp</span>
                                        <input type="number" min="00" max="1000" step="1"
                                            class="filter-min form-control-sm border flex-grow-1 text-muted border-0">
                                    </div>
                                    <div class="input-group mb-0 ms-2 border">
                                        <span
                                            class="input-group-text bg-transparent fs-7 ps-2 py-2 pe-1 text-muted border-0">Rp</span>
                                        <input type="number" min="00" max="1000" step="1"
                                            class="filter-max form-control-sm flex-grow-1 text-muted border-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Price Filter -->

                        <!-- Colour Filter -->
                        <div class="py-4 widget-filter border-top">
                            <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                                data-bs-toggle="collapse" href="#filter-colour" role="button" aria-expanded="true"
                                aria-controls="filter-colour">
                                Colour
                            </a>
                            <div id="filter-colour" class="collapse show">
                                <div class="filter-options mt-3">
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-primary">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-0">
                                        <label class="form-check-label" for="filter-colours-0"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-success">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-1">
                                        <label class="form-check-label" for="filter-colours-1"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-danger">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-2">
                                        <label class="form-check-label" for="filter-colours-2"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-info">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-3">
                                        <label class="form-check-label" for="filter-colours-3"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-warning">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-4">
                                        <label class="form-check-label" for="filter-colours-4"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-dark">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-5">
                                        <label class="form-check-label" for="filter-colours-5"></label>
                                    </div>
                                    <div
                                        class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-secondary">
                                        <input type="checkbox" class="form-check-color-input" id="filter-colours-6">
                                        <label class="form-check-label" for="filter-colours-6"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Colour Filter -->

                    </aside>
                    <!-- / Category Aside-->
                </div>
            </div>
            <!-- / Category Aside/Sidebar -->

            <!-- Category Products-->
            <div class="col-12 col-lg-9">

                <!-- Top Toolbar-->
                <div class="mb-4 d-md-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                        <small class="d-inline-block fw-bolder">Filtered by:</small>
                        <ul class="list-unstyled d-inline-block mb-0 ms-2">
                            <li class="bg-light py-1 fw-bolder px-2 cursor-pointer d-inline-block me-1 small">Type:
                                Slip On <i class="ri-close-circle-line align-bottom ms-1"></i></li>
                        </ul>
                        <span
                            class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                            All</span>
                    </div>
                    <div class="d-flex align-items-center flex-column flex-md-row">
                        <!-- Filter Trigger-->
                        <button
                            class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                            aria-controls="offcanvasFilters">
                            <i class="ri-equalizer-line me-2"></i> Filters
                        </button>
                        <!-- / Filter Trigger-->
                        <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
                            <p class="fs-xs fw-bold text-uppercase text-muted-hover p-0 m-0" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Sort By <i
                                    class="ri-arrow-drop-down-line ri-lg align-bottom"></i></p>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                        href="#">Price: Hi Low</a></li>
                                <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                        href="#">Price: Low Hi</a></li>
                                <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                        href="#">Name</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- / Top Toolbar-->

                <!-- Products-->
                <div class="row g-4 mb-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-1.jpg" alt="">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title="" src="./assets/images/products/product-1b.jpg"
                                        alt="">
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
                                    href="./product.html">New Arrival - Full Zip</a>
                                <p class="fw-bolder m-0 mt-2">Rp1129.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-25%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-2.jpg" alt="">
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
                                    href="./product.html">New Arrival - Sherpa</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>599.55</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>150.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-65%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-3.jpg" alt="">
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
                                    href="./product.html">New Arrival - Essentials</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>779.55</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>1100.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-4.jpg" alt="">
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
                                    href="./product.html">New Arrival - Elevated Lined</a>
                                <p class="fw-bolder m-0 mt-2">Rp1829.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-1.jpg" alt="">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title="" src="./assets/images/products/product-1b.jpg"
                                        alt="">
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
                                    href="./product.html">New Arrival - Full Zip</a>
                                <p class="fw-bolder m-0 mt-2">Rp1129.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-25%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-2.jpg" alt="">
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
                                    href="./product.html">New Arrival - Sherpa</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>599.55</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>150.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-65%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-3.jpg" alt="">
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
                                    href="./product.html">New Arrival - Essentials</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rp<span>779.55</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rp<span>1100.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-4.jpg" alt="">
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
                                    href="./product.html">New Arrival - Elevated Lined</a>
                                <p class="fw-bolder m-0 mt-2">Rp1829.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-5.jpg" alt="">
                                </picture>
                                <picture class="position-absolute z-index-20 start-0 top-0 hover-show bg-light">
                                    <img class="w-100 img-fluid" title="" src="./assets/images/products/product-5b.jpg"
                                        alt="">
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
                                    href="./product.html">New Arrival - Slab</a>
                                <p class="fw-bolder m-0 mt-2">Rp29.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title=""
                                        src="./assets/images/products/product-6.jpg" alt="">
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
                                    href="./product.html">New Arrival - Blocked Striped</a>
                                <p class="fw-bolder m-0 mt-2">Rp1329.99</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                </div>
                <!-- / Products-->

                <!-- Pagiation-->
                <!-- Pagination-->
                <nav class="border-top mt-5 pt-5 d-flex justify-content-between align-items-center"
                    aria-label="Category Pagination">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="ri-arrow-left-line align-bottom"></i> Prev</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item active mx-1"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mx-1"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mx-1"><a class="page-link" href="#">3</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Next <i
                                    class="ri-arrow-right-line align-bottom"></i></a></li>
                    </ul>
                </nav> <!-- / Pagination-->

            </div>
            <!-- / Category Products-->
        </div>
    </div>

</section>
<!-- / Main Section-->

<!-- Footer -->
<?= $this->include('parts/footer'); ?>

<!-- Theme JS -->
<!-- Vendor JS -->
<?= $this->include('parts/end_footer'); ?>
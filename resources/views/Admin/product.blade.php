
@extends('Admin.layouts.main')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <!-- ... (Your breadcrumb code here) ... -->
        </div>
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <!-- Display error message -->
        @if(session('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session('failed') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif 
    </div><!-- Closing tag for page-content -->
</div><!-- Closing tag for page-wrapper -->

<div class="page-wrapper">
    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-xl-2">
                                <a href="ecommerce-add-new-products.html" class="btn btn-light mb-3 mb-lg-0"><i
                                        class='bx bxs-plus-square'></i>محصول جدید</a>
                            </div>
                            <div class="col-lg-9 col-xl-10">
                                <form class="float-lg-end">
                                    <div class="row row-cols-lg-auto g-2">
                                        <div class="col-12">
                                            <div class="position-relative">
                                                <input type="text" class="form-control ps-5"
                                                    placeholder="جستجو کنید"> <span
                                                    class="position-absolute top-50 product-show translate-middle-y"><i
                                                        class="bx bx-search"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-light">مرتب سازی</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-chevron-down'></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-light">مجموعه</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bxs-category'></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-light">محدوده قیمت</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-slider'></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-start"
                                                        aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">لینک دراپ داون</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/01.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/02.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/03.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/04.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/05.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/06.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/07.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/08.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/09.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src="../../dashtrans_res/vertical/assets/images/products/10.png" class="card-img-top" alt="توضیحات تصویر">
                    <div class="">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                class="">-10%</span></div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title cursor-pointer">صندلی مدل آشیانه</h6>
                        <div class="clearfix">
                            <p class="mb-0 float-start"><strong>134</strong> فروش</p>
                            <p class="mb-0 float-end fw-bold"><span
                                    class="me-2 text-decoration-line-through">35000000</span><span
                                    class="text-white">2400000</span></p>
                        </div>
                        <div class="d-flex align-items-center mt-3 fs-6">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-white'></i>
                                <i class='bx bxs-star text-light-4'></i>
                                <i class='bx bxs-star text-light-4'></i>
                            </div>
                            <p class="mb-0 ms-auto">4.2(182)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="overlay toggle-icon"></div>

 <a href="javaScript:;" class="back-to-top"><i
        class='bx bxs-up-arrow-alt'></i></a>

<footer class="page-footer">
    <p class="mb-0">کپی رایت © 1402 . کلیه حقوق محفوظ است.</p>
</footer>
</div>


<div class="switcher-wrapper">
<div class="switcher-btn"> 
                    <i class='bx bx-cog bx-spin'></i>
</div>
<div class="switcher-body">
    <div class="d-flex align-items-center">
        <h5 class="mb-0 text-uppercase">سفارشی سازی ظاهر</h5>
        <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
    </div>
    <hr />
    <p class="mb-0">پس زمینه گاوسی</p>
    <hr>

    <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
    </ul>
    <hr>
    <p class="mb-0">رنگ های گرادیانت</p>
    <hr>

    <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
        <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
    </ul>
</div>
</div>


<script src="../../dashtrans_res/vertical/assets/js/bootstrap.bundle.min.js"></script>

<script src="../../dashtrans_res/vertical/assets/js/jquery.min.js"></script>
<script src="../../dashtrans_res/vertical/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="../../dashtrans_res/vertical/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="../../dashtrans_res/vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

<script src="../../dashtrans_res/vertical/assets/js/app.js"></script>
</body>


<!-- Mirrored from demos.sypna.ir/dashtrans/vertical/ecommerce-products by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 13:42:04 GMT -->
</html>
@endsection
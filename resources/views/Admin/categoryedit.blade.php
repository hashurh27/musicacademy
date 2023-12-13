@extends('Admin.layouts.main')

@section('content')




<div class="page-wrapper">
    <div class="page-content">

        
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">فروشگاهی</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                        <a href="javascript:;">

                    <i  class="bx bx-home-alt">
                        </i>
                        </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن محصول جدید</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-light">تنظیمات</button>
                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
                            class="dropdown-item" href="javascript:;">عملیات</a>
                        <a class="dropdown-item" href="javascript:;">عملیاتی دیگر</a>
                        <a class="dropdown-item" href="javascript:;">یک مورد دیگر</a>
                        <div class="dropdown-divider">
                        </div> <a class="dropdown-item" href="javascript:;">جداشده
                            با لینک</a>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">افزودن محصول جدید</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    @if ($categoryid)
                                        <form action="{{ route('category.update', ['category_id' => $categoryid->id]) }}" method="POST">
                                            @csrf
                                            <label for="inputProductTitle" class="form-label">عنوان محصول</label>
                                            <input name="title" type="text" class="form-control" id="inputProductTitle" placeholder="عنوان دسته بندی را وارد کنید">
                        
                                            <label for="inputProductTitle" class="form-label">عنوان محصول</label>
                                            <input name="slug" type="text" class="form-control" id="inputProductTitle" placeholder="نامک دسته بندی را وارد کنید">
                        
                                            <label for="inputProductDescription" class="form-label">توضیحات</label>
                                            <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                        
                                            <label for="inputProductDescription" class="form-label">تصاویر محصول</label>
                                            <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        
                                            <button type="submit" class="btn btn-light px-5">ثبت</button>
                                        </form>
                                    @else
                                        <p>Category not found.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">قیمت</label>
                                        <input type="email" class="form-control" id="inputPrice"
                                            placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCompareatprice" class="form-label">مقایسه با قیمت
                                            های</label>
                                        <input type="password" class="form-control" id="inputCompareatprice"
                                            placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCostPerPrice" class="form-label">هزینه برای هر
                                            محصول</label>
                                        <input type="email" class="form-control" id="inputCostPerPrice"
                                            placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputStarPoints" class="form-label">امتیاز ستاره</label>
                                        <input type="password" class="form-control" id="inputStarPoints"
                                            placeholder="00.00">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductType" class="form-label">نوع محصول</label>
                                        <select class="form-select" id="inputProductType">
                                            <option>
                        </option>
                                            <option value="1">یک</option>
                                            <option value="2">دو</option>
                                            <option value="3">سه</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputVendor" class="form-label">فروشنده</label>
                                        <select class="form-select" id="inputVendor">
                                            <option>
                        </option>
                                            <option value="1">یک</option>
                                            <option value="2">دو</option>
                                            <option value="3">سه</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputCollection" class="form-label">مجموعه</label>
                                        <select class="form-select" id="inputCollection">
                                            <option>
                        </option>
                                            <option value="1">یک</option>
                                            <option value="2">دو</option>
                                            <option value="3">سه</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductTags" class="form-label">تگ های محصول</label>
                                        <input type="text" class="form-control" id="inputProductTags"
                                            placeholder="تگ های محصول را وارد کنید">
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-light">ذخیره محصول</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>

    </div>
</div>


<div class="overlay toggle-icon">
                        </div>

 <a href="javaScript:;" class="back-to-top">
                        <i
        class='bx bxs-up-arrow-alt'>
                        </i>
                        </a>

<footer class="page-footer">
    <p class="mb-0">کپی رایت © 1402 . کلیه حقوق محفوظ است.</p>
</footer>
</div>


<div class="switcher-wrapper">
<div class="switcher-btn"> 
                    <i class='bx bx-cog bx-spin'>
                        </i>
</div>
<div class="switcher-body">
    <div class="d-flex align-items-center">
        <h5 class="mb-0 text-uppercase">سفارشی سازی ظاهر</h5>
        <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close">
                        </button>
    </div>
    <hr />
    <p class="mb-0">پس زمینه گاوسی</p>
    <hr>

    <ul class="switcher">
        <li id="theme1">
                        </li>
        <li id="theme2">
                        </li>
        <li id="theme3">
                        </li>
        <li id="theme4">
                        </li>
        <li id="theme5">
                        </li>
        <li id="theme6">
                        </li>
    </ul>
    <hr>
    <p class="mb-0">رنگ های گرادیانت</p>
    <hr>

    <ul class="switcher">
        <li id="theme7">
                        </li>
        <li id="theme8">
                        </li>
        <li id="theme9">
                        </li>
        <li id="theme10">
                        </li>
        <li id="theme11">
                        </li>
        <li id="theme12">
                        </li>
        <li id="theme13">
                        </li>
        <li id="theme14">
                        </li>
        <li id="theme15">
                        </li>
    </ul>
</div>
</div>


<script src="../../dashtrans_res/vertical/assets/js/bootstrap.bundle.min.js">
                        </script>

<script src="../../dashtrans_res/vertical/assets/js/jquery.min.js">
                        </script>
<script src="../../dashtrans_res/vertical/assets/plugins/simplebar/js/simplebar.min.js">
                        </script>
<script src="../../dashtrans_res/vertical/assets/plugins/metismenu/js/metisMenu.min.js">
                        </script>
<script src="../../dashtrans_res/vertical/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js">
                        </script>
<script src="../../dashtrans_res/vertical/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js">
                        </script>
<script>
$(document).ready(function () {
    $('#image-uploadify').imageuploadify();
})
</script>

<script src="../../dashtrans_res/vertical/assets/js/app.js">
                        </script>
</body>


<!-- Mirrored from demos.sypna.ir/dashtrans/vertical/ecommerce-add-new-products by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 13:42:06 GMT -->
</html>
@endsection
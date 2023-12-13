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
                                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">عنوان محصول</label>
                                        <input name="title" type="text" class="form-control" id="inputProductTitle" placeholder="عنوان محصول را وارد کنید">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">نامک </label>
                                        <input name="slug" type="text" class="form-control" id="inputProductTitle" placeholder="نامک محصول را وارد کنید">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">توضیحات</label>
                                        <textarea name="description" class="form-control" id="inputProductDescription" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">خلاصه محصول</label>
                                        <textarea name="summary" class="form-control" id="inputProductDescription" rows="3"></textarea>
                                    </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">تصاویر محصول</label>
                                    <input name="photo" id="image-uploadify" type="file"
                                        accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                        multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">قیمت</label>
                                        <input name="price" type="text" class="form-control" id="inputPrice"
                                            placeholder="00.00">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="inputCostPerPrice" class="form-label">موجودیstock برای 
                                            محصول</label>
                                        <input name="stock" type="text" class="form-control" id="inputCostPerPrice"
                                            placeholder="00.00">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputStarPoints" class="form-label">موجودی discountمحصول</label>
                                        <input name="discount" type="text" class="form-control" id="inputStarPoints"
                                            placeholder="00.00">
                                    </div>

                                    
                                    
                                    
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-light">ذخیره محصول</button>
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
</div>

@endsection
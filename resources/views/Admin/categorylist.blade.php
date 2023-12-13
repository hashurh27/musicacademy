
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
								<li class="breadcrumb-item"><a href="javascript:;">

							<i  class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">سفارشات</li>
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
								<div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">جداشده
									با لینک</a>
							</div>
						</div>
					</div>
				</div>
				


				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="جستجو کنید"> <span
									class="position-absolute top-50 product-show translate-middle-y"><i
										class="bx bx-search"></i></span>
							</div>

							<div class="ms-auto"><a href="javascript:;" class="btn btn-light radius-30 mt-2 mt-lg-0"><i
										class="bx bxs-plus-square"></i>افزودن سفارش جدید</a></div>
						</div>

						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#سفارش</th>
										<th>نام خریدار</th>
										<th>وضعیت</th>
										<th>قیمت کل</th>
										<th>تاریخ</th>
										<th>نمایش جزئیات</th>
										<th>عملیات</th>
									</tr>
								</thead>
								<tbody>
									@foreach($category as $cat)
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value=""
														aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">{{$cat->id}}</h6>
												</div>
											</div>
										</td>
										<td>{{$cat->title}}< </td>
										<td>
											<div class="badge rounded-pill bg-light p-2 text-uppercase px-3"><i
													class='bx bxs-circle me-1'></i> {{$cat->slug}}</div>
										</td>
										<td>4852000</td>
										<td>10 خرداد 1402</td>
										<td><button type="button" class="btn btn-light btn-sm radius-30 px-4">نمایش
												جزئیات</button></td>
												<td>
													<div class="d-flex order-actions">
														<a href="{{ route('category.edit', ['category_id' => $cat->id]) }}" class="edit-category" data-category-id="{{$cat->id}}">
															<i class='bx bxs-edit'></i>
														</a>
														
														<form action="{{ route('category.destroy', ['category_id' => $cat->id]) }}" method="POST">
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-danger">Delete Category</button>
														</form>
													</div>
												</td>
									</tr>
									@endforeach
									{{$category->links()}}
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>

<!-- Add this script tag before your custom script -->

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



		
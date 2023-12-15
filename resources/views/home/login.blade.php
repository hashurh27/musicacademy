@extends('home.layouts.notslider')
@section('content1')
<section class="form-page js-mouse-move-container">
    <div class="form-page__img bg-dark-1">
      <div class="form-page-composition">
        <div class="-bg"><img data-move="30" class="js-mouse-move" src="img/login/bg.png" alt="bg"></div>
        <div class="-el-1"><img data-move="20" class="js-mouse-move" src="img/home-9/hero/bg.png" alt="image"></div>
        <div class="-el-2"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/1.png" alt="icon"></div>
        <div class="-el-3"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/2.png" alt="icon"></div>
        <div class="-el-4"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/3.png" alt="icon"></div>
      </div>
    </div>

    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-6 col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">


              @if(session('success'))
              <div class="col-12">
                  <div class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-30 rounded-8">
                    <div class="text-success-2 lh-1 fw-500">             {{ session('success') }}
                  </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-success-2 size-20"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                  </div>
                </div>
      
         
              @endif
      
              <!-- Display error message -->
              @if(session('failed'))
               <div class="col-12">
                  <div class="d-flex items-center justify-between bg-error-1 pl-30 pr-20 py-30 rounded-8">
                    <div class="text-error-2 lh-1 fw-500">              {{ session('failed') }}            </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-error-2 size-20"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                  </div>
                </div>
              @endif
      
      
              @if($errors->any())
              
              <div class="col-12">
                  <div class="d-flex items-center justify-between bg-warning-1 pl-30 pr-20 py-30 rounded-8">
                    <div class="text-warning-2 lh-1 fw-500"> @foreach($errors->all() as $error) {{$error}} @endforeach</div>
                    <div class="text-warning-2 size-20" data-feather="x"></div>
                  </div>
                </div>
              @endif



              <h3 class="text-30 lh-13">ورود</h3>
              <p class="mt-10">آیا هنوز ثبت نام نکرده اید؟ <a href="signup.html" class="text-purple-1">ثبت نام رایگان</a></p>

              <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{Route('login.auth')}}" method="POST">
                @csrf
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">ایمیل  </label>
                  <input type="email" name="email" placeholder="admin">
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">رمز عبور</label>
                  <input type="password" name="password" placeholder="********">
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                    ورود
                  </button>
                </div>
              </form>

              <div class="lh-12 text-dark-1 fw-500 text-center mt-20">یـا ورود با حساب </div>

              <div class="d-flex x-gap-20 items-center justify-between pt-20">
                <div><button class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Facebook</button></div>
                <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Google</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
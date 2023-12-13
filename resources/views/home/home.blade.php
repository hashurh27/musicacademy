
@extends('home.layouts.main')

@section('content')
<section class="layout-pt-lg layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-15 justify-between items-center">
        <div class="col-lg-6">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">محبوب ترین دوره های ما</h2>

            <p class="sectionTitle__text ">بیش از 10000 طرح منحصر به فرد در لیست دوره های آنلاین</p>

          </div>

        </div>

        <div class="col-lg-auto">

          <a href="#" class="button -icon -purple-3 text-purple-1">
            همه دوره ها
            <i class="icon-arrow-top-right text-13 mr-10"></i>
          </a>

        </div>
      </div>

      <div class="relative">
        <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30" data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2 sm-2">
          <div class="swiper-wrapper pb-3">

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-1">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش NodeJs</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-2">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                      <div>
                        <div class="px-15 rounded-200 bg-purple-1">
                          <span class="text-11 lh-1 uppercase fw-500 text-white">ویژه</span>
                        </div>
                      </div>

                      <div>
                        <div class="px-15 rounded-200 bg-green-1">
                          <span class="text-11 lh-1 uppercase fw-500 text-dark-1">پرفروش</span>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش Python</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-3">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش Angular</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-4">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش BootStrap</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-5">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش Photoshop</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-6">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش Invision</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-7">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش Invision</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

            <div class="swiper-slide">
              <div data-anim-child="slide-up delay-8">

                <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
                  <div class="relative">
                    <div class="coursesCard__image overflow-hidden rounded-top-8">
                      <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                      <div class="coursesCard__image_overlay rounded-top-8"></div>
                    </div>
                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                    </div>
                  </div>

                  <div class="h-100 pt-15 pb-10 px-20">
                    <div class="d-flex items-center">
                      <div class="text-14 lh-1 text-yellow-1 ml-10">4.5</div>
                      <div class="d-flex x-gap-5 items-center">
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                        <div class="icon-star text-9 text-yellow-1"></div>
                      </div>
                      <div class="text-13 lh-1 mr-10">(1991)</div>
                    </div>

                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">آموزش React-Native</div>

                    <div class="d-flex x-gap-10 items-center pt-10">

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/1.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">6 دوره</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/2.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">28دقیقه</div>
                      </div>

                      <div class="d-flex items-center">
                        <div class="ml-8">
                          <img src="img/coursesCards/icons/3.svg" alt="icon">
                        </div>
                        <div class="text-14 lh-1">مقدماتی</div>
                      </div>

                    </div>

                    <div class="coursesCard-footer">
                      <div class="coursesCard-footer__author">
                        <img src="img/general/avatar-1.png" alt="image">
                        <div>علی صالحی</div>
                      </div>

                      <div class="coursesCard-footer__price">
                        <div>179</div>
                        <div>79000 تومان</div>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>

          </div>
        </div>


        <button class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-prev">
          <i class="icon icon-arrow-left text-24"></i>
        </button>

        <button class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-next">
          <i class="icon icon-arrow-right text-24"></i>
        </button>

      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-md bg-light-4">
    <div class="container">
      <div class="row y-gap-30 justify-between items-center">
        <div class="col-lg-6">
          <div class="composition -type-4">
            <div class="-el-1">
              <img class="w-1/1" src="img/home-7/courses/1.png" alt="image">
            </div>

            <div class="-el-2">
              <div class="px-40 py-40 sm:px-25 sm:py-25 bg-white shadow-4 rounded-8">
                <div class="d-inline-block">
                  <div class="px-15 py-8 rounded-200 bg-orange-1 text-11 lh-1 text-white">مربیان ویژه</div>
                </div>
                <div class="text-18 lh-18 text-dark-1 fw-500 mt-30">“تدریس در یک پلتفرم آموزشی یک تجربه ی بسیار فوق العاده است”</div>
                <div class="mt-30">
                  <div class="text-15 lh-12 text-dark-1 fw-500">مینا محمدی</div>
                  <div class="text-14 lh-12 mt-5">طراح، ایده پرداز</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-lg-6 col-md-9">
          <h3 class="text-35 md:text-30 lh-11 ff-estedad">تدریس <span class="text-purple-1">دوره های آموزشی</span> توسط مربیان باتجربه</h3>
          <p class="mt-25">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ<br class="lg:d-none"> و با استفاده از طراحان گرافیک است.</p>
          <div class="d-flex x-gap-15 y-gap-15 flex-wrap pt-30">
            <div>
              <a href="#" class="button -md -dark-1 text-white">سایر مربیان</a>
            </div>
            <div>
              <a href="#" class="button -md -outline-dark-1 text-dark-1">مدرس شوید</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-80 pb-80 md:pt-60 md:pb-60 bg-purple-1">
    <div class="container">
      <div class="row y-gap-20 justify-between items-center">
        <div class="col-xl-4 col-lg-5">
          <h2 class="text-30 lh-15 text-white ff-estedad">پیدا کردن دوره های مناسب شما</h2>
          <p class="text-white mt-10">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>

        <div class="col-auto">
          <a href="courses-list-1.html" class="button -md -white text-dark-1">شروع کنید</a>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div data-anim-wrap class="row y-gap-30 justify-between items-center">
        <div class="col-xl-5 col-lg-6 order-2 order-lg-1">
          <h2 data-anim-child="slide-up delay-1" class="text-35 lg:text-40 md:text-30 text-dark-1 ff-estedad">چگونه <span class="text-purple-1">کار می کنیم؟</span></h2>
          <p data-anim-child="slide-up delay-2" class="text-dark-1 mt-20">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>

          <div data-anim-child="slide-up delay-3" class="row y-gap-30 pt-60 lg:pt-40">

            <div class="col-12">
              <div class="featureIcon -type-1">
                <div class="featureIcon__icon bg-light-7">
                  <img src="img/home-7/about/icons/1.svg" alt="icon">
                </div>
                <div class="featureIcon__content mr-30 md:mr-20">
                  <h4 class="text-17 fw-500">ایجاد حساب</h4>
                  <p class="mt-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت<br class="lg:d-none"> چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="featureIcon -type-1">
                <div class="featureIcon__icon bg-light-7">
                  <img src="img/home-7/about/icons/2.svg" alt="icon">
                </div>
                <div class="featureIcon__content mr-30 md:mr-20">
                  <h4 class="text-17 fw-500">انتخاب دوره ها</h4>
                  <p class="mt-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت<br class="lg:d-none"> چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="featureIcon -type-1">
                <div class="featureIcon__icon bg-light-7">
                  <img src="img/home-7/about/icons/3.svg" alt="icon">
                </div>
                <div class="featureIcon__content mr-30 md:mr-20">
                  <h4 class="text-17 fw-500">از دوره های خود لذت ببرید</h4>
                  <p class="mt-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت<br class="lg:d-none"> چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 order-1 order-lg-2">
          <div class="composition -type-5">
            <div class="-el-1">
              <img src="img/home-7/about/1.png" alt="image">
            </div>

            <div class="-el-2">
              <img src="img/home-7/about/2.png" alt="image">
            </div>

            <div class="-el-3">
              <div class="sm:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 shadow-6">
                <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                  <img src="img/masthead/1.svg" alt="icon">
                </div>
                <div class="mr-20">
                  <div class="text-orange-1 text-16 fw-500 lh-1">3.000 +</div>
                  <div class="mt-3">دوره رایگان</div>
                </div>
              </div>
            </div>

            <div class="-el-4">
              <div class="img-el -w-260 px-30 py-20 d-flex items-center bg-white rounded-8 shadow-6">
                <div class="img-el__side">
                  <div class="size-50 d-flex justify-center items-center bg-purple-1 rounded-full">
                    <img src="img/masthead/2.svg" alt="icon">
                  </div>
                </div>
                <div class="">
                  <div class="text-purple-1 text-16 fw-500 lh-1">تبریک!</div>
                  <div class="mt-3">ثبت نام شما کامل شد</div>
                </div>
              </div>
            </div>

            <div class="-el-5">
              <div class="sm:d-none img-el -w-260 px-20 py-20 d-flex items-center bg-white rounded-8 shadow-6">
                <img src="img/masthead/4.png" alt="icon">
                <div class="mr-20">
                  <div class="text-dark-1 text-16 fw-500 lh-1">مهرداد حسینی</div>
                  <div class="mt-3">طراح UX/UI</div>
                  <div class="d-flex x-gap-5 mt-3">
                    <div>
                      <div class="icon-star text-yellow-1 text-11"></div>
                    </div>
                    <div>
                      <div class="icon-star text-yellow-1 text-11"></div>
                    </div>
                    <div>
                      <div class="icon-star text-yellow-1 text-11"></div>
                    </div>
                    <div>
                      <div class="icon-star text-yellow-1 text-11"></div>
                    </div>
                    <div>
                      <div class="icon-star text-yellow-1 text-11"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-bg layout-pt-lg layout-pb-md">
    <div class="section-bg__item -full -height-half bg-dark-5"></div>

    <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title text-white">سفر یادگیری خود را از همین امروز شروع کنید!</h2>

            <p class="sectionTitle__text text-white">لورم ایپسوم متن ساختگی با تولید سادگی است.</p>

          </div>

        </div>
      </div>

      <div data-anim-wrap class="row y-gap-30 justify-between pt-60 lg:pt-50">

        <div data-anim-child="slide-up delay-1" class="col-lg-3 col-md-6">
          <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
            <div class="coursesCard__image">
              <img src="img/home-5/learning/1.svg" alt="image">
            </div>
            <div class="coursesCard__content mt-30">
              <h5 class="coursesCard__title text-18 lh-1 fw-500">با کارشناسان بیاموزید</h5>
              <p class="coursesCard__text text-14 mt-10">متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="col-lg-3 col-md-6">
          <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
            <div class="coursesCard__image">
              <img src="img/home-5/learning/2.svg" alt="image">
            </div>
            <div class="coursesCard__content mt-30">
              <h5 class="coursesCard__title text-18 lh-1 fw-500">شکوفایی استعدادها</h5>
              <p class="coursesCard__text text-14 mt-10">متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-3 col-md-6">
          <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
            <div class="coursesCard__image">
              <img src="img/home-5/learning/3.svg" alt="image">
            </div>
            <div class="coursesCard__content mt-30">
              <h5 class="coursesCard__title text-18 lh-1 fw-500">یادگیری انعطاف پذیر</h5>
              <p class="coursesCard__text text-14 mt-10">متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-3 col-md-6">
          <div class="coursesCard -type-2 text-center pt-50 pb-40 px-30 rounded-8 bg-white shadow-2">
            <div class="coursesCard__image">
              <img src="img/home-5/learning/4.svg" alt="image">
            </div>
            <div class="coursesCard__content mt-30">
              <h5 class="coursesCard__title text-18 lh-1 fw-500">ارائه گواهینامه</h5>
              <p class="coursesCard__text text-14 mt-10">متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row y-gap-20 justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">دیدگاه هنرجویان</h2>

            <p class="sectionTitle__text ">بیش از 10000 طرح منحصر به فرد در لیست دوره های آنلاین</p>

          </div>

        </div>
      </div>

      <div class="row justify-center pt-60">
        <div class="col-xl-6 col-lg-8 col-md-10">
          <div class="overflow-hidden js-testimonials-slider">
            <div class="swiper-wrapper">

              <div class="swiper-slide h-100">
                <div data-anim="slide-up" class="testimonials -type-2 text-center">
                  <div class="testimonials__icon">
                    <img src="img/misc/quote.svg" alt="quote">
                  </div>
                  <div class="testimonials__text md:text-16 fw-500 text-dark-1">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</div>
                  <div class="testimonials__author">
                    <h5 class="text-17 lh-15 fw-500">مهرداد نوروزی</h5>
                    <div class="mt-5">طراح وب</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide h-100">
                <div data-anim="slide-up" class="testimonials -type-2 text-center">
                  <div class="testimonials__icon">
                    <img src="img/misc/quote.svg" alt="quote">
                  </div>
                  <div class="testimonials__text md:text-16 fw-500 text-dark-1">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</div>
                  <div class="testimonials__author">
                    <h5 class="text-17 lh-15 fw-500">علی صالحی</h5>
                    <div class="mt-5">مسئول فروش</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide h-100">
                <div data-anim="slide-up" class="testimonials -type-2 text-center">
                  <div class="testimonials__icon">
                    <img src="img/misc/quote.svg" alt="quote">
                  </div>
                  <div class="testimonials__text md:text-16 fw-500 text-dark-1">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</div>
                  <div class="testimonials__author">
                    <h5 class="text-17 lh-15 fw-500">مسعود حسینی</h5>
                    <div class="mt-5">برنامه نویس موبایل</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide h-100">
                <div data-anim="slide-up" class="testimonials -type-2 text-center">
                  <div class="testimonials__icon">
                    <img src="img/misc/quote.svg" alt="quote">
                  </div>
                  <div class="testimonials__text md:text-16 fw-500 text-dark-1">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</div>
                  <div class="testimonials__author">
                    <h5 class="text-17 lh-15 fw-500">شیما ناصری</h5>
                    <div class="mt-5">مدیر عامل</div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide h-100">
                <div data-anim="slide-up" class="testimonials -type-2 text-center">
                  <div class="testimonials__icon">
                    <img src="img/misc/quote.svg" alt="quote">
                  </div>
                  <div class="testimonials__text md:text-16 fw-500 text-dark-1">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</div>
                  <div class="testimonials__author">
                    <h5 class="text-17 lh-15 fw-500">نیلوفر احمدی</h5>
                    <div class="mt-5">طراح گرافیک</div>
                  </div>
                </div>
              </div>

            </div>

            <div class="pt-60 lg:pt-40">
              <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                <div class="col-auto">
                  <div class="pagination__item is-active">
                    <img src="img/home-3/testimonials/1.png" alt="image">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="pagination__item ">
                    <img src="img/home-3/testimonials/2.png" alt="image">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="pagination__item ">
                    <img src="img/home-3/testimonials/3.png" alt="image">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="pagination__item ">
                    <img src="img/home-3/testimonials/4.png" alt="image">
                  </div>
                </div>

                <div class="col-auto">
                  <div class="pagination__item ">
                    <img src="img/home-3/testimonials/5.png" alt="image">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg bg-light-6">
    <div data-anim-wrap class="container">
      <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
        <div class="col-lg-6">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">رویدادهای آینده</h2>

            <p class="sectionTitle__text ">بیش از 10000 طرح منحصر به فرد در لیست دوره های آنلاین</p>

          </div>

        </div>

        <div class="col-auto">

          <a href="#" class="button -icon -purple-3 -rounded text-purple-1">
            مشاهده همه
            <i class="icon-arrow-top-right text-13 mr-10"></i>
          </a>

        </div>
      </div>

      <div class="row y-gap-30 pt-60">

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-left delay-2" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
            <div class="blogCard__image ratio ratio-3:2">
              <img class="img-ratio" src="img/home-3/blog/1.png" alt="image">
            </div>
            <div class="px-30 py-30 bg-white">
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mb-15">
                <div class="icon-calendar-2"></div>
                <div class="mr-8">6 آبان، 1399</div>
              </a>
              <h4 class="text-17 lh-15 fw-500">جامع‌ترین دوره آنلاین علم‌داده</h4>
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                <div class="icon-location"></div>
                <div class="mr-8">ایران، تهران</div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-left delay-3" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
            <div class="blogCard__image ratio ratio-3:2">
              <img class="img-ratio" src="img/home-3/blog/2.png" alt="image">
            </div>
            <div class="px-30 py-30 bg-white">
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mb-15">
                <div class="icon-calendar-2"></div>
                <div class="mr-8">6 آبان، 1399</div>
              </a>
              <h4 class="text-17 lh-15 fw-500">جامع‌ترین دوره آنلاین علم‌داده</h4>
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                <div class="icon-location"></div>
                <div class="mr-8">ایران، تهران</div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-left delay-4" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
            <div class="blogCard__image ratio ratio-3:2">
              <img class="img-ratio" src="img/home-3/blog/3.png" alt="image">
            </div>
            <div class="px-30 py-30 bg-white">
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mb-15">
                <div class="icon-calendar-2"></div>
                <div class="mr-8">6 آبان، 1399</div>
              </a>
              <h4 class="text-17 lh-15 fw-500">جامع‌ترین دوره آنلاین علم‌داده</h4>
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                <div class="icon-location"></div>
                <div class="mr-8">ایران، تهران</div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-left delay-5" class="blogCard -type-1 rounded-8 border-light shadow-1 overflow-hidden">
            <div class="blogCard__image ratio ratio-3:2">
              <img class="img-ratio" src="img/home-3/blog/4.png" alt="image">
            </div>
            <div class="px-30 py-30 bg-white">
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mb-15">
                <div class="icon-calendar-2"></div>
                <div class="mr-8">6 آبان، 1399</div>
              </a>
              <h4 class="text-17 lh-15 fw-500">جامع‌ترین دوره آنلاین علم‌داده</h4>
              <a href="#" class="d-flex items-center text-14 lh-1 text-light-1 mt-15">
                <div class="icon-location"></div>
                <div class="mr-8">ایران، تهران</div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">پلن قیمت گذاری</h2>

            <p class="sectionTitle__text ">لورم ایپسوم متن ساختگی با تولید سادگی است.</p>

          </div>


          <div class="d-flex justify-center items-center pt-60 lg:pt-40">
            <div class="text-14 text-dark-1">ماهیانه</div>
            <div class="form-switch px-20">
              <div class="switch" data-switch=".js-switch-content">
                <input type="checkbox">
                <span class="switch__slider"></span>
              </div>
            </div>
            <div class="text-14 text-dark-1">سالیانه <span class="text-purple-1">30% تخفیف</span></div>
          </div>
        </div>
      </div>

      <div class="row y-gap-30 justify-between pt-60 lg:pt-40">

        <div class="col-lg-4 col-md-6">
          <div class="priceCard -type-1 rounded-16 bg-white shadow-2">
            <div class="priceCard__content py-45 px-60 xl:px-40 text-center">
              <div class="priceCard__type text-18 lh-11 fw-500 text-dark-1">پایه</div>
              <div class="priceCard__price text-35 lh-11 fw-700 text-dark-1 mt-15">رایگان</div>
              <div class="priceCard__period">ماهیانه</div>
              <img class="mt-30" src="img/pricing/1.svg" alt="icon">
              <div class="priceCard__text text-right pr-15 mt-40">ارائه فهرست استاندارد، فعال به مدت 30 روز</div>

              <div class="text-right y-gap-15 mt-35">

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  همه عملیات پشتیبانی می شود
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  رابط کاربری عالی
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  اجازه رمزگذاری را می دهد
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  سیستم تشخیص چهره
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  24/7 پشتیبانی کامل
                </div>

              </div>

              <div class="d-inline-block mt-30">
                <a class="button px-40 py-20 fw-500 -purple-3 text-purple-1" href="courses-list-1.html">حالا خرید کنید</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="priceCard -type-1 rounded-16 bg-white shadow-2">
            <div class="priceCard__content py-45 px-60 xl:px-40 text-center">
              <div class="priceCard__type text-18 lh-11 fw-500 text-dark-1">حرفه ای</div>
              <div class="priceCard__price text-35 lh-11 fw-700 text-dark-1 mt-15">598000 تومان</div>
              <div class="priceCard__period">ماهیانه</div>
              <img class="mt-30" src="img/pricing/2.svg" alt="icon">
              <div class="priceCard__text text-right pr-15 mt-40">ارائه فهرست استاندارد، فعال به مدت 30 روز</div>

              <div class="text-right y-gap-15 mt-35">

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  همه عملیات پشتیبانی می شود
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  رابط کاربری عالی
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  اجازه رمزگذاری را می دهد
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  سیستم تشخیص چهره
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  24/7 پشتیبانی کامل
                </div>

              </div>

              <div class="d-inline-block mt-30">
                <a class="button px-40 py-20 fw-500 -purple-3 text-purple-1" href="courses-list-1.html">حالا خرید کنید</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="priceCard -type-1 rounded-16 bg-white shadow-2">
            <div class="priceCard__content py-45 px-60 xl:px-40 text-center">
              <div class="priceCard__type text-18 lh-11 fw-500 text-dark-1">شرکتی</div>
              <div class="priceCard__price text-35 lh-11 fw-700 text-dark-1 mt-15">894000 تومان</div>
              <div class="priceCard__period">ماهیانه</div>
              <img class="mt-30" src="img/pricing/3.svg" alt="icon">
              <div class="priceCard__text text-right pr-15 mt-40">ارائه فهرست استاندارد، فعال به مدت 30 روز</div>

              <div class="text-right y-gap-15 mt-35">

               <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  همه عملیات پشتیبانی می شود
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  رابط کاربری عالی
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  اجازه رمزگذاری را می دهد
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  سیستم تشخیص چهره
                </div>

                <div>
                  <i class="text-purple-1 pl-8" data-feather="check"></i>
                  24/7 پشتیبانی کامل
                </div>

              </div>

              <div class="d-inline-block mt-30">
                <a class="button px-40 py-20 fw-500 -purple-3 text-purple-1" href="courses-list-1.html">حالا خرید کنید</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row justify-center">
        <div class="col text-center">
          <p class="text-lg text-dark-1">مورد اعتماد بهترین های جهان</p>
        </div>
      </div>

      <div class="row y-gap-30 justify-between sm:justify-start items-center pt-60 md:pt-50">

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/1.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/2.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/3.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/4.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/5.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-4">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="img/clients/6.svg" alt="clients image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg bg-light-7">
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-xl-6 col-lg-8 col-md-10">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">ما افتخار می کنیم</h2>

            <p class="sectionTitle__text ">با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>

          </div>

        </div>
      </div>

      <div data-anim-wrap class="row y-gap-30 pt-60 lg:pt-40">

        <div class="col-lg-3 col-sm-6">
          <div data-anim-child="fade delay-1" class="counter -type-1">
            <div class="counter__number text-purple-1">350,000+</div>
            <div class="counter__title text-light-1">دانش آموزان در سراسر جهان</div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim-child="fade delay-2" class="counter -type-1">
            <div class="counter__number text-purple-1">496,00+</div>
            <div class="counter__title text-light-1">کل بازدیدهای دوره</div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim-child="fade delay-3" class="counter -type-1">
            <div class="counter__number text-purple-1">19,000+</div>
            <div class="counter__title text-light-1">دوره های پنج ستاره</div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim-child="fade delay-4" class="counter -type-1">
            <div class="counter__number text-purple-1">987,000+</div>
            <div class="counter__title text-light-1">انجمن دانشجویی</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">دسته بندی های برتر</h2>

            <p class="sectionTitle__text ">بیش از 10000 طرح منحصر به فرد در لیست دوره های آنلاین</p>

          </div>

        </div>
      </div>

@endsection
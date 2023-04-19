<link rel="stylesheet" type="text/css" href="{{ asset('user/front/header.css').'?'.random_int(99,9999) }}"/>
<div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row" dir="rtl">
            <div class="col"></div>
            <div class="col-md-3 my-auto p-0 item_enail">
                <a href="mailto:%20info@baffco.com">
                    info@baffco.com
                </a>
                <a href="{{route('user.employment.show')}}">
                    <i style="color: white !important;" class="fas fa-envelope"></i>
                </a>
            </div>
            <div class="col-md-2 my-auto ml-lg-3 p-0 item_phone">
                <a href="tel:02144004100">
                    @if(app()->getLocale() == 'fa')
                        ۰۲۱-۴۴۰۰۴۱۰۰
                    @else
                        021-44004100
                    @endif
                </a>
                <a href="{{route('user.employment.show')}}">
                    <i style="color: white !important;" class="fas fa-phone-alt"></i>
                </a>

            </div>
        </div>
    </div>
</div>

<header id="header" style="background: white;">
    <nav id="nav_id" class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container-lg d-flex mb-1">
            <a class="navbar-brand" href="{{route('user.index')}}">
                @if(app()->getLocale() == 'en' )
                    <img src="{{url($setting->logo_en)}}" id="logohone" class="logo1" alt="به اندیشی و فناوری فردا">
                @else
                    <img src="{{url($setting->logo ?? '#')}}" id="logohone" class="logo1" alt="به اندیشی و فناوری فردا">
                @endif
            </a>

            <button id="btn_mobile_menu" class="navbar-toggler collapsed position-relative z-index-9 btn-sm-icon-mobile"
                    type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
         <div style="@if(app()->getLocale() == 'fa' ) margin-left: 190px; @else  margin-right: 535px; @endif">
          <div class="collapse navbar-collapse edit mt-0 pb-0" id="navbarSupportedContent">
           <div class="d-none d-lg-block">
            <ul class="nav navbar-nav {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
             <li class="nav-item">
              <a class="nav-link" href="{{route('user.index')}}">{{__('text.page_name.home')}} <span class="sr-only">(current)</span></a>
             </li>

             @if(session('locale') == 'fa' or is_null(session('locale')))

              <li class="nav-item">
               <a href="#" class="nav-link dropdown-toggle">محصولات</a>
               <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">

                {{--  <li><a class="nav-link" href="#"> ریخته گری و صادرات </a></li>--}}
                  <li class="nav-item">
                   <a href="{{route('user.product.category.index',['power-transfer'])}}" class="nav-link dropdown-toggle"> انتقال قدرت </a>
                   <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                       <li style="border-bottom: 2px solid;"><a class="nav-link" href="#">به اندیشی و فناوری فردا</a>
                       </li>
                    @foreach($ProductCategory->children_order_menu->take(6) as $item)

                     <li><a class="nav-link"
                            href="{{route('user.product.category.index',['material-handling',$item->slug])}}"> {{$item->name}}</a>
                     </li>
                     {{--                                                            @foreach($item->children_orderBy->take(5) as $item2)--}}
                     {{--                                                                <li><a class="nav-link" href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a></li>--}}
                     {{--                                                            @endforeach--}}
                    @endforeach

                    {{--                                                    <li><a class="nav-link" href="#">بیرینگ</a></li>--}}
                    {{--                                                    <li><a class="nav-link" href="#">کوپلینگ</a></li>--}}
                    {{--                                                    <li><a class="nav-link" href="#">تسمه و پولی</a></li>--}}
                   </ul>
                  </li>


                </li>
                {{--<li><a class="nav-link" href="#">فرزان فن اندیش فردا</a></li>--}}

                <li class="nav-item">
                 <a href="{{route('user.product.category.index',['material-handling'])}}"
                    class="nav-link dropdown-toggle">جابجایی مواد</a>
                 <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                  {{--                                            <li><a class="nav-link" href="#">MANIPULATOR</a></li>--}}
                  {{--                                            <li><a class="nav-link" href="#">AGV</a></li>--}}
                  {{--                                            <li><a class="nav-link" href="#">LEAN SYSTEM</a></li>--}}
                  {{--                                            <li><a class="nav-link" href="#">BALANCER</a></li>--}}
                  {{--                                            <li><a class="nav-link" href="#">RAIL</a></li>--}}
                     <li style="border-bottom: 2px solid;"><a class="nav-link">ناب آفرینان فردا</a>

                 @foreach($ProductCategory2->children_order_menu as $item)

                   {{--                                                @if($item->children_orderBy && $item->children_orderBy->count() > 0)--}}
                   {{--                                                  @php $hasSub = true; @endphp--}}
                   {{--                                                @else--}}
                   {{--                                                    @php $hasSub = false; @endphp--}}
                   {{--                                                 @endif--}}


                   @if($item->slug == 'ریل-آلومینیومی')
                    <li><a class="nav-link  "
                           href="{{route('user.product.category.index',['material-handling',$item->slug])}}">{{$item->name}}</a>

                   @else
                    <li><a class="nav-link "
                           href="{{route('user.product.category.index',['material-handling',$item->slug])}}">{{$item->name}}</a>

                     @endif

                     {{--                                                    @if($hasSub)--}}
                     {{--                                                        <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">--}}

                     {{--                                                            @foreach($item->children_orderBy as $item2)--}}
                     {{--                                                                <li><a class="nav-link"--}}
                     {{--                                                                       href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>--}}
                     {{--                                                                </li>--}}
                     {{--                                                            @endforeach--}}
                     {{--                                                        </ul>--}}
                     {{--                                                    @endif--}}
                    </li>
                    @endforeach

                 </ul>
                </li>

                   <li class="nav-item">
                       <a href="#"
                          class="nav-link dropdown-toggle">برق و اتوماسیون</a>
                       <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">

                           <li style="border-bottom: 2px solid;"><a class="nav-link" href="https://www.farzanfanandish.com/">فرزان فن اندیش فردا</a>

                           <li><a class="nav-link" href="#">درایو پنل</a>
                           <li><a class="nav-link" href="#">کنترل پنل</a>
                           <li><a class="nav-link" href="#">پنل روشنایی</a>

                       </ul>
                   </li>

                   <li class="nav-item"><a href="#" class="nav-link">تولید و صادرات</a>
               </ul>
              </li>

              <li class="nav-item">
               <a href="#" class="nav-link dropdown-toggle">دانش فنی</a>
               <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                <li><a class="nav-link" href="{{route('user.catalogs.show')}}">کاتالوگ ها</a></li>
                <li><a class="nav-link" href="{{route('user.blog.index','article')}}">مقالات</a>
                </li>
               </ul>
              </li>

              <li class="nav-item">
               <a href="#" class="nav-link dropdown-toggle">اخبار و رویداد ها<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                       <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                   </svg> </a>
               <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                <li>
                 <a href="{{route('user.catalogs.show')}}" class="nav-link ">پروژه
                  ها</a>
                 {{--                                        <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">--}}
                 {{--                                            <li><a class="nav-link" href="{{route('user.employment.show')}}">فرصت های--}}
                 {{--                                                    شغلی</a></li>--}}
                 {{--                                        </ul>--}}
                </li>
                <li><a class="nav-link" href="{{route('user.news')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                        </svg>
                        فرصت های شغلی</a></li>
               </ul>
              </li>

             {{-- <li class="nav-item">
               <a href="#" class="nav-link dropdown-toggle">صفحات داینامیک</a>
               <ul class="nav navbar-nav d-block   {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                @foreach (\App\Menu::where('status','active')->orderBy('sort_id')->get(['name','slug']) as $item)
                 <li><a class="nav-link" href="{{route('landing.page',$item->slug)}}">{{$item->name}}</a>
                  @endforeach
                 </li>
               </ul>
              </li>--}}

             @else
              <li class="nav-item">
               <a class="nav-link"
                  href="{{route('user.employment.show')}}">{{__('text.page_name.about')}}</a>
              </li>
             @endif

             <li class="nav-item">
              <a class="nav-link"
                 href="{{route('user.contact.show')}}">{{__('text.page_name.contact')}}</a>
             </li>
            </ul>
           </div>

           <ul class="d-lg-none nav-sm navbar-nav {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
            <li class="nav-item">
             <a class="nav-link" href="{{route('user.index')}}">{{__('text.header_down.home')}} <span
                      class="sr-only">(current)</span></a>
            </li>
            <div id="accordion">

             <div class="">
              <div id="headingOne">
               <button class="btn text-white p-0 mb-3" data-toggle="collapse"
                       data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <img src="{{ asset('img/arrow.png') }}" width="20px"
                     style="border-radius: 50px;padding: 2px;" alt="arrow">
                انتقال قدرت
               </button>
              </div>
              <div id="collapseOne" class="collapse pb-3 pr-3" aria-labelledby="headingOne"
                   data-parent="#accordion">
               @foreach($ProductCategory->children_orderBy as $item)

                <div>
                 <button class="btn text-white p-0 mb-3" data-toggle="collapse"
                         href="#multiCollapseExample1" aria-expanded="true"
                         aria-controls="multiCollapseExample1">
                  <img src="{{ asset('img/arrow.png') }}" width="20px"
                       style="border-radius: 50px;padding: 2px;" alt="arrow">
                  {{$item->name}}
                 </button>
                </div>
                <div class="row">
                 <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                   @foreach($item->children_orderBy as $item2)
                    <a class="dropdown-item"
                       href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                   @endforeach

                  </div>
                 </div>
                </div>
               @endforeach
              </div>
             </div>

             <div class="">
              <div id="headingOne">
               <button class="btn text-white p-0 mb-3" data-toggle="collapse"
                       data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <img src="{{ asset('img/arrow.png') }}" width="20px"
                     style="border-radius: 50px;padding: 2px;" alt="arrow">
                جابجایی مواد
               </button>
              </div>
              <div id="collapseTwo" class="collapse pb-3 pr-3" aria-labelledby="headingOne"
                   data-parent="#accordion">
               @foreach($ProductCategory2->children_orderBy as $item)

                <div>
                 <button class="btn text-white p-0 mb-3" data-toggle="collapse"
                         href="#multiCollapseExample1" aria-expanded="true"
                         aria-controls="multiCollapseExample1">
                  <img src="{{ asset('img/arrow.png') }}" width="20px"
                       style="border-radius: 50px;padding: 2px;" alt="arrow">
                  {{$item->name}}
                 </button>
                </div>
                <div class="row">
                 <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                   @foreach($item->children_orderBy as $item2)
                    <a class="dropdown-item"
                       href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                   @endforeach

                  </div>
                 </div>
                </div>
               @endforeach
              </div>
             </div>

             <div class="">
              <div id="headingTwo">
               <button class="btn text-white p-0 mb-3 collapsed" data-toggle="collapse"
                       data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img src="{{ asset('img/arrow.png') }}" width="20px"
                     style="border-radius: 50px;padding: 2px;" alt="arrow">
                دانش فنی
               </button>
              </div>
              <div id="collapseFour" class="collapse pb-3" aria-labelledby="headingTwo"
                   data-parent="#accordion">
               <a class="dropdown-item" href="{{route('user.catalogs.show')}}">کاتالوگ ها</a>
               <a class="dropdown-item" href="{{route('user.blog.index','article')}}">مقالات</a>
               <a class="dropdown-item" href="{{route('user.knowledge.video')}}">فیلم های آموزشی</a>
               <a class="dropdown-item" href="{{route('user.software.show')}}">نرم افزار های
                محاسباتی</a>
              </div>
             </div>


            </div>

            {{-- <li class="nav-item" >
                <p class="m-0 p-0 pb-1">
                    خدمات حافظ
                </p>
                @foreach ($menu_header1_links as $link)
                    <a href="{{$link->link}}" target="_blank" class="nav-link mr-2 mb-2 {{app()->getLocale()=='fa'?'text-right':'text-left'}}">{{$link->name}}</a>
                @endforeach
            </li> --}}

            <li class="nav-item">
             <a class="nav-link"
                href="{{route('user.blog.index','article')}}"> وبلاگ</a>
            </li>

            <li class="nav-item">
             <a class="nav-link"
                href="{{route('user.employment.show')}}">درباره ما</a>
            </li>
            <li class="nav-item">
             <a class="nav-link"
                href="{{route('user.contact.show')}}">تماس با ما</a>
            </li>
            {{-- <li class="nav-item" >
                <a class="nav-link"
                   href="{{route('bank.index')}}">شماره حساب ها</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link"
                   href="{{route('sub-station.index')}}">شعب</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link"
                   href="https://club.hafezbroker.ir/" target="_blank">باشگاه مشتریان</a>
            </li> --}}
           </ul>

           <div class="dropdown language">
            <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-expanded="false">

             @if(session('locale') == 'en')
              <img src="https://adib-it.com/assets/newFront/img/en.png" alt="en">
             @else
              <img src="https://adib-it.com/assets/newFront/img/fa.png" alt="fa">
             @endif
            </button>
            <div class="dropdown-menu">
             <a class="d-block" href="{{route('lang_set','fa')}}"> <img
                      src="https://adib-it.com/assets/newFront/img/fa.png" alt="fa"></a>
             <a class="d-block" href="{{route('lang_set','en')}}"> <img
                      src="https://adib-it.com/assets/newFront/img/en.png" alt="en"> </a>
            </div>
           </div>

           {{--                <div class="dropdown">--}}
           {{--                    <button class="btn text-white dropdown-toggle " type="button" id="current-language-dropdown" data-bs-toggle="dropdown" aria-expanded="true">--}}
           {{--                        <img src="https://adib-it.com/./assets/newFront/img/fa.png" alt="fa" height="40px">--}}
           {{--                    </button>--}}
           {{--                    <ul class="dropdown-menu " aria-labelledby="current-language-dropdown" >--}}
           {{--                        <li>--}}
           {{--                            <a class="dropdown-item" href="{{route('lang_set','fa')}}"> <img src="https://adib-it.com/./assets/newFront/img/fa.png" alt="fa"> <span>فارسی</span> </a>--}}
           {{--                        </li>--}}
           {{--                        <li> <a class="dropdown-item" href="{{route('lang_set','en')}}"> <img src="https://adib-it.com/./assets/newFront/img/en.png" alt="en"> <span>انگلیسی</span> </a> </li>--}}
           {{--                    </ul>--}}
           {{--                </div>--}}
          </div>

         </div>
        </div>
    </nav>
</header>
{{--
<script>
    $(function() {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('header').addClass('activate')
            } else {
                $('header').removeClass('activate')
            }
        });
    });
</script> --}}
<script>
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            // document.getElementById("header").style.backgroundColor = "transparent";
            document.getElementById("logohone").style.display = "none";
            // document.getElementById("logotwo").style.display = "block";
        } else {
            // document.getElementById("header").style.backgroundColor = "white";
            document.getElementById("logohone").style.display = "block";
            // document.getElementById("logotwo").style.display = "none";
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('user/front/header.css') }}"/>
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

            <button id="btn_mobile_menu" class="navbar-toggler collapsed position-relative z-index-9 btn-sm-icon-mobile" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse edit mt-0 pb-0" id="navbarSupportedContent">
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.index')}}">{{__('text.page_name.home')}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    گروه فناوری فردا
                                </a>
                                <div class="dropdown-content" aria-labelledby="dropdownMenuButton">
                                    <a href="#" target="_blank" class="dropdown-item {{app()->getLocale()=='fa'?'text-right':'text-left'}}">گروه فناوری فردا</a>
                                </div>
                            </div>
                        </li>

                        @if(session('locale') == 'fa' or is_null(session('locale')))
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('user.product.category.index',['power-transfer'])}}" onclick="location.href='{{route('user.product.category.index',['power-transfer'])}}';" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">انتقال قدرت</a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     style="top: 40px !important;padding-top: 16px;background: none;box-shadow: 0 2px 2px 1px transparent !important;" aria-labelledby="servicesDropdown">
                                    <div class="bg-light rounded">
                                        <div class="dropdown-divider" style="border-top: 2px solid #295288;"></div>
                                        <div class="d-md-flex align-items-start justify-content-start text-right">
                                            <div>
                                                {{--                                        <div class="dropdown-header">انتقال قدرت</div>--}}
                                                <div class="row" style="width: 900px;">


                                                    @foreach($ProductCategory->children_order_menu as $index=>$item)

                                                        @if($index == 5)
                                                            <div class="col-6">
                                                            </div>
                                                        @endif

                                                        <div class="col{{($index>4)?'-3':''}}" style="{{($index>4)?'margin-top:-'.($ProductCategory->children_order_menu[2]->children_orderBy->count()*30+70).'px;':''}}">
                                                            <div class="dropdown-header"><a onclick="location.href='{{route('user.product.category.index',['power-transfer',$item->slug])}}';">{{$item->name}}</a></div>

                                                            @foreach($item->children_orderBy as $item2)
                                                                <a class="dropdown-item" href="{{route('user.product.category.index',['power-transfer',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                                                            @endforeach
                                                        </div>

                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('user.product.category.index',['material-handling'])}}" onclick="location.href='{{route('user.product.category.index',['material-handling'])}}';" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">جابجایی مواد</a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     style="top: 40px !important;padding-top: 16px;background: none;box-shadow: 0 2px 2px 1px transparent !important;" aria-labelledby="servicesDropdown">
                                    <div class="bg-light rounded">
                                        <div class="dropdown-divider" style="border-top: 2px solid #295288;"></div>
                                        <div class="d-md-flex align-items-start justify-content-start text-right"><div>
                                                {{--                                        <div class="dropdown-header">انتقال قدرت</div>--}}
                                                <div class="row" style="width: 900px;">

                                                    @foreach($ProductCategory2->children_order_menu as $item)

                                                        <div class="col">
                                                            @if($item->slug == 'ریل-آلومینیومی')
                                                                <div class="dropdown-header" onclick="location.href='{{route('user.product.show','ریل-آلومینیومی')}}';">{{$item->name}}</div>
                                                            @else
                                                                <div class="dropdown-header" onclick="location.href='{{route('user.product.category.index',['material-handling',$item->slug])}}';">{{$item->name}}</div>
                                                            @endif


                                                            @foreach($item->children_orderBy as $item2)
                                                                <a class="dropdown-item" href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                                                            @endforeach
                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">بازرگانی خارجی</a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     style="top: 40px !important;padding-top: 16px;background: none;box-shadow: 0 2px 2px 1px transparent !important;" aria-labelledby="servicesDropdown">
                                    <div class="bg-light rounded">
                                        <div class="dropdown-divider" style="border-top: 2px solid #295288;"></div>
                                        <div class="d-md-flex align-items-start justify-content-start text-right"><div>
                                                {{--                                        <div class="dropdown-header">انتقال قدرت</div>--}}
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="dropdown-item" href="{{route('user.introduction')}}">معرفی</a>
                                                        <a class="dropdown-item" href="{{route('user.services')}}">خدمات</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">دانش فنی</a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     style="top: 40px !important;padding-top: 16px;background: none;box-shadow: 0 2px 2px 1px transparent !important;" aria-labelledby="servicesDropdown">
                                    <div class="bg-light rounded">
                                        <div class="dropdown-divider" style="border-top: 2px solid #295288;"></div>
                                        <div class="d-md-flex align-items-start justify-content-start text-right"><div>
                                                {{--                                        <div class="dropdown-header">انتقال قدرت</div>--}}
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="dropdown-item" href="{{route('user.catalogs.show')}}">کاتالوگ ها</a>
                                                        <a class="dropdown-item" href="{{route('user.blog.index','article')}}">مقالات</a>
                                                        <a class="dropdown-item" href="{{route('user.knowledge.video')}}">فیلم های آموزشی</a>
                                                        <a class="dropdown-item" href="{{route('user.software.show')}}">نرم افزار های محاسباتی</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">پروژه ها</a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     style="top: 40px !important;padding-top: 16px;background: none;box-shadow: 0 2px 2px 1px transparent !important;" aria-labelledby="servicesDropdown">
                                    <div class="bg-light rounded">
                                        <div class="dropdown-divider" style="border-top: 2px solid #295288;"></div>
                                        <div class="d-md-flex align-items-start justify-content-start text-right"><div>
                                                {{--                                        <div class="dropdown-header">انتقال قدرت</div>--}}
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="dropdown-item" href="{{route('user.projects.show')}}">انتقال قدرت</a>
                                                        <a class="dropdown-item" href="{{route('user.projects.index')}}">جابجایی مواد و تولید ناب</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{route('user.news')}}">اخبار و رویداد ها</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('user.employment.show')}}">{{__('text.page_name.about')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('user.contact.show')}}">{{__('text.page_name.contact')}}</a>
                        </li>
                    </ul>
                </div>

                <ul class="d-lg-none nav-sm navbar-nav {{app()->getLocale()=='en'?'mr-auto':'ml-auto'}}">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">{{__('text.header_down.home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <div id="accordion">

                        <div class="">
                            <div id="headingOne">
                                <button class="btn text-white p-0 mb-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="{{ asset('img/arrow.png') }}" width="20px" style="border-radius: 50px;padding: 2px;" alt="arrow">
                                    انتقال قدرت
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse pb-3 pr-3" aria-labelledby="headingOne" data-parent="#accordion">
                                @foreach($ProductCategory->children_orderBy as $item)

                                    <div>
                                        <button class="btn text-white p-0 mb-3" data-toggle="collapse" href="#multiCollapseExample1"  aria-expanded="true" aria-controls="multiCollapseExample1">
                                            <img src="{{ asset('img/arrow.png') }}" width="20px" style="border-radius: 50px;padding: 2px;" alt="arrow">
                                            {{$item->name}}
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                @foreach($item->children_orderBy as $item2)
                                                    <a class="dropdown-item" href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="">
                            <div id="headingOne">
                                <button class="btn text-white p-0 mb-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <img src="{{ asset('img/arrow.png') }}" width="20px" style="border-radius: 50px;padding: 2px;" alt="arrow">
                                    جابجایی مواد
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse pb-3 pr-3" aria-labelledby="headingOne" data-parent="#accordion">
                                @foreach($ProductCategory2->children_orderBy as $item)

                                    <div>
                                        <button class="btn text-white p-0 mb-3" data-toggle="collapse" href="#multiCollapseExample1"  aria-expanded="true" aria-controls="multiCollapseExample1">
                                            <img src="{{ asset('img/arrow.png') }}" width="20px" style="border-radius: 50px;padding: 2px;" alt="arrow">
                                            {{$item->name}}
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                @foreach($item->children_orderBy as $item2)
                                                    <a class="dropdown-item" href="{{route('user.product.category.index',['material-handling',$item->slug,$item2->slug])}}">{{$item2->name}}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="">
                            <div id="headingTwo">
                                <button class="btn text-white p-0 mb-3 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="{{ asset('img/arrow.png') }}" width="20px" style="border-radius: 50px;padding: 2px;" alt="arrow">
                                    دانش فنی
                                </button>
                            </div>
                            <div id="collapseFour" class="collapse pb-3" aria-labelledby="headingTwo" data-parent="#accordion">
                                <a class="dropdown-item" href="{{route('user.catalogs.show')}}">کاتالوگ ها</a>
                                <a class="dropdown-item" href="{{route('user.blog.index','article')}}">مقالات</a>
                                <a class="dropdown-item" href="{{route('user.knowledge.video')}}">فیلم های آموزشی</a>
                                <a class="dropdown-item" href="{{route('user.software.show')}}">نرم افزار های محاسباتی</a>
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

                    <li class="nav-item" >
                        <a class="nav-link"
                           href="{{route('user.blog.index','article')}}"> وبلاگ</a>
                    </li>

                    <li class="nav-item" >
                        <a class="nav-link"
                           href="{{route('user.employment.show')}}">درباره ما</a>
                    </li>
                    <li class="nav-item" >
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
                    <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">

                        @if(session('locale') == 'en')
                            <img src="https://adib-it.com/assets/newFront/img/en.png" alt="en">
                        @else
                            <img src="https://adib-it.com/assets/newFront/img/fa.png" alt="fa">
                        @endif
                    </button>
                    <div class="dropdown-menu">
                        <a class="d-block" href="{{route('lang_set','fa')}}"> <img src="https://adib-it.com/assets/newFront/img/fa.png" alt="fa"></a>
                        <a class="d-block" href="{{route('lang_set','en')}}"> <img src="https://adib-it.com/assets/newFront/img/en.png" alt="en"> </a>
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
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            // document.getElementById("header").style.backgroundColor = "transparent";
            document.getElementById("logohone").style.display = "none";
            document.getElementById("logotwo").style.display = "block";
        } else {
            // document.getElementById("header").style.backgroundColor = "white";
            document.getElementById("logohone").style.display = "block";
            document.getElementById("logotwo").style.display = "none";
        }
    }
</script>
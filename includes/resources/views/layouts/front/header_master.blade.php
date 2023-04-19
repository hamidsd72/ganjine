<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <title>{{$setting->title}}</title>
        <link href="/asset/front/css/some-font.css" rel="stylesheet">
        <link href="/asset/front/css/bootstrap.css" rel="stylesheet">
        <link href="/asset/front/css/style.css" rel="stylesheet">
        <link href="/asset/front/css/responsive.css" rel="stylesheet">
        <link href="/asset/front/css/style_rtl.css" rel="stylesheet">
        <link href="/asset/front/css/font-awsome.css" rel="stylesheet">
        <link href="/asset/front/css/index.css" rel="stylesheet">
        {{-- {{$setting->keywords}} --}}
        {{-- {{$setting->description}} --}}
        <link rel="shortcut icon" href="{{url($setting->icon?$setting->icon:'')}}" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        @yield('style')
        <style>
        </style>
    </head>

    <body style="text-align: right">
        <div class="page-wrapper">
            
            <header class="main-header header-style-five five-alternate">
                <!--Header-Upper-->
                <div class="header-upper">

                    <div class="d-none d-lg-block">
                        <div class="logo-box m-0 pr-lg-5 mr-lg-5">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{url($setting->logo_light?$setting->logo_light:'')}}" alt="{{$setting->title}}"></a></div>
                        </div>
                    </div>

                    <div class="auto-container">
                        <div class="clearfix">
                            <div class="nav-outer clearfix">

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-lg">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            {{-- <li class="current">
                                                <div class="nav-logo-c"><a href="{{url('/')}}"><img src="{{url($setting->logo_light?$setting->logo_light:'')}}" alt="{{$setting->title}}"></a></div>
                                            </li> --}}
                                            <li class="current pt-lg-2px"><a href="{{url('/')}}">صفحه اصلی</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropbtn">سامانه های معاملاتی <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>سامانه های معاملاتی</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.exirbroker.com" target="_blank">آنلاین اوراق</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gsp.ebgo.ir/Login" target="_blank">بورس کالا</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gs.ephoenix.ir/auth/login" target="_blank">اختیار معامله</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.irbrokersite.ir" target="_blank">آفلاین معامله</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="#">سهام عدالت</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">باشگاه مشتریان</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="سامانه های معاملاتی">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-lg-2px"><a href="{{route('user.faq.show')}}">آموزش</a>
                                            <li class="dropdown">
                                                <a class="dropbtn">درباره گنجینه سپهر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>درباره گنجینه سپهر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="{{route('user.about.show')}}">معرفی گنجینه</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#team">سرمایه های انسانی</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#banks1">شماره حساب های بانکی</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">قوانین و بخشنامه ها</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="#">شراکت با گنجینه سپهر</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="درباره گنجینه سپهر">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropbtn">شعب و دفاتر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>شعب و دفاتر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','station')}}">اطلاعات دفتر مرکزی و شعب</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','province')}}">پراکندگی شعب روی نقشه ایران</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','manage-station')}}">رسیدگی به امور شعب (شماره تماس و اطلاعات)</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">شراکت در زمینه شعب و بازاریابی با گنجینه سپهر</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="شعب و دفاتر">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-lg-2px"><a href="#">باشگاه مشتریان</li>
                                        </ul>
                                        <li class="dropdown account px-lg-3 pt-lg-1">
                                            <a class="dropbtn">افتتاح حساب </a>
                                            <div class="dropdown-content dropdown-content-new-face">
                                                <div class="header text-light py-3"><div class="container"><h3>افتتاح حساب</h3></div></div>
                                                <div class="container py-lg-2">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <ul class="mega-ul">
                                                                <li class="mx-1">
                                                                    <a href="https://sepehrpartregister.irbrokersite.ir" target="_blank">ثبت نام اوراق</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="https://gsp.ebgo.ir/GetBourseCode/getInformation" target="_blank">ثبت نام بورس کالا</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام باشگاه</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام سهام عدالت</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg my-auto">
                                                            <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="شعب و دفاتر">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </nav>
                                <!--Outer Box-->
                                
                            </div>
                            <div class="outer-box mr-0">

                                <!--Search Box-->
                                <div class="search-box-outer btn-rounded border-c-blue px-1 shadow">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value="" placeholder="جستجو..." required="">
                                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--End Header Upper-->

                <!--Sticky Header-->
                <div class="{{ \Request::route()->getName() == 'user.index' ? '' :'d-lg-none' }} sticky-header pb-lg-1">

                    <div class="d-none d-lg-block">
                        <div class="float-right logo-box m-0 pr-lg-5 mr-lg-5">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{url($setting->logo_light?$setting->logo_light:'')}}" alt="{{$setting->title}}"></a></div>
                        </div>
                    </div>

                    <div class="auto-container ">
                        <div class="clearfix">
                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-lg">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current pt-lg-2px"><a href="{{url('/')}}">صفحه اصلی</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropbtn">سامانه های معاملاتی <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>سامانه های معاملاتی</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.exirbroker.com" target="_blank">آنلاین اوراق</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gsp.ebgo.ir/Login" target="_blank">بورس کالا</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gs.ephoenix.ir/auth/login" target="_blank">اختیار معامله</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.irbrokersite.ir" target="_blank">آفلاین معامله</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="#">سهام عدالت</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">باشگاه مشتریان</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="سامانه های معاملاتی">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-lg-2px"><a href="{{route('user.faq.show')}}">آموزش</a>
                                            <li class="dropdown">
                                                <a class="dropbtn">درباره گنجینه سپهر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>درباره گنجینه سپهر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="{{route('user.about.show')}}">معرفی گنجینه</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#team">سرمایه های انسانی</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#banks1">شماره حساب های بانکی</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">قوانین و بخشنامه ها</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="#">شراکت با گنجینه سپهر</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="درباره گنجینه سپهر">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropbtn">شعب و دفاتر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>شعب و دفاتر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','station')}}">اطلاعات دفتر مرکزی و شعب</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','province')}}">پراکندگی شعب روی نقشه ایران</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','manage-station')}}">رسیدگی به امور شعب (شماره تماس و اطلاعات)</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">شراکت در زمینه شعب و بازاریابی با گنجینه سپهر</a>
                                                                        <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg my-auto">
                                                                <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="شعب و دفاتر">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-lg-2px"><a href="#">باشگاه مشتریان</li>
                                        </ul>
                                        <li class="dropdown account px-lg-3 pt-lg-1">
                                            <a class="dropbtn">افتتاح حساب </a>
                                            <div class="dropdown-content dropdown-content-new-face">
                                                <div class="header text-light py-3"><div class="container"><h3>افتتاح حساب</h3></div></div>
                                                <div class="container py-lg-2">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <ul class="mega-ul">
                                                                <li class="mx-1">
                                                                    <a href="https://sepehrpartregister.irbrokersite.ir" target="_blank">ثبت نام اوراق</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="https://gsp.ebgo.ir/GetBourseCode/getInformation" target="_blank">ثبت نام بورس کالا</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام باشگاه</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام سهام عدالت</a>
                                                                    <div class="px-4"><img src="/asset/front/images/Blog-Image-png2.png" class="w-100" alt="desk-nav"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg my-auto">
                                                            <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="شعب و دفاتر">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <div class="outer-box mr-lg-4">
                                            <!--Search Box-->
                                            <div class="search-box-outer btn-rounded border-c-blue shadow">
                                                <div class="dropdown text-center">
                                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                                    <ul class="dropdown-menu pull-right search-panel mt-lg-4" aria-labelledby="dropdownMenu3">
                                                        <li class="panel-outer">
                                                            <div class="form-container">
                                                                <form method="post" action="" id="nav_input_search_2">
                                                                    <div class="form-group d-flex mx-3 mt-3 border">
                                                                        <input type="search" name="field-name" value="" placeholder="جستجو..." required="">
                                                                        <button type="submit" class="search-btn px-2"><span class="fa fa-search"></span></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Sticky Header-->

            </header>

            <div class="{{ \Request::route()->getName() == 'user.index' ? '' :'pt-lg-5' }}">
                @yield('body')
            </div>

            <footer class="main-footer style-two pt-3 pt-lg-5">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section pb-0">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="big-column col-lg-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="row clearfix">

                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-3 col-lg-4 col-md-6">
                                        <div class="footer-widget logo-widget">
                                            <div class="logo mb-lg-0">
                                                <div class="d-flex  ">
                                                    <a href="/"><img src="/asset/front/images/icons.svg"  alt="کارگزاری رتبه الف"></a>
                                                    <div>
                                                        <h5 class="font-weight-bold text-dark mr-1">کارگزاری گنجینه سپهر پارت</h5>
                                                        <p class="text-dark px-2">کارگزاری رتبه الف</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-2">
                                                <img src="/asset/front/images/enmad.png">
                                            </div>

                                            {{-- 02143000001 --}}

                                            {{-- info@iganjineh.ir : ایمیل --}}

                                            {{-- تلگرام
                                            iganjineh --}}
                                            
                                            {{-- اینستاگرام
                                            iganjine.ir --}}

                                            <!-- Social Column -->
                                            <div class="social-column text-center">
                                                    {{-- <li class="follow">ما را دنبال کنید: </li> --}}
                                                    <a href="#"><span class="fa fa-globe fs-24 pr-1 text-c-gray ml-lg-1"></span></a>
                                                    <a href="#"><span class="fa fa-linkedin fs-24 pr-1 text-c-gray ml-lg-1"></span></a>
                                                    <a href="#"><span class="fa fa-send-o fs-24 pr-1 text-c-gray ml-lg-1"></span></a>
                                                    <a href="#"><span class="fa fa-instagram fs-24 pr-1 text-c-gray"></span></a>
                                            </div>
                                            {{-- <div class="text">شرکت کارگزاری گنجینه سپهر پارت با 16 سال سابقه فعالیت و اخذ بسیاری از مجوز های سازمان بورس و اوراق بهادار و پرسنلی مجرب یکی از بهترین انتخاب ها برای ورود و سرمایه گذاری است</div> --}}


                                        </div>
                                    </div>

                                    <div class="footer-column col">
                                        <div class="footer-widget links-widget mb-lg-0 pt-lg-3 mt-lg-5">
                                            <p class="text-dark pt-lg-5"><span class="icon fa fa-phone mx-2 fs-24 text-b-blue"></span>021-43000001</p>
                                            <p class="text-dark"><span class="icon fa fa-envelope mx-2 fs-24 text-b-blue"></span> info@iganjineh.ir</p>
                                            <p class="text-dark"><span class="icon fa fa-home mx-2 fs-24 text-b-blue"></span>تهران – شهرک غرب – بلوار خوردین – خیابان هرمزان –  خیابان پیروزان جنوبی – کوچه 14 – پلاک 4</p>
                                        </div>
                                    </div>
                                    {{-- <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4>کارگزاری گنجینه</h4>
                                            <ul class="list-link">
                                                <li><a href="#">فرم ها</a></li>
                                                <li><a href>سوالات متداول</a></li>
                                                <li><a href>فیلم های آموزشی</a></li>
                                                <li><a href="#">بانک ها</a></li>
                                                <li><a href="#">شعب ما</a></li>
                                                <li><a href="#">اخبار</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                    <!--Footer Column-->

                                </div>
                            </div>

                            <!--Column-->
                            {{-- <div class="big-column col-lg-6 col-md-12 col-sm-12">
                                <div class="row clearfix">

                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4>دیگر خدمات</h4>
                                            <ul class="list-link">
                                                <li><a href>بورس اوراق بهادار</a></li>
                                                <li><a href>شرکت پردازش اطلاعات مالی پارت</a></li>
                                                <li><a href>سامانه معاملات برخط 1</a></li>
                                                <li><a href>سامانه معاملات برخط 2</a></li>
                                                <li><a href>سامانه کدال</a></li>
                                                <li><a href="#">درخواست همکاری</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4>اطلاعات تماس</h4>
                                            <ul class="list-style-two">
                                                <li><span class="icon fa fa-phone"></span> 021 - 43000001</li>
                                                <li><span class="icon fa fa-envelope"></span> info@iganjineh.ir</li>
                                                <li><span class="icon fa fa-home"></span>تهران – شهرک غرب – بلوار خوردین – خیابان هرمزان –  خیابان پیروزان جنوبی – کوچه 14 – پلاک 4</li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom py-2">
                    <div class="col-12">
                        <!-- Copyright Column -->
                        <div class="copyright-column text-center">
                            <div class="copyright font-weight-bold">
                                کلیه حقوق این سایت متعلق به کارگزاری گنجینه سپهر پارت است و استفاده از مطالب آن با ذکر منبع بلامانع است
                                <br>
                                <a href="https://adib-it.com" target="_blank">All rights reserved by AdibGroup {{ \Carbon\Carbon::today()->format('Y') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    <script src="/asset/front/js/jquery.js"></script>
    <script src="/asset/front/js/popper.min.js"></script>
    <script src="/asset/front/js/bootstrap.min.js"></script>
    <script src="/asset/front/js/sticky.js"></script>
    <script src="/asset/front/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/asset/front/js/jquery.fancybox.js"></script>
    <script src="/asset/front/js/appear.js"></script>
    <script src="/asset/front/js/owl.js"></script>
    <script src="/asset/front/js/wow.js"></script>
    <script src="/asset/front/js/jquery-ui.js"></script>
    <script src="/asset/front/js/main.js"></script>
    <!--Google Map APi Key-->
    {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script> --}}
    <script src="/asset/front/js/map-script.js"></script>
    <!--End Google Map APi-->
    </body>
</html>

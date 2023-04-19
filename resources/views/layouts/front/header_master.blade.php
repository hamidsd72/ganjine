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
        {{-- <script type="text/javascript">
            window.RAYCHAT_TOKEN = "58cf40ff-5408-4a8e-8107-76b706a941f8";
            (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://widget-react.raychat.io/install/widget.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
            })();
        </script> --}}
        
        @yield('style')
        <style>
            .bpsefw-1213423 p {
                margin: auto 0px;
            }
            @media (min-width: 920px) {
                .banner-top-c3243 {
                    max-height: 960px;
                }
                .vector-img {
                    height: 88px;
                }
            }
            @media (max-width: 640px) {
                .main-slider .auto-container {
                    top: 108px !important;
                }
                .main-slider .slide .content.alternate {
                    width: 100%;
                }
                .main-slider .text {
                    font-size: 12px !important;
                }
            }
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
                                            {{-- <li class="current pt-lg-2px"><a href="{{url('/')}}">صفحه اصلی</a></li>
                                            <li class="dropdown">
                                                <a class="dropbtn" onclick="showMobileDropdown('one')">سامانه های معاملاتی <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="one d-none-isMobile dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>سامانه های معاملاتی</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1 d-md-none">
                                                                        <a href="#" onclick="showMobileDropdown('khali')" class="text-danger">بستن</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.exirbroker.com" target="_blank">آنلاین اوراق</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gsp.ebgo.ir/Login" target="_blank">بورس کالا</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://gs.ephoenix.ir/auth/login" target="_blank">اختیار معامله</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="https://sepehr.irbrokersite.ir" target="_blank">آفلاین اوراق</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1">
                                                                        <a href="#">سهام عدالت</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
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
                                            <li class="pt-lg-2px"><a href="{{route('user.learn.index')}}">آموزش</a></li>
                                            <li class="pt-lg-2px"><a href="{{route('user.blog.index','all')}}">مجله خبری</a></li>
                                            <li class="dropdown">
                                                <a class="dropbtn" onclick="showMobileDropdown('two')">درباره گنجینه سپهر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="two d-none-isMobile dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>درباره گنجینه سپهر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1 d-md-none">
                                                                        <a href="#" onclick="showMobileDropdown('khali')" class="text-danger">بستن</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('user.about.show')}}">معرفی گنجینه</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#team">سرمایه های انسانی</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="/about-us#banks1">شماره حساب های بانکی</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">قوانین و بخشنامه ها</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
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
                                                <a class="dropbtn" onclick="showMobileDropdown('tree')">شعب و دفاتر <i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="tree d-none-isMobile dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>شعب و دفاتر</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1 d-md-none">
                                                                        <a href="#" onclick="showMobileDropdown('khali')" class="text-danger">بستن</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','province')}}">اطلاعات دفتر مرکزی و شعب</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="{{route('sub-station.show','manage-station')}}">رسیدگی به امور شعب (شماره تماس و اطلاعات)</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a href="#">شراکت در زمینه شعب و بازاریابی با گنجینه سپهر</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
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

                                            <li class="dropdown d-md-none account_sm">
                                                <a class="dropbtn " onclick="showMobileDropdown('four')" >افتتاح حساب<i class='fa fa-angle-down mr-1 font-weight-bold'></i></a>
                                                <div class="four d-none-isMobile dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>افتتاح حساب</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1 d-md-none">
                                                                        <a href="#" onclick="showMobileDropdown('khali')" style="box-shadow: none !important;background: transparent !important;display: unset !important;color: #dc3545 !important;">بستن</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="https://sepehrpartregister.irbrokersite.ir" target="_blank">ثبت نام اوراق</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="https://gsp.ebgo.ir/GetBourseCode/getInformation" target="_blank">ثبت نام بورس کالا</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="#">ثبت نام باشگاه</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="#">ثبت نام سهام عدالت</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
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

                                            <li class="dropdown account d-none d-md-block mr-lg-2" style="padding-top: 10px;">
                                                <a class="dropbtn" style="color: white !important;padding-right: 12px !important;">افتتاح حساب </a>
                                                <div class="four d-none-isMobile dropdown-content dropdown-content-new-face">
                                                    <div class="header text-light py-3"><div class="container"><h3>افتتاح حساب</h3></div></div>
                                                    <div class="container py-lg-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 p-0">
                                                                <ul class="mega-ul">
                                                                    <li class="mx-1 d-md-none">
                                                                        <a href="#" onclick="showMobileDropdown('khali')" style="box-shadow: none !important;background: transparent !important;display: unset !important;color: #dc3545 !important;">بستن</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="https://sepehrpartregister.irbrokersite.ir" target="_blank">ثبت نام اوراق</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="https://gsp.ebgo.ir/GetBourseCode/getInformation" target="_blank">ثبت نام بورس کالا</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="#">ثبت نام باشگاه</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                    </li>
                                                                    <li class="mx-1">
                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;" href="#">ثبت نام سهام عدالت</a>
                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
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
                                            
                                             --}}
                                            @foreach ($navbarItems as $key => $item)
                                                @if ($navbarItems->last()->id != $item->id)
                                                    <li class="{{$key==0?'current':''}} {{$item->child->count()?'dropdown':'pt-lg-2px'}}">
                                                        <a 
                                                            @if ($item->child->count()) class="dropbtn" onclick="showMobileDropdown('{{ 'box_nav'.$item->id}}')" 
                                                            @else href="{{$item->link_type=='internal'?(url('/').$item->link):$item->link}}" 
                                                                @unless($item->link_type=='internal') target="_blank" @endunless 
                                                            @endif>{{ $item->title}} 
                                                            @if ($item->child->count()) <i class='fa fa-angle-down mr-1 font-weight-bold'></i> @endif
                                                        </a>
                                                        @if ($item->child->count())
                                                            <div class="{{ 'box_nav'.$item->id}} d-none-isMobile dropdown-content dropdown-content-new-face">
                                                                <div class="header text-light py-3"><div class="container"><h3>{{ $item->title}}</h3></div></div>
                                                                <div class="container py-lg-2">
                                                                    <div class="row">
                                                                        @php $buttonKhali = 'active'; @endphp
                                                                        @foreach($item->child->chunk(4) as $lists)
                                                                            <div class="col-lg-3 p-0">
                                                                                @foreach($lists as $list)
                                                                                    <ul class="mega-ul">
                                                                                        @if ($buttonKhali == 'active')
                                                                                            <li class="mx-1 d-md-none">
                                                                                                <a href="#" onclick="showMobileDropdown('khali')" class="text-danger">بستن</a>
                                                                                                <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                                            </li>
                                                                                        @endif
                                                                                        <li class="mx-1">
                                                                                            <a href="{{$list->link_type=='internal'?(url('/').$list->link):$list->link}}" @unless($item->link_type=='internal') target="_blank" @endunless>
                                                                                                {{$list->title}}
                                                                                            </a>
                                                                                            <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                                        </li>
                                                                                    </ul>
                                                                                    @php $buttonKhali = 'deactive'; @endphp
                                                                                @endforeach
                                                                            </div>
                                                                        @endforeach
                                                                        @if ($item->photo)
                                                                            <div class="col-lg my-auto">
                                                                                <img class="mega-ul" src="{{url($item->photo->path)}}" alt="{{ $item->title}}">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </li>
                                                @else
                                                    <li class="dropdown account d-none d-md-block mr-lg-2" style="padding-top: 10px;">
                                                        <a class="dropbtn" style="color: white !important;padding-right: 12px !important;">{{ $item->title}}</a>
                                                        @if ($item->child->count())
                                                            <div class="{{ 'box_nav'.$item->id}} d-none-isMobile dropdown-content dropdown-content-new-face">
                                                                <div class="header text-light py-3"><div class="container"><h3>{{ $item->title}}</h3></div></div>
                                                                <div class="container py-lg-2">
                                                                    <div class="row">
                                                                        <div class="col-lg-3 p-0">
                                                                            <ul class="mega-ul">
                                                                                <li class="mx-1 d-md-none">
                                                                                    <a href="#" onclick="showMobileDropdown('khali')" style="box-shadow: none !important;background: transparent !important;display: unset !important;color: #dc3545 !important;">بستن</a>
                                                                                    <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                                </li>
                                                                                @foreach($item->child as $list)
                                                                                    <li class="mx-1">
                                                                                        <a style="box-shadow: none !important;background: transparent !important;display: unset !important;color: black !important;"
                                                                                        href="{{$list->link_type=='internal'?(url('/').$list->link):$list->link}}" @unless($item->link_type=='internal') target="_blank" @endunless>
                                                                                            {{$list->title}}
                                                                                        </a>
                                                                                        <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                        @if ($item->photo)
                                                                            <div class="col-lg my-auto">
                                                                                <img class="mega-ul" src="{{url($item->photo->path)}}" alt="{{ $item->title}}">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach

                                            <li class="pt-lg-2px">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#searchModalBox654xz3" class="search-box-btn">
                                                    <span class="fa fa-search fa fa-search border-c-blue px-2 redu50 text-c-blue"></span>
                                                </a>
                                            </li>
                                        </ul>

                                        {{-- old <li class="dropdown account px-lg-3 pt-lg-1">
                                            <a class="dropbtn">افتتاح حساب </a>
                                            <div class="dropdown-content dropdown-content-new-face">
                                                <div class="header text-light py-3"><div class="container"><h3>افتتاح حساب</h3></div></div>
                                                <div class="container py-lg-2">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-0">
                                                            <ul class="mega-ul">
                                                                <li class="mx-1">
                                                                    <a href="https://sepehrpartregister.irbrokersite.ir" target="_blank">ثبت نام اوراق</a>
                                                                    <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="https://gsp.ebgo.ir/GetBourseCode/getInformation" target="_blank">ثبت نام بورس کالا</a>
                                                                    <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام باشگاه</a>
                                                                    <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                </li>
                                                                <li class="mx-1">
                                                                    <a href="#">ثبت نام سهام عدالت</a>
                                                                    <div class="nav-line-box py-2"><div class="nav-line to-right-gradient"></div><div class="nav-line to-left-gradient"></div></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg my-auto">
                                                            <img class="mega-ul" src="/asset/front/images/Blog-Image-png.png" alt="شعب و دفاتر">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </div>
                                </nav>
                                <!--Outer Box-->
                            </div>
                            <div class="nav-abs-number">
                                <a class="text-secondary" href="tel:{{str_replace(['+',':','-'], '', $setting->phone)}}">{{ num2fa($setting->phone) }} <span class="icon fa fa-phone mx-2 fs-24"></span></a>
                            </div>
                            {{-- <div class="outer-box mr-0">

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

                            </div> --}}

                        </div>
                    </div>
                </div>
                <!--End Header Upper-->
            </header>

            <!-- The Search Modal -->
            <div class="modal" id="searchModalBox654xz3">
                <div class="modal-dialog modal-lg mt-5">
                    <div class="modal-content">
                        <form action="{{route('user.search')}}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title">جستجوی آموزش , اخبار و مجله خبری</h4>
                            </div>
                            
                            <div class="modal-body px-4">
                                <div class="row">
                                    <div class="col p-0">
                                        <label for="search">متن را وارد کنید</label>
                                        <input type="text" name="search" class="form-control" style="border-radius: 0px 4px 4px 0px !important;">
                                    </div>
                                    <div class="col-lg-2 p-0">
                                        <label for="search">جستجو در بخش</label>
                                        <select name="type" class="form-control" style="border-radius: 4px 0px 0px 4px !important;">
                                            <option value="blog" selected>مجلات</option>
                                            <option value="learn">آموزش ها</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="modal-footer" style="direction: ltr;">
                                <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">انصراف</button>
                                <button type="submit" class="btn btn-success">جستجو</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
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
                                                    <a href="/"><img src="{{$setting->featur_pic?url($setting->featur_pic):''}}"  alt="{{$setting->title}}"></a>
                                                    <div>
                                                        <h5 class="font-weight-bold text-dark mr-1">{{$setting->title}}</h5>
                                                        <p class="text-dark px-2">{{$setting->shoar}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-2"><img src="/asset/front/images/enmad.png"></div>

                                            <!-- Social Column -->
                                            <div class="social-column text-center">
                                                {{-- <li class="follow">ما را دنبال کنید: </li> --}}
                                                {{-- <a href="mailto:{{ $setting->email }}"><span class="fa fa-globe fs-20 pr-1 text-dark ml-lg-1"></span></a> --}}
                                                <a href="mailto:{{ $setting->email }}"><span class="fa fa-globe pr-1 text-b-blue ml-lg-1"></span></a>
                                                <a href="{{ $setting->linkdin }}"><span class="fa fa-linkedin-square pr-1 text-b-blue ml-lg-1"></span></a>
                                                <a href="{{ $setting->telegram }}"><span class="fa fa-send-o pr-1 text-b-blue ml-lg-1"></span></a>
                                                <a href="{{ $setting->instagram }}"><span class="fa fa-instagram pr-1 text-b-blue"></span></a>
                                            </div>
                                            {{-- <div class="text">شرکت کارگزاری گنجینه سپهر پارت با 16 سال سابقه فعالیت و اخذ بسیاری از مجوز های سازمان بورس و اوراق بهادار و پرسنلی مجرب یکی از بهترین انتخاب ها برای ورود و سرمایه گذاری است</div> --}}


                                        </div>
                                    </div>

                                    <div class="footer-column col">
                                        <div class="footer-widget links-widget mb-lg-0 pt-lg-3 mt-lg-5">
                                            <p class="text-dark pt-lg-5"><span class="icon fa fa-phone mx-2 fs-24 text-b-blue"></span>{{ $setting->phone }}</p>
                                            <p class="text-dark"><span class="icon fa fa-envelope mx-2 fs-24 text-b-blue"></span>{{ $setting->email }}</p>
                                            <p class="text-dark"><span class="icon fa fa-home mx-2 fs-24 text-b-blue"></span>{{ $setting->address }}</p>
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
                                <div class="">کلیه حقوق متعلق به {{$setting->title}} میباشد</div>
                                <div><img src="{{url($setting->logo?$setting->logo:'')}}" alt="{{$setting->title}}" style="height: 36px;" class="rounded"></div>
                                <!--<a href="https://adib-it.com" target="_blank">All rights reserved by AdibGroup {{ \Carbon\Carbon::today()->format('Y') }}</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            @if (session('status'))
                <div class="alert_report text-center" style="position: fixed;top: 16px;width: 90%;z-index: 9999;margin-right: 5%;">
                    <div class="alert alert-{{ session('status') }} alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('message') }}
                    </div>
                </div>
            @endif
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
    <script>
        let navbarNames = @json($navbarItems->pluck('id'));
        function showMobileDropdown(name) {
            navbarNames.forEach(elemId => {
                let nav = document.querySelector(`.box_nav${elemId}`)
                if (nav) { nav.classList.add('d-none-isMobile') }
            });
            if (name!='khali') { document.querySelector(`.${name}`).classList.remove('d-none-isMobile') }
        }
    </script>
    <!--Google Map APi Key-->
    {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script> --}}
    {{-- <script src="/asset/front/js/map-script.js"></script> --}}
    <!--End Google Map APi-->
    </body>
</html>

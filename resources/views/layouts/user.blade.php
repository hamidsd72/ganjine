<!DOCTYPE html>
<html dir="{{app()->getLocale()=='fa'?'rtl':'ltr'}}" lang="{{ app()->getLocale() }}">
<head>

    @yield('seo')
    @if (trim($__env->yieldContent('title')))
        @yield('title')
    @else
        <title>
            {{$seo?set_lang($seo,'title_page',app()->getLocale()):set_lang($setting,'title',app()->getLocale())}}
        </title>
    @endif

    @if (trim($__env->yieldContent('meta')))
        @yield('meta')
    @else
        @if($seo)
        <meta name="description" content="{{set_lang($seo,'description',app()->getLocale())}}"/>

        <meta http-equiv="keyword" name="keyword" content="{{ set_lang($seo,'keywords',app()->getLocale()) }}"/>
        <meta property="og:title" content="{{set_lang($seo,'title_page',app()->getLocale())}}"/>
        <meta property="og:description" content="{{set_lang($seo,'description',app()->getLocale())}}"/>
            @endif
    @endif

    <meta property="og:url" content="{{$urlPage}}"/>
    <meta property="og:site_name" content="{{set_lang($setting,'title',app()->getLocale())}}"/>
    <meta property="og:image" content="{{url($setting->icon)}}"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta name="google-site-verification" content="Gnuf11S8GBEL_kWbN-aIdP9Rd4PAUoPPJAtvFB_yu68" />
    <link rel="canonical" href="{{$urlPage}}"/>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="icon" type="image/png" sizes="32x32" href="{{url($setting->icon)}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.3/swiper-bundle.css"
          integrity="sha512-A2XlrIz+6ozKVA/ySfcVrioNpqK0UchJNW7/df1rmjgv7kfncmEq4rhCaTwWC/ebfWYl1R2szvOGB66bzNa6hg=="
          crossorigin="anonymous"/>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/some-font.css')}}"/> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font/iranyekanwebthinfanum.css')}}"/>
    
    @if(app()->getLocale()=='en')
        <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style_ltr.css').'?v'.random_int(999,9999) }}"/>
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style_rtl.css').'?v'.random_int(999,9999) }}"/>
    @endif
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css').'?v'.random_int(999,9999) }}"/>
    @yield('css_style')
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TQ9X3RWPEN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TQ9X3RWPEN');
</script>
</head>
<body class="{{app()->getLocale()=='fa'?'d-rtl':'d-ltr'}}" style="overflow-x: hidden;">
@include('layouts.header_user1',['setting'=>$setting,'contact_info'=>$contact_info,'product_cat'=>$product_cat,'product_category'=>$product_category,'product_type'=>$product_type])
{{--<div class="wat_sapp wat_sapp1 ">--}}
{{--    <a target="_blank" rel="noreferrer" href="tel:02144004100">--}}
{{--        <img class="social_img" src="{{asset('user/pic/217887.png')}}" alt="تماس با ما">--}}
{{--    </a>--}}
{{--    <a class="top mr-lg-3" href="{{url('/')}}">--}}
{{--        <img class="social_img" style="border: 2px solid #295288" src="{{asset('user/pic/home.jpg')}}" alt="خانه">--}}
{{--    </a>--}}
{{--</div>--}}
<main class="mt-4 mt-lg-0">
@yield('body')
</main>
<footer class="footer">
    <div class="position-relative">
        <div class="mx-auto mt-4" style="width: 100%;max-width: 1200px;">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <aside class="f_widget p-2">
                            <div class="f_title">
                                @if(app()->getLocale() == 'en')
                                    <img style="width: 160px;" src="{{url($setting->logo2 ) }}" id="" class=""
                                         alt="به اندیشی و فناوری فردا">
                                @else
                                    <img style="width: 160px;" src="{{url($setting->logo_light ) }}" id="" class=""
                                         alt="به اندیشی و فناوری فردا">
                                @endif
                                {{--                                <img style="width: 160px;"  src="{{url(app()->getLocale() =='en' ? $setting->logo_en : $setting->logo) }}" id="" class="" alt="به اندیشی و فناوری فردا">--}}
                            </div>
                            <div class="link_widget py-2">
                                <p>
                                    {!!  str_limit(set_lang($about,'head_text'),500) !!}
                                    {{--                                    {{__('text.site_description')}}--}}
                                    {{--                                    شرکت فناوری فردا در سال ۱۳۸۱ تاسیس گردید و بر پایه دانش و تجربه موسسین، از ابتدا فعالیت آن بر محور خدمات مهندسی شکل گرفت. شرکت فناوری فردا در سه زمینه تجهیزات انتقال قدرت، جابجایی مواد و تولید ناب، کنترل و اتوماسیون فعالیت می کند.--}}
                                </p>
                                <a style="    background-color: #295288;
    display: inline-block;
    line-height: 1;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 3px;
    color: #fff;
    width: 90px;
    fill: #fff;
    text-align: center;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    float: left;"  class="btn_more" href="{{route('user.employment.show')}}"> {{__('text.continue')}}...</a>

                            </div>
                        </aside>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="link_widget">
                            <ul>
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i> {{__('text.address_title')}}
                                        : {{__('text.address')}}</a></li>
                                <li><a href="#"><i aria-hidden="true" class="fas fa-fax"></i> {{__('text.telefax')}}
                                        : {{__('text.telefax_value')}} </a></li>
                                <li><a href="#"><i aria-hidden="true" class="fas fa-phone"></i> {{__('text.phone')}}
                                        : {{__('text.phone_value')}} </a></li>
                                <li><a href="#"><i aria-hidden="true" class="fas fa-envelope"></i> {{__('text.email')}}
                                        : {{__('text.email_value')}} </a></li>
                            </ul>
                        </div>
                        <div class="text-left">
                            <ul class="header_social footer_social">
                                <li><a href="https://www.instagram.com/baffco.power.transmission/">
                                        <img src="{{asset('user/pic/insta.png')}}">
                                    </a></li>
                                <li><a href="https://www.linkedin.com/company/baffcoir/"><img
                                                src="{{asset('user/pic/linkedin.png')}}"></a></li>

                                <li class="aparat"><a
                                            href="https://www.aparat.com/baffco/%D8%A8%D9%87_%D8%A7%D9%86%D8%AF%DB%8C%D8%B4%DB%8C_%D9%88_%D9%81%D9%86%D8%A7%D9%88%D8%B1%DB%8C_%D9%81%D8%B1%D8%AF%D8%A7">
                                        <img src="{{asset('user/pic/aparat.png')}}">
                                    </a></li>


                                @if(!is_null($contact_info->facebook))
                                    <li><a href="{{$contact_info->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if(!is_null($contact_info->instagram))
                                    <li><a href="{{$contact_info->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                @endif
                                @if(!is_null($contact_info->aparat))
                                    @if(!is_null($contact_info->telegram))
                                        <li><a href="{{$contact_info->telegram}}"><i class="fab fa-telegram-plane"></i></a>
                                        </li>
                                    @endif
                                    @if(!is_null($contact_info->whatsapp))
                                        <li><a href="{{$contact_info->whatsapp}}"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                    @endif
                                    <li><a href="{{$contact_info->aparat}}">
                                            <i class="fab fa-youtube"></i>
                                            {{-- <img src="{{asset('user/pic/aparat.png')}}" alt="آپارات حافظ"> --}}
                                        </a></li>
                                @endif
                                @if(!is_null($contact_info->linkdin))
                                    <li><a href="{{$contact_info->linkdin}}"><i class="fab fa-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="col-12 text-secondary text-center copy-r" href="#">
    <br>
    <span class="copyright">
           {{__('text.copy_rule')}}  <a href="https://adib-it.com" target="_blank"> {{__('text.adib')}}</a>
            </span>
</div>

{{--scripts--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.3/swiper-bundle.min.js"
        integrity="sha512-f5raXjCuok1zLkRjJJm7AMVZ65Kgr8SK85CMOZJ5ytAoHLi/Z+c3T78tm1fYuAVaeo6qLUySmE1rqY8hjSy6mA=="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('user/js/script.js')}}"></script>
{{--msg--}}
<script>


    @if(session()->has('err_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "{{__('text.success_not')}}",
            text: "{{ session('err_message') }}",
            icon: "warning",
            timer: 6000,
            timerProgressBar: true,
        })
    });
    @endif
    @if(session()->has('flash_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "{{__('text.success')}}",
            text: "{{ session('flash_message') }}",
            icon: "success",
            timer: 6000,
            timerProgressBar: true,
        })
    })
    ;@endif
    {{--  @if ($errors && count($errors) > 0)--}}
    {{--  $(document).ready(function () {--}}
    {{--      Swal.fire({--}}
    {{--          title: "ناموفق",--}}
    {{--          icon: "warning",--}}
    {{--          html:--}}
    {{--                  @foreach ($errors->all() as $key => $error)--}}
    {{--                      '<p class="text-right mt-2 ml-5" dir="rtl"> {{$key+1}} : ' +--}}
    {{--              '{{ $error }}' +--}}
    {{--              '</p>' +--}}
    {{--                  @endforeach--}}
    {{--                      '<p class="text-right mt-2 ml-5" dir="rtl">' +--}}
    {{--              '</p>',--}}
    {{--          timer: parseInt('{{count($errors)}}') * 1500,--}}
    {{--          timerProgressBar: true,--}}
    {{--      })--}}
    {{--  });--}}
    {{--  @endif--}}
</script>
@yield('js')
</body>
</html>

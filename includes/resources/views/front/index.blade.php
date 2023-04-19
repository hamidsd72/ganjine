<style>
    
</style>
@extends('layouts.front.header_master')
@section('style')
@endsection
@section('body')

<!--Main Slider-->
<section class="main-slider style-three">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @foreach ($sliders as $slider)
            @if ($slider->photo)
                <div class="slide" style="background-image:url('{{url($slider->photo->path)}}')">
                    <img src="{{url($slider->photo->path)}}">
                    <div class="auto-container " id="slider-text-box-menu">
                        @if ($slider->title || $slider->text1)
                            <div class="content alternate" dir="rtl">
                                {{-- <h1 class="style-two">{{$slider->title}}</h1> --}}
                                {{-- <div class="text alternate">{{$slider->text1}}</div> --}}
                                <div class="btn-box">
                                    <a href="{{ $slider->url?$slider->url:'#' }}" class="theme-btn btn-style-nine btn-light">نمایش بیشتر</a>
                                    <a href="{{ $slider->url?$slider->url:'#' }}" class="theme-btn btn-style-nine btn-light mx-2">نمایش بیشتر</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>


<section id="menu_slider_downs" class="menu_slider_downs bg-white teams pb-0 mt-2">
    <div class="auto-container">
        <div class="eval mb-lg-4">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>دسترسی سریع</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>

        <div class="row">
            <a class="col-lg" href="https://gsp.ebgo.ir/Login">
                <div class="card1">
                    <img alt="بورس کالا" class="card1_img" style="border-radius: 6px;" src="/asset/front/images/q1.jpg">
                </div>
                <div class="card1_in rounded">
                    <div class="card1_text">
                        <h4 class="card1_name p-1 px-3">بورس کالا</h4>
                    </div>
                </div>
            </a>
            <a class="col-lg my-100" href="https://sepehr.exirbroker.com">
                <div class="card1">
                    <img alt="آنلاین اوراق" class="card1_img" style="border-radius: 6px;" src="/asset/front/images/q2.jpg">
                </div>
                <div class="card1_in rounded">
                    <div class="card1_text">
                        <h4 class="card1_name p-1 px-3">آنلاین اوراق</h4>
                    </div>
                </div>
            </a>

            <a class="col-lg" href="https://gs.ephoenix.ir/auth/login">
                <div class="card1">
                    <img alt="اختیار معامله" class="card1_img" style="border-radius: 6px;" src="/asset/front/images/q3.jpg">
                </div>
                <div class="card1_in rounded">
                    <div class="card1_text">
                        <h4 class="card1_name p-1 px-3">اختیار معامله</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section brown py-lg-0">
    <div class="auto-container">
        <div class="eval">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>معرفی ما</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>
  
        <div class="row clearfix">
    
            <div class="video-column content-column col-lg-6">
                <div class="inner-column px-lg-0">
                    <div class="video-box">
                        <figure class="image">
                            <img src="/asset/front/images/tikcet-15.jpg" alt="دسترسی سریع">
                        </figure>
                        <a href="" class="lightbox-image overlay-box"></a>
                    </div>
                </div>
            </div>
                
            <div class="video-column content-column col-lg">
                <div class="fact-counter">
                    <div class="auto-container pt-lg-5">
                        <div class="row clearfix mt-lg-5 pt-lg-3">
    
                            <div class="column counter-column col-lg-6">
                                <figure class="image pt-2 pt-lg-3 text-center cu-card px-5">
                                    <img src="/asset/front/images/tikcet-14.png" class="px-5" alt="دسترسی سریع">
                                    <p class="m-0 py-1 px-lg-0 text-center font-weight-bold">رتبه اول اختیار معامله ۱۴۰۰-۱۴۰۱</p>
                                </figure>
                            </div>
                            <div class="column counter-column col-lg-6">
                                <figure class="image pt-2 pt-lg-3 text-center cu-card px-5">
                                    <img src="/asset/front/images/tikcet-11.png" class="px-5" alt="دسترسی سریع">
                                    <p class="m-0 py-1 px-lg-0 text-center font-weight-bold">بیش از بیست شعبه فعال در سراسر کشور</p>
                                </figure>
                            </div>
                            <div class="column counter-column col-lg-6">
                                <figure class="image pt-2 pt-lg-3 text-center cu-card px-5">
                                    <img src="/asset/front/images/tikcet-13.png" class="px-5" alt="دسترسی سریع">
                                    <p class="m-0 py-1 px-lg-0 text-center font-weight-bold">سایت آموزشی جامع</p>
                                </figure>
                            </div>
                            <div class="column counter-column col-lg-6">
                                <figure class="image pt-2 pt-lg-3 text-center cu-card px-5">
                                    <img src="/asset/front/images/tikcet-12.png" class="px-5" alt="دسترسی سریع">
                                    <p class="m-0 py-1 px-lg-0 text-center font-weight-bold">احراز هویت سریع و رایگان</p>
                                </figure>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-12"></div> --}}

            <!-- Content Column -->
            {{-- <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title Two -->
                    <div class="sec-title-two brown mb-lg-4">
                        <div class="title">معرفی ما</div>
                        <h4 class="text-dark font-weight-bold mt-lg-5">{{$about->title}}</h4>
                    </div>

                    {!! $about->head_text !!} --}}
                    {{-- <div class="text long-text-section mb-lg-4">
                        <p>
                            کارگزاری گنجینه سپهر پارت از سال1383با فعالیت در زمینه....شروع به فعالیت نمود و در سال13..مجوز فعالیت در
                            بازار سرمایه را به عنوان یک نهاد کارگزاری دریافت کرد، مادر این سالها با تکیه براعتماد مشتریان خود و تلاش همکارانمان
                            موفق به کسب عنوان کارگزاری رتبه الف شدیم و همواره در پی ارائه خدمات مطلوب و متنوع و همچنین ایجاد خدماتی
                            خاص در صنعت مالی ایران هستیم
                        </p>
                        <p>
                            دراین راستا با شرکای استراتژی خود یعنی گروه مالی پارت ، فراشناسا، مرآت، سیگنال ،سامانه معاملات رسام ، ثبت یار
                        </p>
                        <p>درضمینه های :</p>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>معاملات برخط بورس اوراق، کالا ،انرژی و مشتقه</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>صندوق های سرمایه گذاری</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>پردازش اطلاعات مالی</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>خدمات مشاوره سرمایه گذاریی</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>خدمات مشاوره عرضه و پذیرش شرکتها</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>سبدگردانی</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>احراز هویت غیر حضوری</li>
                            </ul>
                        </div>
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <ul class="list-style-one">
                                <li>و بسیاری دیگر از خدمات</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text">
                        ‌<p>به رشد و ارتقاع صنعت مالی کشورعزیزمان ایران پرداخته ایم.</p>

                    </div> --}}

            {{-- </div> --}}
        </div>

        <!-- Video Column -->
        {{-- <div class="video-column content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">

                <!--Video Box-->
                <div class="video-box">
                    <figure class="image">
                        <img src="/asset/front/images/about.jpg" alt>
                        <img src="{{url($about->index_pic)}}" alt="{{$about->title}}">
                    </figure>
                    <a href="#" class="lightbox-image overlay-box"></a>
                </div>

                <div class="fact-counter">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12 mb-lg-0">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="1383">0</span>
                                        <h4 class="counter-title">سال تاسیس</h4>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12 mb-lg-0">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3500" data-stop="78">0</span>
                                        <h4 class="counter-title">پرسنل متخصص</h4>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-12 col-sm-12 mb-lg-0">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="20">0</span>
                                        <h4 class="counter-title">شعبه فعال در کشور</h4>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

            <div class="question my-lg-0 pb-lg-3 text-lg-center">
                ماموریت <a href="#">توسعه سطح کیفیت و تنوع خدمات</a> <strong>43000001 - 021</strong> <span class="or">یا</span> <strong>info@iganjineh.ir</strong>
            </div>
            <div class="signature pt-lg-3">
                <div class="row">
                    
                    <div class="col-auto">
                        <div class="signature-img"><img src="/asset/front/images/logo_index3.png " style="width: 168.7px;height: 69.98px ; margin-left: 20px" alt></div>
                    </div>
                    <div class="col my-auto">
                        <h5 style="margin-right: 20px">کارگزاری گنجینه سپهر</h5>
                        <div class="designation" style="margin-right: 20px">تجارت آسوده و امن با ما!</div>
                    </div>

                </div>

            </div>
        </div> --}}

    {{-- </div> --}}
    </div>
</section>
<!-- End About Section -->

<!-- Testimonial Section Three -->
<section class="testimonial-section-three">
    <div class="auto-container">
        <!-- Sec Title Two -->
        <div class="eval">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>اخبار و رویداد</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>
        {{-- <div class="sec-title-two centered line-title">
            <div class="text">از طریق سامانه های زیر به راحتی در معاملات برخط بورس اوراق بهادار و بورس کالا سهیم باشید <br>با ما بهترین تجربه معاملات را داشته باشید.</div>
        </div> --}}

        <div class="two-item-carousel owl-carousel owl-theme news">

            <article class="article">
                <div class="box">
                    <div class="img-box">
                        <img class="img-w" src="https://filestorage-v3.apipart.ir/service/fileStorage@3/links/partdcngs/5a8693ec-c46b-446c-bd66-875e584b6abc" alt="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری" width="400" height="240" />
                    </div>
                    <div class="text-box backdrop-blur">
                        <a class="title" href="#" target="_blank" name="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری">
                            <h2>توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری</h2>
                        </a>
                        <div class="dscp"> نه سال از شروع فعالیت‌های واحد آموزش در کارگزاری آگاه می‌گذرد، لطفا درباره‌ی روند شکل‌گیری واحد آموزش در کارگزاری آگاه برای مخاطبان ما توضیح...</div>
                        <div class="share-box">
                            <div class="links">
                                <a class="facebook" href="http://www.facebook.com/sharer.php?u=#" name="Facebook">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-linkedin" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-send-o"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="box">
                    <div class="img-box">
                        <img class="img-w" src="https://filestorage-v3.apipart.ir/service/fileStorage@3/links/partdcngs/5a8693ec-c46b-446c-bd66-875e584b6abc" alt="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری" width="400" height="240" />
                    </div>
                    <div class="text-box backdrop-blur">
                        <a class="title" href="#" target="_blank" name="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری">
                            <h2>توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری</h2>
                        </a>
                        <div class="dscp"> نه سال از شروع فعالیت‌های واحد آموزش در کارگزاری آگاه می‌گذرد، لطفا درباره‌ی روند شکل‌گیری واحد آموزش در کارگزاری آگاه برای مخاطبان ما توضیح...</div>
                        <div class="share-box">
                            <div class="links">
                                <a class="facebook" href="http://www.facebook.com/sharer.php?u=#" name="Facebook">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-linkedin" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-send-o"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="box">
                    <div class="img-box">
                        <img class="img-w" src="https://filestorage-v3.apipart.ir/service/fileStorage@3/links/partdcngs/5a8693ec-c46b-446c-bd66-875e584b6abc" alt="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری" width="400" height="240" />
                    </div>
                    <div class="text-box backdrop-blur">
                        <a class="title" href="#" target="_blank" name="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری">
                            <h2>توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری</h2>
                        </a>
                        <div class="dscp"> نه سال از شروع فعالیت‌های واحد آموزش در کارگزاری آگاه می‌گذرد، لطفا درباره‌ی روند شکل‌گیری واحد آموزش در کارگزاری آگاه برای مخاطبان ما توضیح...</div>
                        <div class="share-box">
                            <div class="links">
                                <a class="facebook" href="http://www.facebook.com/sharer.php?u=#" name="Facebook">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-linkedin" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-send-o"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="box">
                    <div class="img-box">
                        <img class="img-w" src="https://filestorage-v3.apipart.ir/service/fileStorage@3/links/partdcngs/5a8693ec-c46b-446c-bd66-875e584b6abc" alt="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری" width="400" height="240" />
                    </div>
                    <div class="text-box backdrop-blur">
                        <a class="title" href="#" target="_blank" name="توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری">
                            <h2>توانمندسازی مشتریان برای رسیدن به آسایش مالی با تمرکز بر آموزش صندوق‌های سرمایه‌گذاری</h2>
                        </a>
                        <div class="dscp"> نه سال از شروع فعالیت‌های واحد آموزش در کارگزاری آگاه می‌گذرد، لطفا درباره‌ی روند شکل‌گیری واحد آموزش در کارگزاری آگاه برای مخاطبان ما توضیح...</div>
                        <div class="share-box">
                            <div class="links">
                                <a class="facebook" href="http://www.facebook.com/sharer.php?u=#" name="Facebook">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-linkedin" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-send-o"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </div>
</section>
<!-- End Testimonial Section Three -->

<section class="call-to-action" >
    <img src="/asset/front/images/SLIDER2.jpg">
    <div class="auto-container">
        {{--<div class="sec-title-two">
            <h2>خرید خودرو</h2>
            <h4 style="color: #fff;">بدون قرعه کشی،با کارگزاری گنجینه سپهر از بورس کالا خودرو خریداری کنید </h4>
        </div>
        <div class="btns-box">
            <a href="#" class="theme-btn btn-style-nine">دریافت کد بورس کالا<span class="icon fa fa-angle-right"></span></a>
            <a href="#" class="theme-btn btn-style-nine">اطلاعات تکمیلی <span class="icon fa fa-angle-right"></span></a>
        </div>
        <div class="image wow jello animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: jello;">
            <img src="images/resource/app-mobile.png" alt="">
        </div>--}}
    </div>
</section>

<section class="sponsors-section">
    <div class="auto-container">

        <div class="eval">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>شرکای تجاری</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>
        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li><div class="image-box"><a href="https://www.partdp.ir"><img src="/asset/front/images/part_logo.png" alt></a></div></li>
                <li><div class="image-box"><a href="https://isignal.ir"><img src="/asset/front/images/signal.png" alt></a></div></li>
                <li><div class="image-box"><a href="https://www.irasam.ir"><img src="/asset/front/images/resam.png" alt></a></div></li>
                <li><div class="image-box"><a href="https://farashenasa.ir"><img src="/asset/front/images/logo-e1621233374947.png" alt></a></div></li>
                <li><div class="image-box"><a href="https://imerat.ir"><img src="/asset/front/images/imerat.png" alt></a></div></li>
                <li><div class="image-box"><a href="https://www.sabtyar.com"><img src="/asset/front/images/sabtyar.jpg" alt></a></div></li>
            </ul>
        </div>

    </div>
</section>

@endsection

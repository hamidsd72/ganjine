@extends('layouts.front.header_master')
@section('style')
@endsection
@section('body')

<!--Main Slider-->
<section class="main-slider style-three">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @foreach ($sliders as $slider)
        {{-- @dd($slider ) --}}
            @if ($slider->photo)
                <div class="slide" style="background-image:url('')">
                    {{-- <img src="http://iganjineh.ir/wp-content/uploads/2020/04/1013-scaled.jpg"> --}}
                    <img src="{{url($slider->photo->path)}}">
                    <div class="auto-container">
                        {{--<div class="content alternate" dir="rtl">
                            <br><br><br><br><br><br><br><br><br>
                            <h1 class="style-two">کارگزاری <span>گنجینه سپهر</span></h1>
                            <div class="text alternate">تجارت آسوده و امن را با ما تجربه کنید.</div>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-nine"> ثبت نام - اوراق<span class="fa fa-search" style="margin-right: 10px"></span></a>
                            </div>
                        </div>--}}
                    </div>
                </div>
            @endif
        @endforeach

    </div>
</section>

<section id="menu_slider_downs" class="menu_slider_downs bg-white teams pb-0 mt-2">
    <div class="auto-container">
        <div class="eval">
            <div class="eval-body">
                <div class="row">
                    {{-- <span class="dot"></span> --}}
                    <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                    <div class="line-left"></div>
                    <h2>دسترسی سریع</h2>
                    <div class="line-right"></div>
                    <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                    {{-- <span class="dot"></span> --}}
                </div>
            </div>
        </div>


        <div class="row">
            <a class="col-lg" href="https://gsp.ebgo.ir/Login">
                <div class="card1">
                    <img alt="بورس کالا" class="card1_img" style="border-radius: 6px;" src="{{asset('front/images/q1.jpg')}}">
                </div>
                <div class="card1_in rounded">
                    <div class="card1_text">
                        <h4 class="card1_name p-1 px-3">بورس کالا</h4>
                    </div>
                </div>
            </a>
            <a class="col-lg my-100" href="https://sepehr.exirbroker.com">
                <div class="card1">
                    <img alt="آنلاین اوراق" class="card1_img" style="border-radius: 6px;" src="{{asset('front/images/q2.jpg')}}">
                </div>
                <div class="card1_in rounded">
                    <div class="card1_text">
                        <h4 class="card1_name p-1 px-3">آنلاین اوراق</h4>
                    </div>
                </div>
            </a>

            <a class="col-lg" href="https://gs.ephoenix.ir/auth/login">
                <div class="card1">
                    <img alt="اختیار معامله" class="card1_img" style="border-radius: 6px;" src="{{asset('front/images/q3.jpg')}}">
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

{{--<section class="services-section-seven">
    <div class="auto-container">
        <div class="inner-container">
            <div class="clearfix">

                <!-- Services Block Ten -->
                <div class="services-block-ten col-lg-3 col-md-5 col-sm-10">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="upper-box">
                            <div class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                </svg>
                            </div>
                            <h4><a href="#">بورس کالا</a></h4>
                        </div>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                        <ul class="list-style-three">
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                        </ul>
                    </div>
                </div>

                <!-- Services Block Ten -->
                <div class="services-block-ten col-lg-3 col-md-5 col-sm-10">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">

                        <div class="upper-box">
                            <div class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <h4><a href="#">معاملات اوراق</a></h4>
                        </div>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                        <ul class="list-style-three">
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                        </ul>
                    </div>
                </div>

                <!-- Services Block Ten -->
                <div class="services-block-ten col-lg-3 col-md-5 col-sm-10">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">

                        <div class="upper-box">
                            <div class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <h4><a href="#">اختیار معامله</a></h4>
                        </div>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                        <ul class="list-style-three">
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                        </ul>
                    </div>
                </div>

                <div class="services-block-ten col-lg-3 col-md-5 col-sm-10">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="upper-box">
                            <div class="icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                                </svg>
                            </div>
                            <h4><a href="#">سرمایه گذار حرفه ای</a></h4>
                        </div>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</div>
                        <ul class="list-style-three">
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                            <li>لورم ایپسوم متن ساختگی</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>--}}

<!-- About Section -->
<section class="auto-container">
    <div class="eval">
        <div class="eval-body">
            <div class="row">
                {{-- <span class="dot"></span> --}}
                <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                <div class="line-left"></div>
                <h2>معرفی ما</h2>
                <div class="line-right"></div>
                <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                {{-- <span class="dot"></span> --}}
            </div>
        </div>
        <h3 class="text-center text-dark font-weight-bold pt-5 pb-lg-5">شرکت کارگذاری گنجینه سپهر پارت</h3>
    </div>
    <div class="row clearfix">

        <!-- Video Column -->
        <div class="video-column content-column col-lg-5">
                <!--Video Box-->
                <figure class="image">
                    <img src="{{asset('front/images/fr-pg-5.jpg')}}" alt="دسترسی سریع">
                </figure>
        </div>
        
        <div class="video-column content-column col-lg">
            <div class="fact-counter">
                <div class="auto-container pt-lg-5">
                    <div class="row clearfix mt-lg-4">

                        <!--Column-->
                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <figure class="image mt-lg-3 text-center">
                                    <img src="{{asset('front/images/fr-pg-3.jpg')}}" alt="دسترسی سریع">
                                    <p class="m-0 py-1 text-center font-weight-bold text-dark">رتبه اول اختیار معامله ۱۴۰۰-۱۴۰۱</p>
                                </figure>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <figure class="image mt-lg-3 text-center">
                                    <img src="{{asset('front/images/fr-pg-1.jpg')}}" alt="دسترسی سریع">
                                    <p class="m-0 py-1 text-center font-weight-bold text-dark">بیش از بیست شعبه فعال در سراسر کشور</p>
                                </figure>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-lg-4 col-md-12 col-sm-12">
                                <figure class="image mt-lg-3 text-center">
                                    <img src="{{asset('front/images/fr-pg-2.jpg')}}" alt="دسترسی سریع">
                                    <p class="m-0 py-1 text-center font-weight-bold text-dark">کارگذاری رتبه الف</p>
                                </figure>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- About Section -->
<section class="about-section brown">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Sec Title Two -->
                    <div class="sec-title-two brown">
                        {{-- <div class="title">معرفی ما</div> --}}
                        <h2>شرکت کارگزاری گنجینه سپهر پارت <br> <span></span></h2>
                    </div>

                    <div class="text">
                        <p>
                            معرفی کارگزاری
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

                    </div>

            </div>
        </div>

        <!-- Video Column -->
        <div class="video-column content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">

                <!--Video Box-->
                <div class="video-box">
                    <figure class="image">
                        <img src="{{asset('front/images/about.jpg')}}" alt>
                    </figure>
                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"></a>
                </div>

                <div class="fact-counter">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="1383">0</span>
                                        <h4 class="counter-title">سال تاسیس</h4>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3500" data-stop="78">0</span>+
                                        <h4 class="counter-title">پرسنل متخصص</h4>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-4 col-md-12 col-sm-12">
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

            <div class="question"ماموریت <a href="#">توسعه سطح کیفیت و تنوع خدمات</a> <strong>43000001 - 021</strong> <span class="or">یا</span> <strong>info@iganjineh.ir</strong></div>
            <div class="signature">
                <div class="signature-img"><img src="{{asset('front/images/logo_index3.png')}} " style="width: 168.7px;height: 69.98px ; margin-left: 20px" alt></div>
                <h5 style="margin-right: 20px">کارگزاری گنجینه سپهر</h5>
                <div class="designation" style="margin-right: 20px">تجارت آسوده و امن با ما!</div>

            </div>
        </div>

    </div>
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
                    <span class="dot"></span>
                    <div class="line-left"></div>
                    <h2>اخبار و رویداد</h2>
                    <div class="line-right"></div>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
        <div class="sec-title-two centered line-title">
            <div class="text">از طریق سامانه های زیر به راحتی در معاملات برخط بورس اوراق بهادار و بورس کالا سهیم باشید <br>با ما بهترین تجربه معاملات را داشته باشید.</div>
        </div>

        <div class="two-item-carousel owl-carousel owl-theme news">

            {{--<div class="testimonial-block-four">
                <div class="inner-box">
                    <div class="img-text">
                        <h5>توقف جریان خروج پول از بازار سهام/ رشد ۱۰ هزار واحدی شاخص کل</h5>
                        <div class="text">معاملات امروز بازار سرمایه با رشد ۱۰ هزار واحدی شاخص کل آغاز شد</div>

                        <div class="designation"></div>
                    </div>

                    <img src="https://filestorage-v3.apipart.ir/service/fileStorage@3/links/partdcngs/5a8693ec-c46b-446c-bd66-875e584b6abc">


                </div>
            </div>

         --}}

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
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-twitter" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
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
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-twitter" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
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
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-twitter" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
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
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                                <a class="twitter" href="http://twitter.com/share?url=#">
                                    <i class="fa fa-twitter" name="Twitter"></i>
                                </a>
                                <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;amp;url=#" name="Linked In">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="telegram" href="https://telegram.me/share/url?url=#" name="Telegram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
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

<!-- Services Section Eight -->
<section class="services-section-eight">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-bullhorn"></span>
                                    </div>
                                    <h6><a href="#">سند راهبردی تیم گنجینه سپهرپارت</a></h6>
                                    <div class="text">حرمت، اخلاق، خردورزی، صراحت، عملگرایی
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-suitcase"></span>
                                    </div>
                                    <h6><a href="#">راهنمای خرید خودرو از بورس کال</a></h6>
                                    <div class="text">با چند کلیک ساده به راحتی وارد بازار بورس شوید و سرمایه خود را افزایش دهید</div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-area-chart"></span>
                                    </div>
                                    <h6><a href="#">نحوه اخذ کد اختیار معامله (آپشن)</a></h6>
                                    <div class="text">لورم ایسپام دلار شرکت کارگزاری گنجینه سپهر پارت در خدمت شماست.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-coffee"></span>
                                    </div>
                                    <h6><a href="#">نحوه دریافت برگه سهم از سامانه سمات</a></h6>
                                    <div class="text">تجارت امن و آسوده با شانزده سال سابقه  با شرکت گنجینه سپهر.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-building"></span>
                                    </div>
                                    <h6><a href="#">جزو برترین شرکت های بورس</a></h6>
                                    <div class="text">با ما قرار گرفتن بین برترین کارگزار های بورس را تحربه کنید.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Services Block Eleven -->
                        <div class="services-block-eleven col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                <div class="border-one"></div>
                                <div class="border-two"></div>
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-pie-chart"></span>
                                    </div>
                                    <h6><a href="#">سرویس های ما</a></h6>
                                    <div class="text">از طریق سامانه های زیر به راحتی در معاملات برخط بورس اوراق بهادار و بورس کالا سهیم باشید</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-8 col-sm-12">
                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/service-5.jpg')}}" alt>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4> با</h4>
                                    <h2>16</h2> <span>سال سابقه</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<section class="services-section-nine">
    <div class="auto-container">

        <!-- Sec Title Two -->
        <div class="sec-title-two centered">
            <div class="title">دقت و امنیت</div>
            <h2>قرار گرفتن بین برترین کارگزار های بورس <br>توسط <span>سرویس های ما</span></h2>
        </div>

        <div class="clearfix">

            <!-- Services Block Twelve -->
            <div class="services-block-twelve col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/service-6.jpg')}}" alt>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4>ماموریت</h4>
                                    <div class="text">
                                        همچنین میتوانید در سریع ترین زمان موجود پاسخ سوالات خود را در قسمت سوالات متداول بیابید . در صورتی که پاسخ سوال خود را در قسمت سوالات متداول پیدا نکردید میتوانید از قسمت چت آنلاین وبسایت با ما در تماس باشید.

                                        بخش سوالات متداول</div>
                                    <div class="arrow-box fa fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="large-icon"></div>
                                <div class="content-two">
                                    <div class="icon-box">
                                        <span class="icon fa fa-share"></span>
                                    </div>
                                    <h4><a href="#">چشم انداز</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Services Block Twelve -->
            <div class="services-block-twelve col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/service-8.jpg')}}" alt>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4>استفاده راحت</h4>
                                    <div class="text">
                                        همچنین میتوانید در سریع ترین زمان موجود پاسخ سوالات خود را در قسمت سوالات متداول بیابید . در صورتی که پاسخ سوال خود را در قسمت سوالات متداول پیدا نکردید میتوانید از قسمت چت آنلاین وبسایت با ما در تماس باشید.

                                        بخش سوالات متداول</div>
                                    <div class="arrow-box fa fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="large-icon "></div>
                                <div class="content-two">
                                    <div class="icon-box">
                                        <span class="icon fa fa-share"></span>
                                    </div>
                                    <h4><a href="#">نقدشونده</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Services Block Twelve -->
            <div class="services-block-twelve col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/service-7.jpg')}}" alt>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4>قرارداد ها</h4>
                                    <div class="text">
                                        همچنین میتوانید در سریع ترین زمان موجود پاسخ سوالات خود را در قسمت سوالات متداول بیابید . در صورتی که پاسخ سوال خود را در قسمت سوالات متداول پیدا نکردید میتوانید از قسمت چت آنلاین وبسایت با ما در تماس باشید.

                                        بخش سوالات متداول</div>
                                    <div class="arrow-box fa fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="large-icon"></div>
                                <div class="content-two">
                                    <div class="icon-box">
                                        <span class="icon fa fa-share"></span>
                                    </div>
                                    <h4><a href="#">مدیریت</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Services Block Twelve -->
            <div class="services-block-twelve col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/service-6.jpg')}}" alt>
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h4>برسی</h4>
                                    <div class="text">
                                        همچنین میتوانید در سریع ترین زمان موجود پاسخ سوالات خود را در قسمت سوالات متداول بیابید . در صورتی که پاسخ سوال خود را در قسمت سوالات متداول پیدا نکردید میتوانید از قسمت چت آنلاین وبسایت با ما در تماس باشید.

                                        بخش سوالات متداول.</div>
                                    <div class="arrow-box fa fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Overlay Box Two -->
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="large-icon "></div>
                                <div class="content-two">
                                    <div class="icon-box">
                                        <span class="icon fa fa-share"></span>
                                    </div>
                                    <h4><a href="#">جستجو</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="case-section alternate">
    <div class="auto-container">
        <!-- Sec Title Two -->
        <div class="sec-title-two">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">برسی کیس ها</div>
                    <h2>استراتژی معاملات <br> به سمت <span>برند موفق</span></h2>
                </div>
                <div class="pull-right">
                    <div class="text">برای ثبت نام در سامانه سجام میتوانید از اپلیکیشن  سیگنال (signal) برای انجام احراز هویت غیر حضوری استفاده نمایید..</div>
                </div>
            </div>
        </div>

        <div class="clearfix">

            <!-- Case Block -->
            <div class="case-block style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('front/images/t1.png')}}" alt>
                    </div>
                    <div class="title">تحقیقات</div>
                    <h5><a href="#">استراتژی برس معاملات موفق</a></h5>
                    <div class="text">جهت احراز هویت غیرحضوری که برای نخستین بار در کشور ارائه گردیده است از اپلیکیشن سیگنال استفاده نمایید.</div>
                    <a href="#" class="arrow fa fa-plus"> </a>
                </div>
            </div>

            <!-- Case Block -->
            <div class="case-block style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('front/images/t2.png')}}" alt>
                    </div>
                    <div class="title">استیبل کردن معاملات</div>
                    <h5><a href="#">برسی معاملا موفق به سمت پیشرفت</a></h5>
                    <div class="text">پس از انجام مرحله دو شما میتوانید از طریق بخش افتتاح حساب آنلاین جهت دریافت کد معاملات برخط اقدام کنید.

                    </div>
                    <a href="#" class="arrow fa fa-plus"></a>
                </div>
            </div>

            <!-- Case Block -->
            <div class="case-block style-two col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('front/images/t3.png')}}" alt>
                    </div>
                    <div class="title">تحقیقات</div>
                    <h5><a href="#">شرکت گنجینه سپهر پارت</a></h5>
                    <div class="text">شرکت کارگزاری گنجینه سپهر پارت با 16 سال سابقه فعالیت و اخذ بسیاری از مجوز های سازمان بورس و اوراق بهادار و پرسنلی مجرب یکی از بهترین انتخاب ها برای ورود و سرمایه گذاری است.</div>
                    <a href="#" class="arrow fa fa-plus"></a>
                </div>
            </div>

        </div>

    </div>
</section>--}}



<section class="call-to-action" >
    <img src="{{asset('front/images/banner.jpg')}}">
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



<!-- News Section Two -->
{{--<section class="news-section-two alternate">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title-two centered">
            <div class="title">سامانه های معاملاتی کارگزاری گنجینه سپهر</div>
            <h2>آخرین اخبار  <span></span></h2>
            <div class="text">از طریق سامانه های زیر به راحتی در معاملات برخط بورس اوراق بهادار و بورس کالا سهیم باشید <br>با ما بهترین تجربه معاملات را داشته باشید.</div>
        </div>

        <div class="row clearfix">

            <!-- News Block Two -->
            <div class="news-block-two brown col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/news-4.jpg')}}" alt>
                        <div class="overlay-box">
                            <a href="images/resource/news-4.jpg" data-fancybox="news" data-caption class="plus fa fa-plus"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>مدیر</li>
                        </ul>
                        <h5><a href="#">
                                راهنمای خرید خودرو از بورس کال</a></h5>
                        <a href="#" class="theme-btn btn-style-ten">خواندن ادامه</a>
                    </div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block-two brown col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/news-5.jpg')}}" alt>
                        <div class="overlay-box">
                            <a href="images/resource/news-5.jpg" data-fancybox="news" data-caption class="plus fa fa-plus"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>مدیر</li>
                        </ul>
                        <h5><a href="#">نحوه اخذ کد اختیار معامله (آپشن)</a></h5>
                        <a href="#" class="theme-btn btn-style-ten">خواندن ادامه</a>
                    </div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block-two brown col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('front/images/news-6.jpg')}}" alt>
                        <div class="overlay-box">
                            <a href="images/resource/news-6.jpg" data-fancybox="news" data-caption class="plus fa fa-plus"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>September 12, 2019</li>
                            <li><span class="fa fa-user"></span>مدیر</li>
                        </ul>
                        <h5><a href="#">نحوه دریافت برگه سهم از سامانه سمات.</a></h5>
                        <a href="#" class="theme-btn btn-style-ten">خواندن ادامه</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>--}}

<section class="sponsors-section">
    <div class="auto-container">

        <div class="eval">
            <div class="eval-body">
                <div class="row">
                    <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                    {{-- <span class="dot"></span> --}}
                    <div class="line-left"></div>
                    <h2>شرکای تجاری</h2>
                    <div class="line-right"></div>
                    <img src="{{asset('front/images/fr-pg-4.jpg')}}" alt="دسترسی سریع">
                    {{-- <span class="dot"></span> --}}
                </div>
            </div>
        </div>
        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li><div class="image-box"><a href="https://www.partdp.ir"><img src="{{asset('front/images/part_logo.png')}}" alt></a></div></li>
                <li><div class="image-box"><a href="https://isignal.ir"><img src="{{asset('front/images/signal.png')}}" alt></a></div></li>
                <li><div class="image-box"><a href="https://www.irasam.ir"><img src="{{asset('front/images/resam.png')}}" alt></a></div></li>
                <li><div class="image-box"><a href="https://farashenasa.ir"><img src="{{asset('front/images/logo-e1621233374947.png')}}" alt></a></div></li>
                <li><div class="image-box"><a href="https://imerat.ir"><img src="{{asset('front/images/imerat.png')}}" alt></a></div></li>
                <li><div class="image-box"><a href="https://www.sabtyar.com"><img src="{{asset('front/images/sabtyar.jpg')}}" alt></a></div></li>
            </ul>
        </div>

    </div>
</section>


@endsection

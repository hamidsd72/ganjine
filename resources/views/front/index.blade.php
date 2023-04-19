@extends('layouts.front.header_master')
@section('style')
@include('layouts.front.css')
@endsection
@section('body')

<!--Main Slider-->
<section class="main-slider style-three pt-5 pt-lg-0">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @foreach ($sliders as $slider)
            @if ($slider->photo)
                <a href="{{ $slider->url?$slider->url:'#' }}">
                    <div class="slide" style="background-image:url('{{url($slider->photo->path)}}')">
                        <img src="{{url($slider->photo->path)}}">
                        <div class="auto-container " id="slider-text-box-menu">
                            @if ($slider->title || $slider->text1)
                                <div class="content alternate mt-lg-5 text-center" dir="rtl">
                                    <h1 class="style-two pb-1 pt-lg-2 m-0">{{$slider->title}}</h1>
                                    <div class="text alternate m-0">{{$slider->text1}}</div>
                                    <div class="btn-box mt-1 mt-lg-3">
                                        @if ($slider->url_name)
                                            <a href="{{ $slider->url?$slider->url:'#' }}" class="theme-btn btn-style-nine btn-light btn-style-nine-costum{{$slider->id}}">{{$slider->url_name}}</a>
                                        @endif
                                        @if ($slider->url2_name)
                                            <a href="{{ $slider->url2?$slider->url2:'#' }}" class="theme-btn btn-style-nine btn-light mx-2 btn-style-nine-costum{{$slider->id}}">{{$slider->url2_name}}</a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</section>


<section id="menu_slider_downs" class="menu_slider_downs bg-white teams pb-0 mt-2 mt-lg-5">
    <div class="auto-container">
        <div class="eval pt-4 mb-4 pt-lg-5 mb-lg-5">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>دسترسی سریع</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>

        <div class="row pt-lg-5">
            @foreach ($items->where('section', 1) as $item)
                <a class="col-lg px-5" href="{{$item->link?$item->link:'#'}}">
                    <div class="card1">
                        <img alt="{{$item->title}}" class="card1_img" style="border-radius: 6px;" src="{{$item->photo?url($item->photo->path):''}}">
                    </div>
                    <div class="card1_in rounded">
                        <div class="card1_text">
                            <h4 class="card1_name p-1 px-3">{{ $item->title }}</h4>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section brown py-lg-0">
    <div class="auto-container">
        <div class="eval mb-lg-5 pt-lg-5">
            <div class="eval-body">
                <div class="row">
                    <div class="line-left"></div>
                    <h2>معرفی ما</h2>
                    <div class="line-right"></div>
                </div>
            </div>
        </div>
  
        <div class="row clearfix pt-lg-5">
    
            {{-- <div class="video-column content-column col-lg-6"> --}}
            <div class="col-lg-6 pb-4 pb-lg-0 pt-lg-4">
                <div class="inner-column px-lg-0">
                    {{-- <div class="video-box"> --}}
                        <figure class="image">
                            @foreach ($items->where('section', 2)->where('position', 1) as $item)
                                <img alt="{{$item->title}}" src="{{$item->photo?url($item->photo->path):''}}" class="rounded">
                            @endforeach
                        </figure>
                        <a href="" class="lightbox-image overlay-box"></a>
                    {{-- </div> --}}
                </div>
            </div>
                
            <div class="video-column content-column col-lg my-lg-auto bpsefw-1213423">
                <div class="fact-counter">
                    <div class="auto-container">
                        <div class="row clearfix mt-lg-5 pt-lg-3">
                            @foreach ($items->where('section', 2)->where('position', 2) as $item)
                                <div class="column counter-column col-lg-6">
                                    <figure class="image text-center item-align-center cu-card px-5 font-weight-bold">
                                        <img alt="{{$item->title}}" class="vector-img" src="{{$item->photo?url($item->photo->path):''}}">
                                        {!! $item->text !!}
                                    </figure>
                                </div>
                            @endforeach
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
        <div class="eval my-lg-5 pt-lg-5">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>اخبار و رویداد</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>

        <div class="two-item-carousel owl-carousel owl-theme news py-lg-5">

            @foreach ($blogs as $blog)
                <article class="article">
                    <div class="box">
                        <div class="img-box"><img class="img-w" src="{{$blog->photo?url($blog->photo->path):''}}" alt="{{$blog->title}}" width="400" height="240" /></div>
                        <div class="text-box backdrop-blur">
                            <a class="title" href="#" target="_blank" name="{{$blog->title}}"><h2>{{$blog->title}}</h2></a>
                            <div class="dscp">{{$blog->short_text}}</div>
                            <div class="share-box">
                                <div class="links">
                                    <a href="mailto:{{ $setting->email }}"><i class="fa fa-globe"></i></a>
                                    <a href="{{ $setting->linkdin }}"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{ $setting->telegram }}"><i class="fa fa-send-o"></i></a>
                                    <a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>    
            @endforeach

        </div>

    </div>
</section>
<!-- End Testimonial Section Three -->

<section class="call-to-action" >
    @foreach ($items->where('section', 4) as $item)
        <img alt="{{$item->title}}" src="{{$item->photo?url($item->photo->path):''}}">
    @endforeach
</section>

<section class="sponsors-section">
    <div class="auto-container">

        <div class="eval my-lg-4">
            <div class="eval-body">
                <div class="row">
                     
                    <div class="line-left"></div>
                    <h2>شرکای تجاری</h2>
                    <div class="line-right"></div>
                     
                </div>
            </div>
        </div>
        <div class="carousel-outer">
            <ul class="sponsors-carousel owl-carousel owl-theme">
                @foreach ($partners as $partner)
                    <li><div class="image-box"><a href="{{$partner->link}}"><img src="{{$partner->photo?url($partner->photo->path):''}}" alt="{{$partner->name}}"></a></div></li>
                @endforeach
            </ul>
        </div>

    </div>
</section>

@endsection
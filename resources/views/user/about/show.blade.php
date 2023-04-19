
@extends('layouts.front.header_master')
@section('style')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('user/front/about.css') }}"/> --}}
<style>
    
</style>
@endsection
@section('body')
    <div id="about_us">
        
        {{--about Head--}}
        {{-- <section id="top" class="fluid-section-one bg-f9">
            <div class="container py-5">
                <div class="col-lg-8 col-md-10 mx-auto t-center p-mb-0">
                    {!! set_lang($item,'head_text',app()->getLocale()) !!}
                </div>
            </div>
        </section> --}}
        {{--about--}}
    
        {{--vision--}}
        <section id="vision" id="s2-our_about_area" class="our_about_area">
            <div class="container pt-lg-5 pb-lg-4">
                @if(app()->getLocale()=='fa')
                    @if($item->vision_text || count($faqs2))
                        <div class="eval pt-lg-4">
                            <div class="eval-body">
                                <div class="row">
                                    <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                    <div class="line-left"></div>
                                    <h2>{{set_lang($item,'title',app()->getLocale())}}</h2>
                                    <div class="line-right"></div>
                                    <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg my-auto ">
                                <div class="our_about_left_content w-100">
                                    {!! set_lang($item,'text',app()->getLocale()) !!}
                                    <p class="t-justify ">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </p>
                                    <p class="t-justify ">
                                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </p>
                                    @if(count($faqs1))
                                        <div class="panel-group about_faq faq_ques" id="accordion1" role="tablist">
                                            @foreach($faqs1 as $key => $faq1)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faq{{$key+1}}">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#faq_c{{$key+1}}"
                                                             aria-expanded="false" aria-controls="company_c{{$key+1}}" class="collapsed">
                                                                {{set_lang($faq1,'title',app()->getLocale())}}
                                                                <i class="fas fa-plus" aria-hidden="true"></i><i class="fas fa-minus" aria-hidden="true"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="faq_c{{$key+1}}" class="panel-collapse collapse" role="tabpanel"
                                                         aria-labelledby="faq{{$key+1}}" aria-expanded="false" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <p>{!! nl2br(e(set_lang($faq1,'text',app()->getLocale()))) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-section p-0">
                                    <div class="clearfix">
                                        {{-- <img src="{{url($item->vision_pic)}}" alt="{{set_lang($item,'vision_title',app()->getLocale())}}"> --}}
                                        <div class="video-column content-column">
                                            <div class="inner-column">
                                                <div class="video-box">
                                                    <figure class="image">
                                                        <img src="/asset/front/images/about.jpg" alt="">
                                                    </figure>
                                                    <a href="" class="lightbox-image overlay-box"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    @if(check_lang($item,'about',app()->getLocale()) && check_lang($item,'about',app()->getLocale()))
                        <section class="fluid-section-one">
                            <div class="outer-container clearfix">
                                <!--Image Column-->
                                <div class="image-column hidden-xs"
                                     style="background-image:url('{{$item->vision_pic?url($item->vision_pic): '/asset/front/images/nopic.jpg' }}')">
                                </div>
    
                                <!--Content Column-->
                                <div class="content-column">
                                    <div class="inner-column">
                                        <div class="clearfix">
                                            <!--Title Column-->
                                            <div class="title-box">
                                                <div class="box-inner">
                                                    <h2>{{set_lang($item,'vision_title',app()->getLocale())}}</h2>
                                                    <hr/>
                                                    <div class="text">
                                                        {!! set_lang($item,'vision_text',app()->getLocale()) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </section>
                    @endif
                @endif
            </div>
        </section>
    
        {{--target--}}
        @if(count($items))
            <section id="target" class="why_choose">
                <div class="container">
                    <div class="eval">
                        <div class="eval-body">
                            <div class="row">
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                <div class="line-left"></div>
                                <h2>{{__('text.about.feature')}}</h2>
                                <div class="line-right"></div>
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($items as $itemss)
                            <div class="col-md-4 mx-auto">
                                <div class="choose_outer text-center">
                                    <figure>
                                        <img src="{{is_file($itemss->pic)?url($itemss->pic): '/asset/front/images/fr-pg-3.jpg' }}" alt="{{set_lang($itemss,'title',app()->getLocale())}}">
                                    </figure>
                                    <h3>{{set_lang($itemss,'title',app()->getLocale())}}</h3>
                                    {{set_lang($itemss,'text',app()->getLocale())}}
                                    <div class="border-top_bottom"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    
        {{--team--}}
        <section id="team" class="why_choose bg-white teams pt-lg-5">
            <div class="container pt-lg-5">
                <div class="sec_middle_title partner">
                    <div class="eval">
                        <div class="eval-body">
                            <div class="row">
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                <div class="line-left"></div>
                                {{-- <h2>{{$item->title_team}}</h2> --}}
                                <h2>سرمایه‌های انسانی</h2>
                                <div class="line-right"></div>
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 mx-auto text-lg-center t-justify ">
                        {{-- {{$item->text_team}} --}}
                        بی‌شک هر مجموعه‌ای سرمایه ای دارد که به آن می‌بالد و با اتکا به آن سرمایه است که می‌تواند اهداف برنامه‌ریزی شده خود را محقق کند. مجموعه کارگزاری گنجینه سپهر تمام آن چیزی است که ما را قادر به ترسیم اهدافمان می‌کند.
                    </div>
                </div>
                
                @if(count($all_teams))
                    <div class="row pt-5">
                        @foreach($all_teams as $team1)
                            <div class="col-6 col-lg-4 mx-auto mb-5 pb-lg-5">
                                <div class="card1 text-center">
                                    <img alt="{{$team1->name}}" class="card1_img shadow d-none d-lg-block" src="{{ is_file($team1->pic)?url($team1->pic): '/asset/front/images/user.png' }}">
                                    <img alt="{{$team1->name}}" class="card1_img-sm shadow d-lg-none" src="{{ is_file($team1->pic)?url($team1->pic): '/asset/front/images/user.png' }}">
                                    <div class="card1_in">
                                        <div class="card1_text">
                                            {{-- <div class="card1_social">
                                                @if($team1->email)
                                                    <a class="card1_social_a m-0 mx-lg-2" title="email" target="_blank"
                                                    href="mailto:{{$team1->email}}">
                                                        <i class="fa fa-at"></i>
                                                    </a>
                                                @endif
                                                @if($team1->phone)
                                                    <a class="card1_social_a m-0 mx-lg-2" title="phone" target="_blank"
                                                    href="tel:{{$team1->phone}}">
                                                        <i class="fa fa-phone"></i>
                                                    </a>
                                                @endif
                                                @if($team1->linkedin)
                                                    <a class="card1_social_a m-0 mx-lg-2" title="linkedin" target="_blank"
                                                    href="{{$team1->linkedin}}">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                @endif
                                            </div> --}}
                                            <h4 class="card1_name d-none d-lg-block">{{$team1->name}}</h4>
                                            <h6 class="card1_name d-lg-none" style="font-size: 14px;">{{$team1->name}}</h6>
                                            <h6 class="card1_job d-none d-lg-block">{{$team1->job}}</h6>
                                            <h6 class="card1_job d-lg-none" style="font-size: 10px;">{{$team1->job}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                
            </div>
        </section>
    
        {{-- banks --}}
        <section id="banks1" class="why_choose bg-f9 banks pb-5">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="eval mb-lg-5">
                        <div class="eval-body">
                            <div class="row">
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank}}</h2>
                                <div class="line-right"></div>
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none">
                    <h4 class="text-center text-dark font-weight-bold pb-4">
                        {{$item->title_bank}}
                    </h4>
                </div>
                @if(count($banks1))
                    <div class="row">
                        @foreach($banks1 as $bank)
                            <div class="col-md-6 mb-4">
                                <div class="card_bank text-center">
                                    <img src="{{ 'https://hafezbroker.ir/'.$bank->pic }}" alt="بانک پارسیان شعبه بهشتی">
                                    <div class="text w-100">
                                        <h3 class="pt-3">{{$bank->title}}</h3>
                                        <p class="py-2">
                                            <strong>شماره شبا: </strong>
                                            <input type="text" id="shaba{{$bank->id}}" class="copytextbox" value="{{$bank->shaba}}" readonly>
    
                                            <button onclick="shaba{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                        <p class="">
                                            <strong>شماره حساب: </strong>
                                            <input type="text" id="hesab{{$bank->id}}" class="copytextbox2" value="{{$bank->hesab}}" readonly>
                                            <button onclick="hesab{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                    </div>
                                </div>
                                <script>
                                    function shaba{{$bank->id}}() {
                                        var copyText = document.getElementById("shaba{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره شبا کپی شد");
                                    }
                                    function hesab{{$bank->id}}() {
                                        var copyText = document.getElementById("hesab{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره حساب کپی شد");
                                    }
                                </script>
                            </div>
                        @endforeach   
                    </div>
                @endif
            </div>
        </section>
    
        {{-- banks --}}
        <section id="banks2" class="why_choose bg-f9 banks bg-white mb-5">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="eval mb-lg-5">
                        <div class="eval-body">
                            <div class="row">
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank1}}</h2>
                                <div class="line-right"></div>
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none">
                    <h4 class="text-center text-dark font-weight-bold pb-4">
                        {{$item->title_bank1}}
                    </h4>
                </div>
                @if(count($banks2))
                    <div class="row">
                        @foreach($banks2 as $bank)
                            <div class="col-md-6 mb-4">
                                <div class="card_bank text-center">
                                    <img src="{{ 'https://hafezbroker.ir/'.$bank->pic }}" alt="بانک پارسیان شعبه بهشتی">
                                    <div class="text w-100">
                                        <h3>{{$bank->title}}</h3>
                                        <p class="py-2">
                                            <strong>شماره شبا: </strong>
                                            <input type="text" id="shaba{{$bank->id}}" class="copytextbox" value="{{$bank->shaba}}" readonly>
    
                                            <button onclick="shaba{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                        <p>
                                            <strong>شماره حساب: </strong>
                                            <input type="text" id="hesab{{$bank->id}}" class="copytextbox2" value="{{$bank->hesab}}" readonly>
                                            <button onclick="hesab{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                    </div>
                                </div>
                                <script>
                                    function shaba{{$bank->id}}() {
                                        var copyText = document.getElementById("shaba{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره شبا کپی شد");
                                    }
                                    function hesab{{$bank->id}}() {
                                        var copyText = document.getElementById("hesab{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره حساب کپی شد");
                                    }
                                </script>
                            </div>
                        @endforeach   
                    </div>
                @endif
            </div>
        </section>
    
        {{-- banks --}}
        <section id="banks3" class="why_choose bg-f9 banks pb-5">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="eval mb-lg-5">
                        <div class="eval-body">
                            <div class="row">
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank2}}</h2>
                                <div class="line-right"></div>
                                <img src="/asset/front/images/fr-pg-4.svg" alt="دسترسی سریع">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none">
                    <h4 class="text-center text-dark font-weight-bold pb-4">
                        {{$item->title_bank2}}
                    </h4>
                </div>
                @if(count($banks3))
                    <div class="row">
                        @foreach($banks3 as $bank)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card_bank text-center">
                                    <img src="{{ 'https://hafezbroker.ir/'.$bank->pic }}" alt="بانک پارسیان شعبه بهشتی">
                                    <div class="text w-100">
                                        <h3 class="pt-3">{{$bank->title}}</h3>
                                        <p class="py-2">
                                            <strong>شماره شبا: </strong>
                                            <input type="text" id="shaba{{$bank->id}}" class="copytextbox" value="{{$bank->shaba}}" readonly>
                                            <button onclick="shaba{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                        <p class="">
                                            <strong>شماره حساب: </strong>
                                            <input type="text" id="hesab{{$bank->id}}" class="copytextbox2" value="{{$bank->hesab}}" readonly>
                                            <button onclick="hesab{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                    </div>
                                </div>
                                <script>
                                    function shaba{{$bank->id}}() {
                                        var copyText = document.getElementById("shaba{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره شبا کپی شد");
                                    }
                                    function hesab{{$bank->id}}() {
                                        var copyText = document.getElementById("hesab{{$bank->id}}");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("شماره حساب کپی شد");
                                    }
                                </script>
                            </div>
                        @endforeach   
                    </div>
                @endif
            </div>
        </section>
    
    </div>

    <script>
        function findPos(obj) {
            location.href = "#banks1";
        }
    </script>

@endsection
@section('js') @endsection
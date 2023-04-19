
@extends('layouts.front.header_master')
@section('style')
<style>
    
</style>
@endsection
@section('body')
    <div id="about_us">
        <div class="sliderbar_top pt-5 pt-lg-0">
            @foreach ($data as $page)
                {{-- <img src="{{ $page->photo ? url($page->photo->path) : '' }}" class="w-100 banner-top-c3243" alt="this page"> --}}
                <div class="row" style="direction: ltr;">
                    <div class="col-lg"><img src="{{ $page->photo ? url($page->photo->path) : '' }}" class="w-100" alt="this page"></div>
                    <div class="col-lg my-auto">
                        <div class="mx-auto" style="max-width: 320px">
                            <h2 class="py-4 font-weight-bold">{!! $page->text !!}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <section id="vision" id="s2-our_about_area" class="our_about_area pt-5 pt-lg-0">
            <div class="container pt-lg-5 pb-lg-4">
                <div class="eval pt-lg-4">
                    <div class="eval-body">
                        <div class="row">
                            <div class="line-left"></div>
                            <h2>{{ $item->title }}</h2>
                            <div class="line-right"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg my-auto ">
                        <div class="our_about_left_content w-100">{!! $item->head_text !!}</div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="about-section p-0">
                            <div class="clearfix">
                                <div class="video-column content-column">
                                    <div class="inner-column">
                                        <div class="video-box">
                                            <figure class="image">
                                                <img src="{{ $item->index_pic?url($item->index_pic):'' }}" alt="{{ $item->title }}">
                                            </figure>
                                            <a href="#" class="lightbox-image overlay-box"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        {{--target--}}
        {{--     
        @if(count($items))
            <section id="target" class="why_choose">
                <div class="container">
                    <div class="eval">
                        <div class="eval-body">
                            <div class="row">
                                  
                                <div class="line-left"></div>
                                <h2>{{ $feature->title }}</h2>
                                <div class="line-right"></div>
                                  
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
     --}}
        {{--team--}}
        <section id="team" class="why_choose bg-white teams pt-lg-5">
            <div class="container pt-lg-5">
                <div class="sec_middle_title partner">
                    <div class="eval">
                        <div class="eval-body">
                            <div class="row">
                                  
                                <div class="line-left"></div>
                                <h2>{{$item->title_team}}</h2>
                                <div class="line-right"></div>
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 mx-auto text-lg-center t-justify ">{{$item->text_team}}</div>
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
                                  
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank}}</h2>
                                <div class="line-right"></div>
                                  
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
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card_bank text-center">
                                    <img src="{{ url($bank->pic) }}" alt="{{$bank->title}}">
                                    <div class="text w-100">
                                        <h3>{{$bank->title}}</h3>
                                        <p>
                                            <strong>شماره حساب: </strong>
                                            <input type="text" id="hesab{{$bank->id}}" class="copytextbox2" value="{{$bank->hesab}}" readonly>
                                            <button onclick="hesab{{$bank->id}}()" class="btn-copytextbox">
                                                کپی
                                            </button>
                                        </p>
                                        <p>
                                            <strong>شماره شبا: </strong>
                                            <input type="text" id="shaba{{$bank->id}}" class="copytextbox" value="{{$bank->shaba}}" readonly>
    
                                            <button onclick="shaba{{$bank->id}}()" class="btn-copytextbox">
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
        {{-- <section id="banks2" class="why_choose bg-f9 banks bg-white mb-5">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="eval mb-lg-5">
                        <div class="eval-body">
                            <div class="row">
                                  
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank1}}</h2>
                                <div class="line-right"></div>
                                  
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
                                    <img src="{{ url($bank->pic) }}" alt="{{$bank->title}}">
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
        </section> --}}
    
        {{-- banks --}}
        {{-- <section id="banks3" class="why_choose bg-f9 banks pb-5">
            <div class="container">
                <div class="d-none d-lg-block">
                    <div class="eval mb-lg-5">
                        <div class="eval-body">
                            <div class="row">
                                  
                                <div class="line-left"></div>
                                <h2>{{$item->title_bank2}}</h2>
                                <div class="line-right"></div>
                                  
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
                                    <img src="{{ url($bank->pic) }}" alt="{{$bank->title}}">
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
        </section> --}}
    
    </div>

    <script>
        function findPos(obj) {
            location.href = "#banks1";
        }
    </script>

@endsection
@section('js') @endsection
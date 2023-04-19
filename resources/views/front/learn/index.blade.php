@extends('layouts.front.header_master')
@section('style')
<style>
    @media (max-width: 640px){
        .faq_ques .panel.panel-default .panel-heading .panel-title a {
            font-size: 12px !important;
            line-height: 6px !important;
            padding: 12px 8px 4px !important;
        }
    }
    .cart_animeOne:hover i {-webkit-animation:flip-scale-2-hor-top .5s linear both;animation:flip-scale-2-hor-top .5s linear both}
    @-webkit-keyframes flip-scale-2-hor-top{0%{-webkit-transform:translateY(0) rotateX(0) scale(1);transform:translateY(0) rotateX(0) scale(1);-webkit-transform-origin:50% 0;transform-origin:50% 0}50%{-webkit-transform:translateY(-50%) rotateX(-90deg) scale(2);transform:translateY(-50%) rotateX(-90deg) scale(2);-webkit-transform-origin:50% 50%;transform-origin:50% 50%}100%{-webkit-transform:translateY(-100%) rotateX(-180deg) scale(1);transform:translateY(-100%) rotateX(-180deg) scale(1);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}}@keyframes flip-scale-2-hor-top{0%{-webkit-transform:translateY(0) rotateX(0) scale(1);transform:translateY(0) rotateX(0) scale(1);-webkit-transform-origin:50% 0;transform-origin:50% 0}50%{-webkit-transform:translateY(-50%) rotateX(-90deg) scale(2);transform:translateY(-50%) rotateX(-90deg) scale(2);-webkit-transform-origin:50% 50%;transform-origin:50% 50%}100%{-webkit-transform:translateY(-100%) rotateX(-180deg) scale(1);transform:translateY(-100%) rotateX(-180deg) scale(1);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}}
</style>
@endsection
@section('body')
    <section class="faq_page_container pt-4">
        <a href="{{$page->link}}" target="_blank">
            <div class="sliderbar_top pt-5 pt-lg-0">
                {{-- <img src="{{ $page->pic ? url($page->pic) : '' }}" class="w-100 banner-top-c3243" alt="this page"> --}}
                <div class="row" style="direction: ltr;">
                    <div class="col-lg"><img src="{{ $page->pic ? url($page->pic) : '' }}" class="w-100" alt="this page"></div>
                    <div class="col-lg my-auto">
                        <div class="mx-auto" style="max-width: 320px">
                            <h2 class="py-4 font-weight-bold text-secondary">{!! $page->page_content !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="eval pt-lg-4 mb-3">
                        <div class="eval-body">
                            <div class="row">
                                <div class="line-left"></div>
                                <h2>دسته بندی ها</h2>
                                <div class="line-right"></div>
                            </div>
                        </div>
                    </div>

                    <div id="about_us">
                        <div class="row">

                            @foreach ($items as $item)
                                <a class="col-md-6 col-lg-4 mb-4 text-dark" href="{{ route('user.learn.show',[ $item->id, str_replace(' ','-',$item->name)]) }}">
                                    <div class="card_bank text-center cart_animeOne">
                                        <div class="arrow-circle">
                                            <i class='fa fa-arrow-down text-white'></i>
                                        </div>
                                        <div class="text w-100">
                                            <h3 class="pt-3">{{$item->name}}</h3>
                                            <p class="py-2">
                                                {!! $item->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('user/front/numberToFarsi.js')}}"></script>

@endsection
@section('js') @endsection

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
</style>
@endsection
@section('body')
    <section class="faq_page_container pt-4">
        <a href="{{$page->link}}" target="_blank">
            <div class="sliderbar_top pt-5 pt-lg-0" style="background: #f4f4f4bd">
                {{-- <img src="{{ $page->pic ? url($page->pic) : '' }}" class="w-100 {!! $page->page_content !!}" alt="this page"> --}}
                <div class="row" style="direction: ltr;">
                    <div class="col-lg"><img src="{{ $page->pic ? url($page->pic) : '' }}" class="w-100" alt="this page"></div>
                    <div class="col-lg my-auto">
                        <div class="mx-auto" style="max-width: 320px">
                            @if ($items->first() && $items->first()->category)
                                <h2 class="py-4 font-weight-bold text-secondary">{{$items->first()->category->name}}</h2>
                            @else
                                <h2 class="py-4 font-weight-bold text-secondary">{!! $page->page_content !!}</h2>
                            @endif
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
                                <h2>آموزش ها</h2>
                                <div class="line-right"></div>
                            </div>
                        </div>
                    </div>

                    <div id="about-page">

                        <div id="accordion" class="pb-4">
                            @foreach($items as $key => $item)
                                <div class="box">
                                    <div class="head" id="heading{{$item->id}}">
                                        <button class="btn accordion-button @if( $key>0 )collapsed @endif" id="{{$item->id}}" data-toggle="collapse"
                                            data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                            {{$item->name}}
                                        </button>
                                    </div>
                            
                                    <div id="collapse{{$item->id}}" class="collapse accordion-button @if($key==0)collapsed show @endif" aria-labelledby="heading{{$item->id}}" data-parent="#accordion">
                                        <div class="body">
                                            <div class="col-md-8 col-lg-4 p-2 px-4">
                                            </div>
                                            <p class="address mx-4 pt-2">{!! $item->description !!}</p>
                                            @if ($item->link!=null)
                                                <div class="py-4">
                                                    <a href="javascript:void(0);" class="bg-success rounded p-3 text-white" onclick="showVideo('{{$item->id}}')">نمایش ویدیو این مطلب</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            
                    </div>

                </div>
            </div>
        </div>
    </section>


    @foreach($items as $video)
        <div class="col-md-8 col-lg-6 mx-auto videos {{'video'.$video->id}} d-none"> <p class="my-3">{{ $video->name }}</p> {!! $video->link !!}</div>
    @endforeach
    
    <script src="{{asset('user/front/numberToFarsi.js')}}"></script>

    <script>
        function showVideo(id) {
            document.querySelectorAll('.videos').forEach(element => {
                element.classList.add('d-none');
            });
            document.querySelector(`.video${id}`).classList.remove('d-none');
            window.scrollTo({top: document.body.scrollHeight, behavior: 'smooth'})
        }
    </script>
@endsection
@section('js') @endsection
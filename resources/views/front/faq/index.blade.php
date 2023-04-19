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
    <section class="faq_page_container pt-5">
        <div class="sliderbar_top pt-3 pt-lg-0" style="background: #f4f4f4bd">
            <div class="row" style="direction: ltr;">
                <div class="col-lg"><img src="https://hafezbroker.ir/includes/asset/uploads/menu/photos/pic-a31cf7e7d1e52533af8337ce608b1cee.jpg" class="w-100" alt="this page"></div>
                <div class="col-lg my-auto">
                    <div class="mx-auto" style="max-width: 280px">
                        <h2 class="py-4">آموزش</h2>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    


                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('user/front/numberToFarsi.js')}}"></script>

@endsection
@section('js') @endsection
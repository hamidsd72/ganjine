
@extends('layouts.user')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('user/front/blogs.css') }}"/>
@endsection
@section('body')
    <link rel="stylesheet" type="text/css" href="{{asset('user/front/index.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('user/front/contact.css')}}"/>
    <nav aria-label="topbreadcrumb" class="topbreadcrumb">
        <div class="container">
            <ul class="breadcrumb p-2" style="background-color: #f8f8f8;">
                <li class="breadcrumb-item"><a href="{{url('/')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مقالات</li>
            </ul>
        </div>
    </nav>

    <div class="sec_middle_title" style="background-color: #eeeeee;">
        <div class="py-5">
            <div class="d-flex justify-content-center" >
                <h1>مقالات</h1>
            </div>
        </div>
    </div>

    <section class="main_blog_area p-0 pt-lg-1">
        <div class="container">
            <div class="row main_blog_inner">
                <div class="col-lg-12">
                    @if(count($items))
                        <div class="row">
                            @foreach($items->chunk(2) as $key => $blogs)
                                <div class="d-none">{{ $key%2==0 ? $circle = 'big' : $circle = 'small'}}</div>
                                @foreach($blogs as $item)
                                    <div class="main_blog_items-new p-4 col-lg-4">
                                    {{-- <div class="main_blog_items-new p-1 @if( $circle == 'big' ) col-lg-7 @else col-lg-5 @endif> --}}
                                        <div class="card_blog">
                                            <a href="{{route('user.blog.show',$item->slug)}}">
                                                <span class="post__badge">دانش فنی</span>
                                                <img style="width: 100%;max-height: 220px;" src="{{$item->photo?url($item->photo->path):url('includes/asset/user/pic/nopic.jpg')}}" alt="{{set_lang($item,'title',app()->getLocale())}}">

                                            </a>
                                            <div class="content" style="color: white;padding: 30px 20px 0px;">
                                                <a class="blog-text" href="{{route('user.blog.show',$item->slug)}}">
                                                    <h5>{{set_lang($item,'title',app()->getLocale())}}</h5>
                                                   {{-- @if( $circle == 'big' )
                                                        {{str_limit(set_lang($item,'short_text',app()->getLocale()),'200','...')}}
                                                    @else
                                                        {{str_limit(set_lang($item,'short_text',app()->getLocale()),'130','...')}}
                                                    @endif--}}
                                                </a>
                                                <p class="time_p" style="margin-top: 90px;border-top: 1px solid #eaeaea;
padding: 15px 30px;">
                                                    <span class="cal"><i class="fas fa-calendar-alt"></i> @if(app()->getLocale()=='fa') {{my_jdate($item->created_at,'d F Y')}} @else {{date('d F Y', strtotime($item->created_at))}} @endif</span>
                                                    <span class="cal"><i class="fas fa-eye ml-2"></i>{{$item->seen}}</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    @if($circle == 'big') <div class="d-none">{{ $circle = 'small' }}</div> @else <div class="d-none">{{ $circle = 'big' }}</div> @endif
                                @endforeach
                            @endforeach
                        </div>
                        <nav aria-label="Page navigation" class="blog_pagination my-5 mr-5">
                            {{$items->appends(Request::except('page'))->links()}}
                        </nav>
                    @else
                        <div class="col-12 alert alert-danger text-center">
                            {{__('text.not_found_msg')}}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('user/front/numberToFarsi.js')}}"></script>

@endsection
@section('js') @endsection
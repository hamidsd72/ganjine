@extends('layouts.front.header_master')
@section('style')
<style>
</style>
@endsection
@section('body')
    <section class="main_blog_area pt-5 pt-lg-0">
        <div class="container pt-4">
            <div class="row main_blog_inner">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach($items->chunk(2) as $key => $blogs)
                            <div class="d-none">{{ $key%2==0 ? $circle = 'big' : $circle = 'small'}}</div>
                            @foreach($blogs as $item)
                                @if ($item->photo)
                                    <div class="main_blog_items-new p-2 @if( $circle == 'big' ) col-lg-7 @else col-lg-5 @endif
                                        @if($item->id==($first ?? '')) main_blog_items-new-first @elseif($item->id==($second ?? '')) main_blog_items-new-second @endif">
                                        <div class="card_blog rounded">
                                            {{-- <a href="{{route('user.blog.show',[$item->type,app()->getLocale()=='fa'?$item->slug:$item->slug_en])}}"> --}}
                                            <a href="{{route('user.blog.show', $item->slug )}}">
                                                <img style="width: 100%;max-height: 220px;" src="{{url($item->photo->path)}}" alt="{{set_lang($item,'title',app()->getLocale())}}">
                                            </a>
                                            <div class="content p-3">
                                                <a class="text-dark" href="{{route('user.blog.show', $item->slug )}}">
                                                    <h5 class="pb-3 font-weight-bold">{{set_lang($item,'title',app()->getLocale())}}</h5>
                                                    <div class="d-none d-lg-block">
                                                        @if( $circle == 'big' )
                                                            {{str_limit(set_lang($item,'short_text',app()->getLocale()),'190','...')}}
                                                        @else
                                                            {{str_limit(set_lang($item,'short_text',app()->getLocale()),'130','...')}}
                                                        @endif
                                                    </div>
                                                    <div class="d-lg-none">
                                                        {{str_limit(set_lang($item,'short_text',app()->getLocale()),'190','...')}}
                                                    </div>
                                                </a>
                                                <p class="time_p pt-3">
                                                    <span class="cal"><i class="fa fa-calendar"></i> @if(app()->getLocale()=='fa') {{my_jdate($item->created_at,'d F Y')}} @else {{date('d F Y', strtotime($item->created_at))}} @endif</span>
                                                    <span class="cal"><i class="fa fa-eye ml-2"></i>{{$item->seen}}</span>
                                                </p>
                                            </div>
                
                                        </div>
                                    </div>
                                    @if($circle == 'big') <div class="d-none">{{ $circle = 'small' }}</div> @else <div class="d-none">{{ $circle = 'big' }}</div> @endif
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <nav aria-label="Page navigation" class="blog_pagination my-4">{{$items->links()}}</nav>
                </div>

                <div class="col-lg-3 p-0 pt-lg-1">
                    <div class="blog_sidebar_area p-3">
                        <aside class="mrgn_widget categories_widget">
                            <div class="blog_widget_title mb-4" >
                                <h4>{{__('text.blog.category')}}</h4>
                            </div>
                            <ul>
                                <li class="p-2 {{$type=='all'?'active':''}}"><a href="{{route('user.blog.index','all')}}">{{__('text.blog.all')}} <i class="float-left fa fa-angle-{{app()->getLocale()=='en'?'right':'left'}}" aria-hidden="true"></i></a></li>
                                <li class="p-2 {{$type=='news'?'active':''}}"><a href="{{route('user.blog.index','news')}}">{{__('text.blog.news')}} <i class="float-left fa fa-angle-{{app()->getLocale()=='en'?'right':'left'}}" aria-hidden="true"></i></a></li>
                                <li class="p-2 {{$type=='article'?'active':''}}"><a href="{{route('user.blog.index','article')}}">{{__('text.blog.article')}} <i class="float-left fa fa-angle-{{app()->getLocale()=='en'?'right':'left'}}" aria-hidden="true"></i></a></li>
                            </ul>
                        </aside>
                        @if(count($last_items))
                        <aside class="mrgn_widget recent_news_widget">
                            <div class="blog_widget_title my-3 mt-4" >
                                <h4>{{__('text.blog.last')}}</h4>
                            </div>
                            <div class="recent_inner">
                                @foreach($last_items as $last_item)
                                    <div class="recent_item border-bottom py-2">
                                        <a class="text-dark" href="{{route('user.blog.show',[$last_item->type,app()->getLocale()=='fa'?$last_item->slug:$last_item->slug_en])}}">
                                            {{set_lang($last_item,'title',app()->getLocale())}}
                                        </a>
                                        <div> 
                                            <i class="fa fa-calendar ml-1"></i>{{my_jdate($last_item->created_at,'d F Y')}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </aside>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js') @endsection
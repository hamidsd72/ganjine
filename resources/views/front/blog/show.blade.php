@extends('layouts.front.header_master')
    {{-- @if($item->titleseo && $item->keywordsseo && $item->descriptionseo)
    <meta name="description" content="{{set_lang($item,'descriptionseo',app()->getLocale())}}"/>
    <meta http-equiv="keyword" name="keyword" content="{{set_lang($item,'keywordsseo',app()->getLocale())}}"/>
    <meta property="og:title" content="{{set_lang($item,'titleseo',app()->getLocale())}}"/>
    <meta property="og:description" content="{{set_lang($item,'descriptionseo',app()->getLocale())}}"/>
    @endif --}}
@section('style')
<style>
</style>
@endsection
@section('body')
    <section class="main_blog_area single_blog_details">
        <div class="container pt-4 pt-lg-0">

            <div class="main_blog_items">
                <div class="main_blogpost_item m-0 ">
                    
                    <h3 class="text-dark text-center py-2 m-0 rounded font-weight-bold title-over-banner">{{set_lang($item,'title',app()->getLocale())}}</h3>

                    <div class="blog_image pb-3 rounded">
                        <img class="photos w-100 show_blog rounded" src="{{$item->photo?url($item->photo->path):url('includes/asset/user/pic/nopic.jpg')}}" alt="{{set_lang($item,'title',app()->getLocale())}}">
                        <div class="date">
                            <div class="date_box text-white text-center pt-1 ">
                                <h3>{{my_jdate($item->created_at,'d')}}</h3>
                                {{my_jdate($item->created_at,'F')}}
                            </div>
                        </div>
                        <div class="px-3 text-dark">{{$item->short_text}}</div>
                    </div>

                    <div class="main_blog_text py-lg-3">{!! $item->text !!}</div>
                </div>

                @if(count($comments)>0)
                    <div class="comment_list_area pb-4">
                        <h3 class="border-bottom pb-1 mb-4">{{__('text.comment1')}} ({{count($comments)}})</h3>
                        <div class="comment_list_inner">
                            @foreach($comments as $comment)
                                <div class="media pb-3">
                                    <div class="media-img">
                                        <img src="{{url('includes/asset/user/pic/user.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a><h4>{{$comment->name}}</h4></a>
                                        {!! nl2br(e($comment->text)) !!}
                                        <div class="date_rep">
                                            <a>@if(app()->getLocale()=='fa') {{my_jdate($comment->created_at,'d F Y')}} @else {{date('d F Y', strtotime($comment->created_at))}} @endif</a>
                                        </div>
                                        @if($comment->reply)
                                            <div class="media pb-3">
                                                <div class="media-img">
                                                    <img src="{{url('includes/asset/user/pic/user_admin.png')}}" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <a><h4>{{$comment->reply->name}}</h4></a>
                                                    {!! nl2br(e($comment->reply->text)) !!}
                                                    <div class="date_rep">
                                                        <a>@if(app()->getLocale()=='fa') {{my_jdate($comment->reply->created_at,'d F Y')}} @else {{date('d F Y', strtotime($comment->reply->created_at))}} @endif</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="blog_comment_box p-2 p-lg-3 mb-4">
                    <div class="row pb-4 pt-2">
                        <div class="col"><h4 class="text-dark">{{__('text.blog.comment')}}</h4></div>
                        <div class="col-auto">
                            <span onclick="like()" class="bg-success p-2 px-3 rounded" style="cursor: pointer;">
                                <svg id="active" style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill bounce-top" viewBox="0 0 16 16">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
                            </span>
                            <span class="like-show likeShowLike">{{$like}}</span>
                        </div>
                        <div class="col-auto">
                            <span onclick="dislike()"  class="bg-danger p-2 px-3 rounded" style="cursor: pointer;">
                                <svg id="deactive" style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down-fill bounce-top" viewBox="0 0 16 16">
                                    <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/>
                                </svg>
                            </span>
                            <span class="like-show likeShowdisLike">{{$dislike}}</span>
                        </div>
                    </div>
                    <div class="blog_comment_inner container-fluid pb-0">
                        <form class="row" action="{{route('user.blog.comment',$item->id)}}" method="post">
                            @csrf
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control {{$errors->has('name')?'error_border':''}}" id="name" name="name" placeholder="{{__('text.blog.name')}}" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control d-ltr {{$errors->has('email')?'error_border':''}}" id="email" name="email" placeholder="{{__('text.blog.email')}}" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control d-ltr {{$errors->has('website')?'error_border':''}}" id="website" name="website" placeholder="{{__('text.blog.website')}}">
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control {{$errors->has('text')?'error_border':''}}" name="text" id="text" rows="6" placeholder="{{__('text.blog.msg')}}"></textarea required>
                            </div>
                            <div class="form-group col-auto">
                                <button type="submit" class="btn btn-success btn_activate d-none">{{__('text.blog.btn')}}</button>
                                <button type="submit" class="btn btn-secondary btn_disabled" disabled>{{__('text.blog.btn')}}</button>
                            </div>
                            <div class="form-group col-auto">
                                <input type="number" class="form-control d-ltr {{$errors->has('captcha')?'error_border':''}}" onkeyup="captcha_func(this.value)" id="captcha" name="captcha" placeholder="کد امنیتی را وارد کنید">
                            </div>
                            <div class="col"><img class="rounded" src="{{url(captcha())}}" class="m-auto" style="height: 36px"></div>
                        </form>
                    </div>
                </div>
            </div>
                
        </div>
    </section>
@endsection
<script>
    function captcha_func(value) {
        if( value.length > 3 ) {
            document.querySelector('.btn_activate').classList.remove('d-none');
            document.querySelector('.btn_disabled').classList.add('d-none');
        } else {
            document.querySelector('.btn_activate').classList.add('d-none');
            document.querySelector('.btn_disabled').classList.remove('d-none');
        }
    }
    function like() {
        document.getElementById('active').style.fill='#3c3c46';
        document.getElementById('deactive').style.fill='#ffffff';
        let likeShowLike    = document.querySelector('.likeShowLike');
        let like_count      = parseInt(likeShowLike.innerHTML);
        $.ajax({
            type: "GET",
            url:  "/like-post/{{$item->id}}",
            success: function(data) {
                console.log(data)
                likeShowLike.innerHTML      = like_count +1;
            },
            error: function() {
                console.log(this.error);
            }
        });
    }; 
    function dislike() {
        document.getElementById('deactive').style.fill='#3c3c46';
        document.getElementById('active').style.fill='#ffffff';
        let likeShowdisLike = document.querySelector('.likeShowdisLike');
        let des_count       = parseInt(likeShowdisLike.innerHTML);
        $.ajax({
            type: "GET",
            url:  "/like-post/{{$item->id}}/edit",
            success: function(data) {
                console.log(data)
                likeShowdisLike.innerHTML   = des_count +1;
            },
            error: function() {
                console.log(this.error);
            }
        });
    }
</script>
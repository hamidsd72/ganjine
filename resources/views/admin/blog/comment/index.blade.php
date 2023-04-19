@component('layouts.admin')
    @section('title') {{ $title }} @endsection
    @section('body')
        <style>
            .bg-pink
            {
                display: inline-block!important;
            }
        </style>
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
            </div>
            <div class="p-3">
                <table class="table table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">بلاگ</th>
                        <th data-toggle="true">نام</th>
                        <th data-toggle="true">ایمیل</th>
                        <th data-toggle="true">وبسایت</th>
{{--                        <th data-toggle="true">زبان سایت</th>--}}
                        <th data-hide="phone">وضعیت</th>
                        <th data-hide="phone">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>@if($item->blog){{ $item->blog->type=='news'?'خبر : ':'مقاله : ' }} {{$item->blog->title}} @else بلاگی با این آی دی موجود نیست @endif @if($item->see==0) <span class="text-danger"> (جدید) </span> @endif </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->website?$item->website:'ثبت نشده' }}</td>
{{--                            <td>{{ $item->lang=='fa'?'فارسی':'انگلیسی' }}</td>--}}
                            <td>
                                @if($item->status=='active') <span class="text-success">نمایش </span> @else <span class="text-danger">عدم نمایش </span> @endif
                                @if($item->replys) <span>(پاسخ داده شده)</span> @else <span>(بدون پاسخ)</span> @endif
                            </td>
                            <td class="table-td-icons" style="display: flex;justify-content: center;align-items: center;min-height: 80px">

                                <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_reply_{{$item->id}}" title="پاسخ" style="color: #000179"><i
                                            class="far fa-eye"></i></a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal_reply_{{$item->id}}" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title mt-0">{{$item->name}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="{{$item->lang=='fa'?'d-rtl':'d-ltr'}}  w-100">
                                                        <span class="text-danger">{{$item->lang=='fa'?'نظر ':'comment '}} : </span> {{$item->text}}
                                                    </p>
                                                </div>
                                                @if($item->replys)
                                                    <div class="modal-footer w-100 d-block">
                                                        @role('ادمین ارشد')
                                                        <a href="{{route('admin-article-comment-destroy',$item->replys->id)}}" class="w-100" style="color: red;font-size: 12px" title="حذف پاسخ"><i
                                                                    class="fa fa-trash" style="margin-right: 10px;color: red;"></i> حذف پاسخ </a>
                                                        @endrole
                                                        <p class="{{$item->lang=='fa'?'d-rtl':'d-ltr'}} w-100">
                                                            <span class="text-danger">{{$item->lang=='fa'?'پاسخ ':'answer '}} : </span>  {{$item->replys->text}}
                                                        </p>
                                                    </div>
                                                    @else
                                                <div class="modal-footer">
                                                    <hr/>
                                                    <form method="post" action="{{route('admin-article-comment-store',$item->id)}}" class="w-100">
                                                        @csrf
                                                        <label>پاسخ به نظر : </label>
                                                        <textarea name="text" style="line-height: 25px;font-size: 13px!important;" class="form-control w-100 px-1 {{$item->lang=='fa'?'text-right':'text-left'}}" rows="8"></textarea>
                                                        <button type="submit" class="btn btn-success float-left mt-2">ثبت پاسخ</button>
                                                    </form>
                                                </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                @if($item->status == 'pending')
                                    <a href="{{route('admin-article-comment-ok',$item->id)}}" title="نمایش " style="margin-right: 10px"><i class="fa fa-check"
                                                                                                                                                      style="color: darkgreen;"></i></a>
                                @endif
                                @if($item->status == 'active')
                                    <a href="{{route('admin-article-comment-ok',$item->id)}}"
                                       title="عدم نمایش" style="margin-right: 10px"><i class="fa fa-close"
                                                                                               style="color: red;"></i></a>
                                @endif
                                @role('ادمین ارشد')
                                <a href="{{route('admin-article-comment-destroy',$item->id)}}" title="حذف" onclick="return confirm('برای حذف مطمئن هستید؟')"><i
                                            class="fa fa-trash" style="margin-right: 10px;color: red;"></i></a>
                                @endrole

                            </td>
                        </tr>
                        <?php
                            $item->see=1;
                            $item->update();
                            ?>
                    @endforeach
                    </tbody>
                </table>

            </div>
                <div class="text-center w-100">
                    {{ $items->links() }}
                </div>
        </div>
    @endsection
    @push('scripts')
        <script>
            let i=$('.fa-pencil');
            i.removeClass();
            i.addClass('far fa-edit');
        </script>
    @endpush
@endcomponent

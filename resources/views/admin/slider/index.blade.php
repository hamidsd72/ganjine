@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <a href="{{ route('admin-slider-create') }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن
                اسلایدر</a>

            <div class="col-12 alert alert-primary text-center">
                برای نمایش زیبای اسلایدر عرض 1400 در ارتفاع 700 بهترین سایز می باشد (تمام تصاویر یک سایز برابر داشته باشند)
            </div>
            <div class="row">
                @foreach($items as $item)
                        @if($item->photo)
                            <div class="col-md-4 col-xs-12">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        @if($item->type_file($item->photo->path)=='video')
                                            <video class="img-fluid" autoplay loop muted style="width: 300px">
                                                <source src="{{url($item->photo->path)}}" type="video/mp4"/>
                                            </video>
                                        @else
                                        <img src="{{ url($item->photo->path) }}" alt="{{ $item->title }}"/>
                                        @endif
                                        <div class="caption-overflow">
                                            <div class="caption-links">
                                                <a href="{{ url($item->photo->path) }}" data-popup="fancybox" class="fancybox" title="مشاهده"><i class="icon-eye"></i></a>
                                                <a href="{{ route('admin-slider-edit', $item->id) }}" title="ویرایش"><i class="icon-pencil7"></i></a>
                                                <a href="{{ route('admin-slider-destroy', $item->id) }}" onclick="return confirm('برای حذف مطمئن هستید؟')" title="حذف"><i class="icon-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@endcomponent

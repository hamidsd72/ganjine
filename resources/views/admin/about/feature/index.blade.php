@component('layouts.admin')
    @section('title') {{ $title }} @endsection
    @section('body')
        <div class="condition pull-right w-100 mb-2">
            <div class="title"><h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5></div>
            <div class="p-3">
                <form action="{{ route('admin-about-feature-update', $items->find(12)->id) }}" method="POST" enctype="multipart/form-data" class="mb-5">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="name" class="form-label">* عنوان فارسی :</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $items->find(12)->title }}" required/>
                        @if ($errors->has('title'))
                            <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                        @endif
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success pull-left mr-2"><i class="fa fa-check ml-2"></i>ثبت شود</button>
                </form>
                
                <a href="{{ route('admin-about-feature-create') }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن {{ $title }} </a>

                <table class="table table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">عنوان</th>
                        <th data-toggle="true">آیکون</th>
                        <th data-toggle="true">نمایش/عدم نمایش</th>
                        <th data-toggle="true"> نمایش/عدم نمایش صفحه اصلی</th>
                        <th data-hide="phone">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items->where('id','!=',12) as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{$item->pic?url($item->pic):''}}" style="height: 50px;background: rgba(0,0,0,0.1)" alt="banner"></td>
                            <td>
                                @if($item->status=='active') <span class="text-success">نمایش</span> @else <span class="text-danger">عدم نمایش</span> @endif
                                @if($item->status == 'pending')
                                    <a href="{{route('admin-about-feature-active',['status',$item->id])}}" class="mr-3" title="نمایش در سایت"><i class="fa fa-check text-success"></i></a>
                                @endif
                                @if($item->status == 'active')
                                    <a href="{{route('admin-about-feature-active',['status',$item->id])}}" class="mr-3" title="عدم نمایش در سایت"><i class="fa fa-close text-danger"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($item->status_home=='active') <span class="text-success">نمایش</span> @else <span class="text-danger">عدم نمایش</span> @endif
                                @if($item->status_home == 'pending')
                                    <a href="{{route('admin-about-feature-active',['status_home',$item->id])}}" class="mr-3" title="نمایش در صفحه اصلی"><i class="fa fa-check text-success"></i></a>
                                @endif
                                @if($item->status_home == 'active')
                                    <a href="{{route('admin-about-feature-active',['status_home',$item->id])}}" class="mr-3" title="عدم نمایش در صفحه اصلی" ><i class="fa fa-close text-danger"></i></a>
                                @endif
                            </td>
                            <td class="table-td-icons" style="display: flex;justify-content: center;align-items: center;min-height: 80px">
                                <a href="{{ route('admin-about-feature-edit', $item->id) }}" title="ویرایش"><i class="far fa-edit"></i></a>
                                @role('ادمین ارشد')
                                    <a href="{{route('admin-about-feature-destroy',$item->id)}}" title="حذف"  onclick="return confirm('برای حذف مطمئن هستید؟')"><i class="fa fa-trash text-danger"></i></a>
                                @endrole
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @push('scripts')
    @endpush
@endcomponent

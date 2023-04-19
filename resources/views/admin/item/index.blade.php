@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <a href="{{ route('admin-items-page-create',$page_name) }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن محتوا</a>
            <table class="table table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-hide="phone">نام صفحه</th>
                    <th data-toggle="true">عنوان</th>
                    <th data-hide="phone">تکست</th>
                    <th data-hide="phone">سکشن</th>
                    <th data-hide="phone">ردیف نمایش</th>
                    <th data-toggle="true">ترتیب نمایش</th>                    
                    <th data-hide="phone">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @if($items->count())
                    @foreach($items as $item)
                        <tr> 
                            <td>{{ $page_name }}</td>
                            <td><a href="{{ route('admin-items-page-edit', [$page_name, $item->id]) }}" title="ویرایش">{{ $item->title }}</a></td>
                            <td style="max-width: 260px;max-height: 40px;">{!! $item->text !!}</td>
                            <td>{{ $item->section }}</td>
                            <td>{{ $item->position }}</td>
                            <td>{{ $item->sort }}</td>
                            <td class="table-td-icons" style="display: flex;justify-content: center;align-items: center;min-height: 80px">
                                <form action="{{route('admin-item.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: transparent;border: none;"><i class="fa fa-trash text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endcomponent


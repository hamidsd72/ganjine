@component('layouts.admin')
    @section('title') افزودن {{$title}} @endsection
    @section('body')
        <div class="condition table pull-right w-100">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i> افزودن {{$title}}</h5>
            </div>
            <div class="p-3">
                <a href="{{ route('admin-learn-category.create') }}" class="btn btn-success mb-2">
                    <i class="fa fa-eye ml-2"></i> افزودن {{$title}}
                </a>
                <table class="table-data table-togglable table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">نام دسته</th>
                        <th data-hide="phone">وضعیت</th>
                        <th data-hide="phone">توضیحات</th>
                        <th data-hide="phone">اولویت</th>
                        <th data-hide="phone">تاریخ ثبت</th>
                        @if ($items->count())
                            <th data-hide="phone">عملیات</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody> 
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->sort }}</td>
                            <td>{{ my_jdate($item->created_at, 'Y/m/d H:i') }}</td>
                            <td class="table-td-icons">
                                <a href="{{ route('admin-learn.show', $item->id) }}" title="نمایش آموزش ها" class="bg-primary rounded mx-1">آموزش ها</a>
                                <a href="{{ route('admin-learn-category.edit', $item->id) }}" title="ویرایش" class="bg-info rounded mx-1">ویرایش</a>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteBox{{$item->id}}" class="bg-danger rounded mx-1">
                                {{-- <a href="javascript:void(0)" onclick="$(this).find('form').submit();" title="حذف" class="bg-danger rounded mx-1">
                                    <form action="{{ route('admin-learn-category.destroy', $item->id) }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form> --}}
                                    حذف
                                </a>
                            </td>
                        </tr>

                        <div class="modal" id="deleteBox{{$item->id}}">
                            <div class="modal-dialog mt-5">
                                <div class="modal-content">
                                    <form action="{{ route('admin-learn-category.destroy', $item->id) }}" method="POST" class="hidden">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <div class="modal-header">
                                            <h4 class="modal-title">آیتم حذف میشود ! </h4>
                                        </div>
                                        <div class="modal-footer" style="direction: ltr;">
                                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">انصراف</button>
                                            <button type="submit" class="btn btn-danger">حذف</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
@endcomponent

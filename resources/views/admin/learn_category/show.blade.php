@component('layouts.admin')
    @section('title')دسته بندی ها @endsection
    @section('body')
        <div class="condition table pull-right w-100">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>نمایش اطلاعات دسته بندی </h5>
            </div>
            <div class="p-3">

                <a href="{{ route('admin-learn-category.create') }}" class="btn btn-success mb-2">
                    <i class="fa fa-eye ml-2"></i>
                    اضافه کردن دسته بندی جدید
                </a>
                <table class="table-data table-togglable table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">نام دسته</th>
                        <th data-hide="phone">وضعیت</th>
                        <th data-hide="phone">توضیحات</th>
                        <th data-hide="phone">اولویت</th>
                        <th data-hide="phone">تاریخ ثبت</th>
                        <th data-hide="phone">عملیات</th>
                    </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->sort }}</td>
                            <td>{{ my_jdate($item->created_at, 'Y/m/d H:i') }}</td>
                            <td class="table-td-icons">
                                <a href="{{ route('admin-learn-category.edit', $item->id) }}" title="ویرایش" class="bg-info rounded mx-1">ویرایش</a>
                                <a href="javascript:void(0)" onclick="$(this).find('form').submit();" title="حذف" class="bg-danger rounded mx-1">
                                    <form action="{{ route('admin-learn-category.destroy', $item->id) }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    حذف
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
@endcomponent

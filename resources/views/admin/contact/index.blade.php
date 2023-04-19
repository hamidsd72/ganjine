@component('layouts.admin')
    @section('title') {{ $title }} @endsection
    @section('body')
        <style>
            .hide-for-excel{
                display: none !important;
            }
            .popover-content
            {
                text-align: justify;
                text-align-last: center;
                font-size: 12px;
                max-height: 250px;
                overflow-y: auto;
            }
        </style>
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
            </div>
            <div class="p-3">
                <table class="table table-data table-togglable table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">#</th>
                        <th data-hide="phone">ایمیل</th>
                        <th data-hide="phone">موبایل</th>
                        <th data-hide="phone">بخش مربوطه</th>
                        <th data-hide="phone">تاریخ ثبت</th>
{{--                        <th data-hide="phone">زبان سایت</th>--}}
                        <th data-hide="phone">جزییات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->type }} @if($item->see == 0) <span style="color: red;">(جدید)</span>@endif</td>
                            <td dir="ltr" class="text-left">{{ $item->email }}</td>
                            <td dir="ltr" class="text-left">{{ $item->mobile }}</td>
                            <td>{{ $item->part }}</td>
                            <td>{{ my_jdate($item->created_at, 'Y/m/d') }}</td>
{{--                            <td>{{ $item->lang=='fa'?'فارسی':'انگلیسی' }}</td>--}}
                            <td>
                                <button type="button" class="btn" data-toggle="modal" data-target="#content{{$item->id}}"><i class="fa fa-eye ml-2"></i>مشاهده</button>
                                {{-- <a href="javascript:void(0)" data-toggle="popover" data-placement="left" data-content="{{ $item->text }}"><i class="fa fa-eye ml-2"></i>مشاهده</a> --}}
                            </td>
                        </tr>
                        @if($item->see==0)
                            <?php
                                $item->see = 1;
                                $item->update();
                            ?>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach($items as $item)
            <div class="modal fade" id="content{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{ $item->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>{{ $item->subject }}</div>
                            <div>{{ $item->code_melli?' کد ملی : '.$item->code_melli:'' }}</div>
                            <div>{{$item->city?' شهر : '.$item->city:''}}</div>
                            <div>{{$item->station?' شعبه : '.$item->station:''}}</div>
                            @if ($item->attach)
                                <div class="mt-2"> <a href="{{ url($item->attach) }}" target="_blank">نمایش فایل پیوست</a></div>
                            @endif
                            <hr>
                            @if ($item->part=='بازاریابی و فروش')
                                @for ($i = 0; $i < count(explode(',', $item->text)); $i++)
                                    <p class="my-2">{{ (explode(',', $item->text))[$i] }}</p>
                                @endfor
                            @else
                                <p class="my-2">{{ $item->text }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
  
    @endsection
@endcomponent

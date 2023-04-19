@component('layouts.admin')
    @section('title') {{ $title }} @endsection
    @section('body')
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
            </div>
            <form action="{{ route('admin-upload-store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <br>
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="title" class="form-label">* عنوان:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required/>
                                @if ($errors->has('title'))
                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <label for="file" class="form-label">* فایل  :</label>
                            <input type="file" class="form-control" id="file" name="file" accept="PDF/*" value="{{ old('file') }}"/>
                            @if ($errors->has('file'))
                                <span class="help-block"><strong>{{ $errors->first('file') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success pull-left mr-2"><i class="fa fa-check ml-2"></i>ارسال</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>فایل های آپلود شده</h5>
            </div>
            <div class="p-3">
                <table class="table table-data table-togglable table-bordered pull-right w-100">
                    <thead>
                    <tr>
                        <th data-toggle="true">عنوان</th>
                        <th data-hide="phone">لینک</th>
                        <th data-hide="phone">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td style="text-align: left;"><a href="{{ url('/').'/'.$item->link }}">{{url('/').'/'.$item->link}}</a></td>
                            <td class="table-td-icons">
                                <a href="{{ route('admin-upload-del', $item->id) }}" title="حذف"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script type="text/javascript">
            $(".textarea").ckeditor({
                filebrowserImageBrowseUrl: "{{ url('laravel-filemanager?type=Images') }}",
                filebrowserImageUploadUrl: "{{ url('laravel-filemanager/upload?type=Images&_token=') }}",
                filebrowserBrowseUrl: "{{ url('laravel-filemanager?type=Files') }}",
                filebrowserUploadUrl: "{{ url('laravel-filemanager/upload?type=Files&_token=') }}"
            });
        </script>
    @endpush
@endcomponent

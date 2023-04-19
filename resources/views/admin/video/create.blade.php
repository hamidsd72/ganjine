@component('layouts.admin')
@section('title')  ویدیوها @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>افزودن ویدیو</h5>
        </div>
        <form action="{{ route('admin-video.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
                <div class="col-12">
                    <div class="row">
                        @if($category->count())
                            <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="form-label"><span style="color: red;">*</span>عنوان ویدیو :</label>
                                    <input type="text" name="name" class="form-control" required >
                                    @if ($errors->has('name'))
                                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                    @endif
                            </div>
                            <div class="col-md-12 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="form-label">توضیحات :</label>
                                    <input type="text" name="description" class="form-control" >
                                    @if ($errors->has('description'))
                                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                    @endif
                            </div>
                            <div class="col-md-12 form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                                <label for="video" class="form-label"><span style="color: red;">*</span>لینک آپارات ویدیو :</label>
                                <input type="text" name="video" class="form-control" required>
                                @if ($errors->has('video'))
                                    <span class="help-block"><strong>{{ $errors->first('video') }}</strong></span>
                                @endif
                            </div>



                            <div class="col-md-4 form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                                <label for="cat_id" class="form-label"><span style="color: red;">*</span>دسته بندی :</label>
                                <select name="cat_id" class=" form-control">
                                    <option  disabled >انتخاب کنید</option>
                                @foreach($category as $item)

                                        <option value="{{$item->id}}" >{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('cat_id'))
                                    <span class="help-block"><strong>{{ $errors->first('cat_id') }}</strong></span>
                                @endif
                            </div>
                            <div class="col-md-4 form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
                                    <label for="sort" class="form-label"><span style="color: red;">*</span>سطح بندی :</label>
                                    <input type="text" name="sort" class="form-control" placeholder="عدد به لاتین" required>
                                    @if ($errors->has('sort'))
                                        <span class="help-block"><strong>{{ $errors->first('sort') }}</strong></span>
                                    @endif
                            </div>
                            <div class="col-md-4 form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status" class="form-label"><span style="color: red;">*</span>وضعیت :</label>
                                    <select name="status" class="form-control">
                                        <option  value="active" selected>active</option>
                                        <option value="pending" >pending</option>
                                    </select>
                            </div>
                        @else 
                            <h4 class="col-12 text-center">ابتدا دسته بندی اضافه کنید</h4>
                        @endif
                    </div>
                </div>


                <div class="form-group col-12">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success pull-left mx-3"><i class="fa fa-check ml-2"></i>ثبت شود</button>
                    <button type="reset" class="btn btn-default pull-left"><i class="fa fa-refresh ml-2"></i>بازنشانی</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
@push('scripts')
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
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

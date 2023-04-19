@component('layouts.admin')
    @section('title') افزودن {{$title}}@endsection
    @section('body')
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i> افزودن {{$title}}</h5>
            </div>
            <form action="{{ route('admin-learn.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-12 form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                                <label for="cat_id" class="form-label"><span style="color: red;">*</span>دسته بندی :</label>
                                <select name="cat_id" class=" form-control">
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}" @if($cat->id == $id) selected @endif>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('cat_id'))
                                    <span class="help-block"><strong>{{ $errors->first('cat_id') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="form-label"><span style="color: red;">*</span>نام :</label>
                                <input type="text" name="name" class="form-control" required >
                                @if ($errors->has('name'))
                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="form-label">توضیحات :</label>
                                <textarea class="textarea ckeditor form-control" id="description" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="form-label">لینک آی فریم آپارات :</label>
                                <textarea class="form-control" rows="8" id="link" name="link"></textarea>
                                @if ($errors->has('link'))
                                    <span class="help-block"><strong>{{ $errors->first('link') }}</strong></span>
                                @endif
                            </div>
    
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

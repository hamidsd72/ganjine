@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <form action="{{ route('admin-item.update',$item->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @method('PATCH')
            <fieldset>
                <div class="col-sm-12 tab_box my-3 py-3 px-0">
                    <div class="tab-content py-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="fa" role="tabpanel" aria-labelledby="farsi-tab">
                            <div class="col-lg-12">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="form-label"> * عنوان محتوا :</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}" required/>
                                    @if ($errors->has('title'))
                                        <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="textarea-container form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="text" class="form-label"> متن محتوای :</label>
                                        <textarea class="textarea ckeditor form-control" id="text" name="text">{{ $item->text  }}</textarea>
                                        @if ($errors->has('text'))
                                            <span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="link" class="form-label"> لینک به صفحه خارجی :</label>
                            <input type="text" class="form-control text-left" id="link" name="link" value="{{ $item->link }}"/>
                            @if ($errors->has('link'))
                                <span class="help-block"><strong>{{ $errors->first('link') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                            <label for="section" class="form-label"> * شماره سکشن محتوا :</label>
                            <input type="number" class="form-control text-left" placeholder="محل نمایش در کدام سکشن باشد" dir="ltr" id="section" name="section" value="{{ $item->section }}" required/>
                            @if ($errors->has('section'))
                                <span class="help-block"><strong>{{ $errors->first('section') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position" class="form-label"> * ردیف نمایش محتوا :</label>
                            <input type="number" class="form-control text-left" placeholder="آیتم چندم در یک سکشن" dir="ltr" id="position" name="position" value="{{ $item->position }}" required/>
                            @if ($errors->has('position'))
                                <span class="help-block"><strong>{{ $errors->first('position') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
                            <label for="sort" class="form-label"> * ترتیب محتوا :</label>
                            <input type="number" class="form-control text-left" dir="ltr" id="sort" name="sort" value="{{ $item->sort }}" required/>
                            @if ($errors->has('sort'))
                                <span class="help-block"><strong>{{ $errors->first('sort') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
                            <label for="pic" class="form-label">اگر محتوا تصویر دارد :</label>
                            <input type="file" class="form-control" id="pic" name="pic" accept="image/*" value="{{ old('pic') }}"/>
                            @if ($errors->has('pic'))
                                <span class="help-block"><strong>{{ $errors->first('pic') }}</strong></span>
                            @endif
                            @if ($item->photo)
                                <img src="{{ $item->photo->path?url($item->photo->path):'' }}" alt="photo" style="max-height: 120px !important">
                            @endif
                        </div>
                    </div>
                </div>


                <hr/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success pull-left mr-2"><i class="fa fa-check ml-2"></i>ثبت شود</button>
                            <button type="reset" class="btn btn-default pull-left"><i class="fa fa-refresh ml-2"></i>بازنشانی</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
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

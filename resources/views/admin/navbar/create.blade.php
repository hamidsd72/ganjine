@component('layouts.admin')
    @section('title') افزودن {{$title}}@endsection
    @section('body')
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i> افزودن {{$title}}</h5>
            </div>
            <form action="{{ route('admin-navbar.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 form-group{{ $errors->has('parrent_id') ? ' has-error' : '' }}">
                                <label for="parrent_id" class="form-label"><span style="color: red;">*</span>والد لینک را انتخاب کنید :</label>
                                <select name="parrent_id" class=" form-control">
                                    <option value="" selected>لینک اصلی - والد</option>
                                    @foreach(\App\Models\Navbar::where('parrent_id', null)->where('status','active')->orderBy('sort')->get() as $cat)
                                        <option value="{{$cat->id}}" @if($cat->id == $id) selected @endif>{{$cat->title}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('parrent_id'))
                                    <span class="help-block"><strong>{{ $errors->first('parrent_id') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-lg-9 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="form-label"><span style="color: red;">*</span>عنوان :</label>
                                <input type="text" name="title" class="form-control" required >
                                @if ($errors->has('title'))
                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-lg-6 form-group{{ $errors->has('sort') ? ' has-error' : '' }}">
                                <label for="sort" class="form-label"><span style="color: red;">*</span>ترتیب :</label>
                                <input type="number" name="sort" class="form-control" required >
                                @if ($errors->has('sort'))
                                    <span class="help-block"><strong>{{ $errors->first('sort') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-lg-6 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="form-label"><span style="color: red;">*</span>نوع لینک :</label>
                                <select name="link_type" class="form-control">
                                    <option value="internal">داخل اپلیکیشن</option>
                                    <option value="external">بیرون اپلیکیشن</option>
                                </select>
                            </div>

                            <div class="col-lg-12 form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="form-label"><span style="color: red;">*</span>مسیر لینک :</label>
                                <input type="text" name="link" class="form-control" value="/" required >
                                @if ($errors->has('link'))
                                    <span class="help-block"><strong>{{ $errors->first('link') }}</strong></span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
                                    <label for="pic" class="form-label">تصویر مگامنو (اگر فرزند دارد)
                                        :</label>
                                    <input type="file" class="form-control" id="pic" name="pic" value="{{ old('pic') }}"/>
                                    @if ($errors->has('pic'))
                                        <span class="help-block"><strong>{{ $errors->first('pic') }}</strong></span>
                                    @endif
                                </div>
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
    @endpush
@endcomponent

@extends('admin.layouts')

@section('title', 'Action Blog')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage Blog</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL . '/viewblog') }}">
                                <i class="fa fa-arrow"> </i> Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL . '/saveblogdetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Blog Title<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="blog_title"
                                                            required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->blog_title : old('blog_title') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Blog Image<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10" name="blog_image"
                                                            {{ isset($data) && $data[0]->blog_image != '' ? '' : 'required' }}
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->blog_image : old('blog_image') }}">
                                                        @if (isset($data) && $data[0]->blog_image != '')
                                                            <span><img style="height: 200px;margin-top: 1em;"
                                                                    src="{{ URL::asset('uploads/blog/' . $data[0]->blog_image) }}"></span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Blog
                                                        Description<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="blog_description" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->blog_description : old('blog_description') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Show Home
                                                        Page</label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="blog_home"
                                                            data-style="form-control btn-default btn-outline">
                                                            <option value="">Select</option>
                                                            @foreach (statustype() as $k => $statustype)
                                                                <option value="{{ $k + 1 }}"
                                                                    {{ isset($action) && $action == 'edit' && $data[0]->blog_home == $k + 1 ? 'selected' : '' }}>
                                                                    {{ $statustype }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            @if (isset($action) && $action == 'edit')
                                                <div class="col-md-12 mb-10">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label mb-10  text-left">Status<span
                                                                class="help"> *</span></label>
                                                        <div class="col-md-8">
                                                            <select class="selectpicker" name="status"
                                                                data-style="form-control btn-default btn-outline" required>
                                                                <option value="">Select</option>
                                                                @foreach (statustype() as $k => $statustype)
                                                                    <option value="{{ $k + 1 }}"
                                                                        {{ isset($action) && $action == 'edit' && $data[0]->status == $k + 1 ? 'selected' : '' }}>
                                                                        {{ $statustype }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <input type="hidden" name="edit_blogimage"
                                                value="{{ isset($data) ? $data[0]->blog_image : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="blog_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->blog_id) : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewblog') }}"
                                                            class="btn btn-danger btn-rounded">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>



                            <hr />
                            <div class="form-wrap mt-40">
                                <div style="padding-bottom: 3em;" class="text-center">
                                    <h3>Tamil </h3>
                                </div>
                                <form method="post" action="{{ url(ADMINURL . '/savetamilblogdetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Blog Title
                                                        <span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="blog_title_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->blog_title_tamil : old('blog_title_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Blog
                                                        Description
                                                        <span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="blog_description_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->blog_description_tamil : old('blog_description_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control mb-10" name="blog_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->blog_id) : '' }}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewblog') }}"
                                                            class="btn btn-danger btn-rounded">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@extends('admin.layouts')

@section('title', 'Action Category')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage Category</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL . '/viewcategory') }}">
                                <i class="fa fa-arrow"> </i> Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL . '/savecategorydetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Category Name<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="category_name" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->category_name : old('category_name') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Category
                                                        Image</label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10" name="category_img"
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->category_img : old('category_img') }}">
                                                        @if (isset($data) && $data[0]->category_img != '')
                                                            <span><img style="height: 200px;width:100%;margin-top: 1em;"
                                                                    src="{{ URL::asset('uploads/category/' . $data[0]->category_img) }}"></span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-30 mt-10">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left"></label>
                                                    <div class="col-md-4" style="display: flex">
                                                        <input type="checkbox" class="form-control" name="category_homepage"
                                                            style="height: 15px; width: 9%; margin-right: 10px;"
                                                            {{ isset($action) && $action == 'edit' && $data[0]->category_homepage == 1 ? 'checked' : '' }}>
                                                        <span>Home page</span>
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

                                            <div style="padding-bottom: 3em;" class="text-center">
                                                <h3>Tamil </h3>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Category
                                                        Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="category_name_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->category_name_tamil : old('category_name_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="edit_categoryimage"
                                                value="{{ isset($data) ? $data[0]->category_img : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="category_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->category_id) : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewcategory') }}"
                                                            class="btn btn-danger btn-rounded">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- <hr />
                            <div class="form-wrap mt-40">
                                <div style="padding-bottom: 3em;" class="text-center">
                                    <h3 >Tamil </h3>
                                </div>
                                <form method="post" action="{{ url(ADMINURL . '/savetamilcategorydetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Category
                                                        Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="category_name_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->category_name_tamil : old('category_name_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control mb-10" name="category_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->category_id) : '' }}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewcategory') }}"
                                                            class="btn btn-danger btn-rounded">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@extends('admin.layouts')

@section('title','Action Sub-Category')
@section('content')

	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage Sub-Category</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/viewsubcategory') }}">
                                <i class="fa fa-arrow"> </i>  Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL.'/savesubcategorydetails') }}" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Category Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="category_id" data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                            @foreach ( getActiveRecord('category') as $category)
                                                                <option value="{{ $category->category_id }}" {{ ((isset($action) && $action == 'edit') && $data[0]->category_id == $category->category_id ) ? 'selected' : '' }} >{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Sub-Category Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="subcategory_name" required
                                                         value ="{{ isset($action) && $action=='edit' ? $data[0]->subcategory_name : old('subcategory_name') }}"  >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Sub-Category Image</label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10" name="subcategory_img"
                                                            value ="{{ isset($action) && $action=='edit' ? $data[0]->subcategory_img : old('subcategory_img') }}"  >
                                                         @if(isset($data) && $data[0]->subcategory_img != '')
                                                         <span><img style="height: 200px;margin-top: 1em;" src="{{ URL::asset('uploads/subcategory/'.$data[0]->subcategory_img)}}"></span>
                                                     @endif
                                                    </div>
                                                </div>
                                            </div>

                                            @if(isset($action) && $action =='edit')
                                            <div class="col-md-12 mb-10">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Status<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="status" data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                            @foreach (statustype() as $k => $statustype)
                                                                <option value="{{ $k+1 }}" {{ ((isset($action) && $action == 'edit') && $data[0]->status == $k+1 ) ? 'selected' : '' }} >{{ $statustype }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            <input type="hidden" name="edit_subcategoryimage" value="{{ isset($data) ? $data[0]->subcategory_img : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="subcategory_id"
                                                value ="{{ isset($action) && $action=='edit' ? encryption($data[0]->subcategory_id) : '' }}"  >

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left">  </label>
                                                        <button class="btn  btn-primary btn-rounded" type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL.'/viewsubcategory') }}" class="btn btn-danger btn-rounded">Cancel</a>
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
                                    <h3 >Tamil </h3>
                                </div>
                                <form method="post" action="{{ url(ADMINURL . '/savetamilsubcategorydetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Sub-Category
                                                        Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="subcategory_name_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->subcategory_name_tamil : old('subcategory_name_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control mb-10" name="subcategory_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->subcategory_id) : '' }}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewsubcategory') }}"
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

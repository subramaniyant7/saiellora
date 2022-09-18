@extends('admin.layouts')

@section('title','Action Banner')
@section('content')

	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage Banner</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/viewbanner') }}">
                                <i class="fa fa-arrow"> </i>  Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL.'/savebannerdetails') }}" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Banner Image<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10" name="banner_image" {{ isset($data) && $data[0]->banner_image != '' ? '' : 'required' }}
                                                         value ="{{ isset($action) && $action=='edit' ? $data[0]->banner_image : old('banner_image') }}"  >
                                                         @if(isset($data) && $data[0]->banner_image != '')
                                                         <span><img style="height: 200px;margin-top: 1em;" src="{{ URL::asset('uploads/banner/'.$data[0]->banner_image)}}"></span>
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

                                            <input type="hidden" name="edit_bannerimage" value="{{ isset($data) ? $data[0]->banner_image : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="banner_id"
                                                value ="{{ isset($action) && $action=='edit' ? encryption($data[0]->banner_id) : '' }}"  >

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left">  </label>
                                                        <button class="btn  btn-primary btn-rounded" type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL.'/viewbanner') }}" class="btn btn-danger btn-rounded">Cancel</a>
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

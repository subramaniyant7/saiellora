@extends('admin.layouts')

@section('title','Action Homepage Video')
@section('content')

	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Home Page Video</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL.'/homepage_video') }}" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Image<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10" name="home_video_image" {{ count($homeVideo) && $homeVideo[0]->home_video_image != '' ? '' : 'required' }}
                                                         value ="{{ count($homeVideo) ? $homeVideo[0]->home_video_image : old('home_video_image') }}"  >
                                                         @if(count($homeVideo) && $homeVideo[0]->home_video_image != '')
                                                         <span><img style="height: 200px;margin-top: 1em;" src="{{ URL::asset('uploads/homepage/'.$homeVideo[0]->home_video_image)}}"></span>
                                                     @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Title<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="home_video_title" required
                                                         value ="{{ count($homeVideo) ? $homeVideo[0]->home_video_title : old('home_video_title') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Description<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="home_video_description" required
                                                         value ="{{ count($homeVideo) ? $homeVideo[0]->home_video_description : old('home_video_description') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Video Link<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="home_video_link" required
                                                         value ="{{ count($homeVideo) ? $homeVideo[0]->home_video_link : old('home_video_link') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Status<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="status" data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                            @foreach (statustype() as $k => $statustype)
                                                                <option value="{{ $k+1 }}" {{ (count($homeVideo)  && $homeVideo[0]->status == $k+1 ) ? 'selected' : '' }} >{{ $statustype }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <input type="hidden" name="edit_homeimage" value="{{ count($homeVideo) ? $homeVideo[0]->home_video_image : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="home_video_id"
                                                value ="{{ count($homeVideo) ? encryption($homeVideo[0]->home_video_id) : '' }}"  >

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left">  </label>
                                                        <button class="btn  btn-primary btn-rounded" type="submit">Save</button>

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

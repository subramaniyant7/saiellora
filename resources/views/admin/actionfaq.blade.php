@extends('admin.layouts')

@section('title', 'Action FAQ')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage FAQ</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL . '/viewfaq') }}">
                                <i class="fa fa-arrow"> </i> Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL . '/savefaqdetails') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Question<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="faq_question"
                                                            required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->faq_question : old('faq_question') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Answer<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="faq_answer"
                                                            required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->faq_answer : old('faq_answer') }}">
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

                                            <input type="hidden" class="form-control mb-10" name="faq_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->faq_id) : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewfaq') }}"
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
                                <form method="post" action="{{ url(ADMINURL . '/savetamilfaqdetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Question<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="faq_question_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->faq_question_tamil : old('faq_question_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Answer<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="faq_answer_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->faq_answer_tamil : old('faq_answer_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control mb-10" name="faq_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->faq_id) : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewfaq') }}"
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

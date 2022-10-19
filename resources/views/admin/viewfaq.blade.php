@extends('admin.layouts')

@section('title','View FAQ')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">FAQ Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/managefaq') }}">
                            <i class="fa fa-plus"> </i>  FAQ
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="datable_1" class="table table-hover display  pb-30" >
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Question</th>
                                            <th>Question Tamil</th>
                                            <th>Answer</th>
                                            <th>Answer Tamil</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faqDetails as $k => $faq)
                                            @php

                                                $stClass = ($faq->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($faq->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $faq->faq_question }}</td>
                                                <td>{{ $faq->faq_question_tamil }}</td>
                                                <td>{{ $faq->faq_answer }}</td>
                                                <td>{{ $faq->faq_answer_tamil }}</td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$faq->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionfaq/edit/'.encryption($faq->faq_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionfaq/delete/'.encryption($faq->faq_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
												</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->

</div>


@stop



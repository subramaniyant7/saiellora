@extends('admin.layouts')

@section('title','View Blog')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Blog Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/manageblog') }}">
                            <i class="fa fa-plus"> </i>  Blog
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
                                            <th>Blog Title</th>
                                            <th>Blog Image</th>
                                            <th>Blog Description</th>
                                            <th>View Home Page</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogDetails as $k => $blog)
                                            @php

                                                $stClass = ($blog->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($blog->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $blog->blog_title }}</td>
                                                <td><img style="width:100%;height:100px;" src="{{ URL::asset('uploads/blog/'.$blog->blog_image)}}" ></td>
                                                <td>{{ $blog->blog_description }}</td>
                                                <td>{{ $blog->blog_home == 1 ? 'Yes' : 'No' }}</span> </td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$blog->status-1] }}</span> </td>

                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionblog/edit/'.encryption($blog->blog_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionblog/delete/'.encryption($blog->blog_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



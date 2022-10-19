@extends('admin.layouts')

@section('title','View Product Size')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Product Size Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/manageproductsize') }}">
                            <i class="fa fa-plus"> </i>  Product Size
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
                                            <th>Product Metal Size Name</th>
                                            <th>Product Metal Size Tamil Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productMetalSize as $k => $productmetalsize)
                                            @php

                                                $stClass = ($productmetalsize->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($productmetalsize->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $productmetalsize->product_size_name }}</td>
                                                <td>{{ $productmetalsize->product_size_name_tamil }}</td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$productmetalsize->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionproductsize/edit/'.encryption($productmetalsize->product_size_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionproductsize/delete/'.encryption($productmetalsize->product_size_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



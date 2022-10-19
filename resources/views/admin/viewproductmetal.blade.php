@extends('admin.layouts')

@section('title','View Product Metal')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Product Metal Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/manageproductmetal') }}">
                            <i class="fa fa-plus"> </i>  Product Metal
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
                                            <th>Product Metal Name</th>
                                            <th>Product Tamil Metal Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productMetal as $k => $productmetal)
                                            @php

                                                $stClass = ($productmetal->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($productmetal->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ $productmetal->product_metal_name }}</td>
                                                <td>{{ $productmetal->product_metal_name_tamil }}</td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$productmetal->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionproductmetal/edit/'.encryption($productmetal->product_metal_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionproductmetal/delete/'.encryption($productmetal->product_metal_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



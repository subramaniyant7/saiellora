@extends('admin.layouts')

@section('title','View Sub-Category')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Sub-Category Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/managesubcategory') }}">
                            <i class="fa fa-plus"> </i>  Sub-Category
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
                                            <th>Category Name</th>
                                            <th>Sub-Category Name</th>
                                            <th>Sub-Category Tamil Name</th>
                                            <th>Sub-Category Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategoryDetails as $k => $subcategory)
                                            @php
                                                $categoryName = getCategoryDetails($subcategory->category_id);
                                                $stClass = ($subcategory->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($subcategory->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ count($categoryName) ? $categoryName[0]->category_name : '' }}</td>
                                                <td>{{ $subcategory->subcategory_name }}</td>
                                                <td>{{ $subcategory->subcategory_name_tamil }}</td>
                                                <td>
                                                    @if($subcategory->subcategory_img != '')
                                                    <img style="width:100%;height:100px;" src="{{ URL::asset('uploads/subcategory/'.$subcategory->subcategory_img)}}" >
                                                    @endif
                                                </td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$subcategory->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionsubcategory/edit/'.encryption($subcategory->subcategory_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionsubcategory/delete/'.encryption($subcategory->subcategory_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



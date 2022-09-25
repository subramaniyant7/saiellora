@extends('admin.layouts')

@section('title','View Category')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Category Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/managecategory') }}">
                            <i class="fa fa-plus"> </i>  Category
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
                                            <th>Menu Name</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categoryDetails as $k => $category)
                                            @php
                                                $menuName = getMenuDetails($category->menu_id);
                                                $stClass = ($category->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($category->status == 1) ? 'Active' : 'label-danger';
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>
                                                <td>{{ count($menuName) ? $menuName[0]->menu_name : '' }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>
                                                    @if($category->category_img != '')
                                                    <img style="width:100%;height:100px;" src="{{ URL::asset('uploads/category/'.$category->category_img)}}" >
                                                    @endif
                                                </td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$category->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actioncategory/edit/'.encryption($category->category_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actioncategory/delete/'.encryption($category->category_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



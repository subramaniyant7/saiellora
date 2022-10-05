@extends('admin.layouts')

@section('title','View Products')
@section('content')

<div class="container-fluid">


    @include('admin.notification')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Product Details</h6>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL.'/manageproduct') }}">
                            <i class="fa fa-plus"> </i>  Product
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
                                            <th>Product Category</th>
                                            <th>Product SubCategory</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Product Description</th>
                                            <th>Product Size</th>
                                            <th>Product Type of Metal</th>
                                            <th>Is Latest</th>
                                            <th>Is MOst Popular</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productDetails as $k => $product)
                                            @php
                                                $stClass = ($product->status == 1) ? 'label-success' : 'label-danger';
                                                $stTxt = ($product->status == 1) ? 'Active' : 'label-danger';
                                                $menu = $category = $subcategory = $productMetal = $productSize = '';

                                                $categoryInfo = App\Http\Controllers\admin\HelperController::getCategoryDetails($product->product_category);
                                                if(count($categoryInfo)){
                                                    $category = $categoryInfo[0]->category_name;
                                                }

                                                $subcategoryInfo = App\Http\Controllers\admin\HelperController::getSubCategoryDetails($product->product_subcategory);
                                                if(count($subcategoryInfo)){
                                                    $subcategory = $subcategoryInfo[0]->subcategory_name;
                                                }

                                                $productMetalInfo = App\Http\Controllers\admin\HelperController::getProductMetal($product->product_size);
                                                if(count($productMetalInfo)){
                                                    $productMetal = $productMetalInfo[0]->product_metal_name;
                                                }

                                                $productSizeInfo = App\Http\Controllers\admin\HelperController::getProductSize($product->product_type_of_metal);
                                                if(count($productSizeInfo)){
                                                    $productSize = $productSizeInfo[0]->product_size_name;
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{ $k+1 }}</td>

                                                <td>{{ $category }}</td>
                                                <td>{{ $subcategory }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td><img style="width:100%;height:100px;" src="{{ URL::asset('uploads/products/'.$product->product_image)}}" ></td>
                                                <td>Rs.{{ $product->product_price }}</td>
                                                <td>{{ $product->product_description }}</td>
                                                <td>{{ $productMetal }}</td>
                                                <td>{{ $productSize }}</td>
                                                <td>{{ $product->product_latest == 1 ? 'Yes' : 'No' }}</td>
                                                <td>{{ $product->product_most_popular == 1 ? 'Yes' : 'No' }}</td>
                                                <td><span class="label {{ $stClass}}">{{ statustype()[$product->status-1] }}</span> </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ url(ADMINURL.'/actionproduct/edit/'.encryption($product->product_id)) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                    </a>
                                                    <a href="{{ url(ADMINURL.'/actionproduct/delete/'.encryption($product->product_id)) }}" id="delete_record" data-toggle="tooltip" data-original-title="Close">
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



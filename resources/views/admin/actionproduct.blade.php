@extends('admin.layouts')

@section('title', 'Action Product')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Manage Product</h6>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary btn-rounded" href="{{ url(ADMINURL . '/viewproduct') }}">
                                <i class="fa fa-arrow"> </i> Back
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @include('admin.notification')
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap mt-40">
                                <form method="post" action="{{ url(ADMINURL . '/saveproductdetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            {{-- <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Product Menu<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="product_menu" data-style="form-control btn-default btn-outline" required
                                                            onchange="getMenuCategory()">
                                                            <option value="">Select</option>
                                                            @foreach (getActiveRecord('menu') as $menu)
                                                                <option value="{{ $menu->menu_id }}" {{ ((isset($action) && $action == 'edit') && $data[0]->product_menu == $menu->menu_id ) ? 'selected' : '' }} >{{ $menu->menu_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> --}}


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Product
                                                        Category<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="product_category"
                                                            data-style="form-control btn-default btn-outline" required
                                                            onchange="getCatSubCategory()">
                                                            <option value="">Select</option>
                                                            @foreach (getActiveRecord('category') as $category)
                                                                <option value="{{ $category->category_id }}"
                                                                    {{ isset($action) && $action == 'edit' && $data[0]->product_category == $category->category_id ? 'selected' : '' }}>
                                                                    {{ $category->category_name }}</option>
                                                            @endforeach

                                                        </select>
                                                        <input type="hidden" name="category_hidden"
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_category : '' }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Product
                                                        Sub-Category<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="product_subcategory"
                                                            data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                        </select>

                                                        <input type="hidden" name="subcategory_hidden"
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_subcategory : '' }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Product Name<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10" name="product_name"
                                                            required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_name : old('product_name') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Product
                                                        Description<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="product_description" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_description : old('product_description') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Product
                                                        Price</label>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control mb-10"
                                                            name="product_price"
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_price : old('product_price') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Product Size<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">

                                                        <select class="selectpicker" name="product_size"
                                                            data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                            @foreach (getActiveRecord('product_size') as $metal)
                                                                <option value="{{ $metal->product_size_id }}"
                                                                    {{ isset($action) && $action == 'edit' && $data[0]->product_size == $metal->product_size_id ? 'selected' : '' }}>
                                                                    {{ $metal->product_size_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10  text-left">Type of
                                                        Metal<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <select class="selectpicker" name="product_type_of_metal"
                                                            data-style="form-control btn-default btn-outline" required>
                                                            <option value="">Select</option>
                                                            @foreach (getActiveRecord('product_metal') as $metal)
                                                                <option value="{{ $metal->product_metal_id }}"
                                                                    {{ isset($action) && $action == 'edit' && $data[0]->product_type_of_metal == $metal->product_metal_id ? 'selected' : '' }}>
                                                                    {{ $metal->product_metal_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Product Image<span
                                                            class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control mb-10"
                                                            name="product_image"
                                                            {{ isset($data) && $data[0]->product_image != '' ? '' : 'required' }}
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_image : old('product_image') }}">
                                                        @if (isset($data) && $data[0]->product_image != '')
                                                            <span><img style="height: 200px;margin-top: 1em;"
                                                                    src="{{ URL::asset('uploads/products/' . $data[0]->product_image) }}"></span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            @php
                                                $count = isset($moreimages) ? count($moreimages) : 0;
                                            @endphp
                                            @if (isset($moreimages) && count($moreimages))
                                                @foreach ($moreimages as $l => $moreimages)
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label mb-10 text-left">Product
                                                                Sub-Image{{ $l + 1 }}</label>
                                                            <div class="col-md-8">
                                                                <input type="file" class="form-control mb-10"
                                                                    name="product_subimage[]"
                                                                    value="{{ isset($action) && $action == 'edit' ? $moreimages->product_image : old('product_image') }}">

                                                                <span><img style="height: 200px;margin-top: 1em;"
                                                                        src="{{ URL::asset('uploads/products/additional/' . $moreimages->product_image) }}"></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                            @for ($p = 1; $p <= 3 - $count; $p++)
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label mb-10 text-left">Product
                                                            Sub-Image{{ $p }}</label>
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control mb-10"
                                                                name="product_subimage[]"
                                                                value="{{ isset($action) && $action == 'edit' ? $data[0]->product_image : old('product_image') }}">

                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor

                                            <div class="col-md-12 mb-30 mt-10">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left"></label>
                                                    <div class="col-md-4" style="display: flex">
                                                        <input type="checkbox" class="form-control" name="product_latest"
                                                            style="height: 15px; width: 9%; margin-right: 10px;"
                                                            {{ isset($action) && $action == 'edit' && $data[0]->product_latest == 1 ? 'checked' : '' }}>
                                                        <span>Latest Product</span>
                                                    </div>
                                                    <div class="col-md-4" style="display: flex">
                                                        <input type="checkbox" class="form-control"
                                                            name="product_most_popular"
                                                            style="height: 15px; width: 9%; margin-right: 10px;"
                                                            {{ isset($action) && $action == 'edit' && $data[0]->product_most_popular == 1 ? 'checked' : '' }}>
                                                        <span>Product Most Popular</span>
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

                                            <input type="hidden" name="edit_productimage"
                                                value="{{ isset($data) ? $data[0]->product_image : '' }}">
                                            <input type="hidden" class="form-control mb-10" name="product_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->product_id) : '' }}">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewproduct') }}"
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
                                <form method="post" action="{{ url(ADMINURL . '/savetamilproductdetails') }}"
                                    enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Product Name<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control mb-10"
                                                            name="product_name_tamil" required
                                                            value="{{ isset($action) && $action == 'edit' ? $data[0]->product_name_tamil : old('product_name_tamil') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label mb-10 text-left">Tamil Product Description<span class="help"> *</span></label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control mb-10" name="product_description_tamil" required>{{isset($action)&& $action == 'edit' ? $data[0]->product_description_tamil: old('product_description_tamil')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" class="form-control mb-10" name="product_id"
                                                value="{{ isset($action) && $action == 'edit' ? encryption($data[0]->product_id) : '' }}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label class="col-md-4 control-label mb-10  text-left"> </label>
                                                        <button class="btn  btn-primary btn-rounded"
                                                            type="submit">Save</button>
                                                        <a href="{{ url(ADMINURL . '/viewproduct') }}"
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

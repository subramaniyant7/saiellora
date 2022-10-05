@php
$banners = getActiveRecord('banner_details');
@endphp
<div class="container-fluid" style="margin-top: -18px;">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($banners as $p => $banner)
                <li data-target="#myCarousel" data-slide-to="{{ $p }}" class="{{ $p == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($banners as $k => $banner)
                    <div class="item {{ $k == 0 ? 'active' : '' }}">
                        <img src="{{ URL::asset('uploads/banner/' . $banner->banner_image) }}"
                            alt="{{ $banner->banner_image }}" style="width:100%;">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

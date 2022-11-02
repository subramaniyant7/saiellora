@php
    $banners = getActiveRecord('banner_details');
@endphp
<div class="container-fluid" style="margin-top: -18px;">
    <div class="row">
        <div id="mybanner" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            @if (count($banners) > 1)
                <ol class="carousel-indicators">
                    @foreach ($banners as $p => $banner)
                        <li data-target="#mybanner" data-slide-to="{{ $p }}"
                            class="{{ $p == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
            @endif

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($banners as $k => $banner)
                    <div class="item {{ $k == 0 ? 'active' : '' }}">
                        <img src="{{ URL::asset('uploads/banner/' . $banner->banner_image) }}"
                            alt="{{ $banner->banner_image }}" style="width:100%;">
                    </div>
                @endforeach
            </div>

            @if (count($banners) > 1)
                <a class="left carousel-control" href="#mybanner" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mybanner" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            @endif
        </div>
    </div>
</div>

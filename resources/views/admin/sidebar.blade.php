<!-- Left Sidebar Menu -->
@php
    $title = app()->view->getSections()['title'];
@endphp
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span></span>
            <i class="zmdi zmdi-more"></i>
        </li>

        <li>
            <a class="{{ $title == 'Dashboard' ? 'active' :'' }}" href="{{ url(ADMINURL.'/dashboard') }}">
                <div class="pull-left">
                    <i class="fa fa-tachometer mr-20"></i>
                    <span class="right-nav-text"> Dashboard</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>

        <li>
            <a class="{{ $title == 'Manage Admin' ? 'active' :'' }}" href="{{ url(ADMINURL.'/viewadmin') }}">
                <div class="pull-left">
                    <i class="fa fa-users mr-20"></i>
                    <span class="right-nav-text">Admin</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>

        <li>
            <a class="{{ $title == 'View Products' ? 'active' :'' }}" href="{{ url(ADMINURL.'/viewproduct') }}">
                <div class="pull-left">
                    <i class="fa fa-briefcase mr-20"></i>
                    <span class="right-nav-text">Products</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>

        <li>
            <a class="{{ $title == 'View Banner' ? 'active' :'' }}" href="{{ url(ADMINURL.'/viewbanner') }}">
                <div class="pull-left">
                    <i class="fa fa-briefcase mr-20"></i>
                    <span class="right-nav-text">Banner Images</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>

        <li>
            <a class="{{ $title == 'View Blog' ? 'active' :'' }}" href="{{ url(ADMINURL.'/viewblog') }}">
                <div class="pull-left">
                    <i class="fa fa-briefcase mr-20"></i>
                    <span class="right-nav-text">Blog</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>



        <li>
            <a  href="{{ url(ADMINURL.'/logout') }}">
                <div class="pull-left">
                    <i class="fa fa-power-off mr-20"></i>
                    <span class="right-nav-text">Log out</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>




    </ul>
</div>
<!-- /Left Sidebar Menu -->

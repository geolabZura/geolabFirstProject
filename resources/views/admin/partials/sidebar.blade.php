<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Site
            </a>
        </div>

        <ul class="nav">
            <li class="{{Request::is('admin') ? 'active' : ''}}">
                <a href="{{route('admin.statistic')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('admin/slider') ? 'active' : ''}}">
                <a href="{{route('admin.slider')}}">
                    <i class="pe-7s-photo"></i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="{{Request::is('admin/service') ? 'active' : ''}}">
                <a href="{{route('admin.service')}}">
                    <i class="pe-7s-photo"></i>
                    <p>Service</p>
                </a>
            </li>
            <li class="{{Request::is('admin/social') ? 'active' : ''}}">
                <a href="{{route('admin.social')}}">
                    <i class="pe-7s-photo"></i>
                    <p>Social</p>
                </a>
            </li>
            <li class="{{Request::is('admin/subscriber') ? 'active' : ''}}">
                <a href="{{route('admin.subscriber')}}">
                    <i class="pe-7s-photo"></i>
                    <p>Subscribers</p>
                </a>
            </li>
        </ul>

    </div>
</div>
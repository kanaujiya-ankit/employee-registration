<?php
    $user = auth()->user();
?>
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">Rubio</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>

                @can('access', 'Members')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/members') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Members</span></a></li>
                @endcan
                @can('access', 'Users')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/users') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Users</span></a></li>
                @endcan
                @can('access', 'Questions')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/questions') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Questions</span></a></li>
                @endcan
                @can('access', 'Payment Plans')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/payment-plans') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Payment Plans</span></a></li>
                @endcan
                @can('access', 'Jobs')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/jobs') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Jobs</span></a></li>
                @endcan
                @can('access', 'Testimonial')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/testimonials') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Testimonial</span></a></li>
                @endcan
                @can('access', 'Permissions')
                    <li data-username="Users" class="nav-item"><a href="{{ url('admin/permissions') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Permissions</span></a></li>
                @endcan
                
            </ul>
        </div>
    </div>
</nav>
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="text-center">
            <a href="{{ route('home') }}" class="text-light" style="font-weight: 700; font-size:25px">User Dashboard</a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Route::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" ><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                             Profile Settings
                            </span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('users.password.view') ? 'active' : '' }}"><a href="{{ route('users.password.view') }}">Password Change</a></li>
                            <li class="{{ Route::is('users.profile.details') ? 'active' : '' }}"><a href="{{ route('users.profile.details') }}">Profile Detials</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Salary History
                            </span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('users.salary.view') ? 'active' : '' }}"><a href="{{ route('users.salary.view') }}">Total Salary</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="text-center">
            <a href="{{ route('admin.dashboard') }}" class="text-light" style="font-weight: 700; font-size:25px">Admin Panel</a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    
                    <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" ><i class="ti-dashboard"></i><span>dashboard</span></a>
                        {{-- <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul> --}}
                    </li>

                    <li class="{{ Route::is('admin.job_post.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.job_post.index') }}" ><i class="fa fa-anchor" aria-hidden="true"></i><span>Post A Job</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.job_post.index') ? 'active' : '' }}"><a href="{{ route('admin.job_post.index') }}"> All Posted Jobs </a> </li>
                            <li class="{{ Route::is('admin.job_post.create') ? 'active' : '' }}"><a href="{{ route('admin.job_post.create') }}">Add New Job</a></li>  
                            {{-- create route used for show employee history  --}}
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.employee_list.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.employee_list.index') }}" ><i class="fa fa-adn" aria-hidden="true"></i><span>Employee List</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.employee_list.index') ? 'active' : '' }}"><a href="{{ route('admin.employee_list.index') }}">All Employee</a></li>
                            <li class="{{ Route::is('admin.pay_employee.index') ? 'active' : '' }}"><a href="{{ route('admin.pay_employee.index') }}">Pay Employee</a></li>
                            <li class="{{ Route::is('admin.pay_employee.create') ? 'active' : '' }}"><a href="{{ route('admin.pay_employee.create') }}">Payment History</a></li>  
                            {{-- create route used for show employee history  --}}
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.job_applied_candidates.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.job_applied_candidates.index') }}" ><i class="fa fa-asterisk" aria-hidden="true"></i><span>Applied Candidates</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.job_applied_candidates.index') ? 'active' : '' }}"><a href="{{ route('admin.job_applied_candidates.index') }}">All Applied Candidates</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.team_members.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.team_members.index') }}" ><i class="fa fa-anchor" aria-hidden="true"></i><span>Team Members</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.team_members.index') ? 'active' : '' }}"><a href="{{ route('admin.team_members.index') }}">All Members</a></li>
                            <li class="{{ Route::is('admin.team_members.create') ? 'active' : '' }}"><a href="{{ route('admin.team_members.create') }}">Add Member</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.clients.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.clients.index') }}" ><i class="fa fa-backward" aria-hidden="true"></i><span>Our Clients</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.clients.index') ? 'active' : '' }}"><a href="{{ route('admin.clients.index') }}">All Clients</a></li>
                            <li class="{{ Route::is('admin.clients.create') ? 'active' : '' }}"><a href="{{ route('admin.clients.create') }}">Add Client</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.categories.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.categories.index') }}" ><i class="fa fa-adjust" aria-hidden="true"></i><span>Categories</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.categories.index') ? 'active' : '' }}"><a href="{{ route('admin.categories.index') }}">All Categories</a></li>
                            <li class="{{ Route::is('admin.categories.create') ? 'active' : '' }}"><a href="{{ route('admin.categories.create') }}">Add Category</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.sub_categories.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.sub_categories.index') }}" ><i class="fa fa-bomb" aria-hidden="true"></i><span>Sub Categories</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.sub_categories.index') ? 'active' : '' }}"><a href="{{ route('admin.sub_categories.index') }}">All Sub Categories</a></li>
                            <li class="{{ Route::is('admin.sub_categories.create') ? 'active' : '' }}"><a href="{{ route('admin.sub_categories.create') }}">Add Sub Category</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.products.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.products.index') }}" ><i class="fa fa-bold" aria-hidden="true"></i><span>Products</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.products.index') ? 'active' : '' }}"><a href="{{ route('admin.products.index') }}">All Products</a></li>
                            <li class="{{ Route::is('admin.products.create') ? 'active' : '' }}"><a href="{{ route('admin.products.create') }}">Add Product</a></li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('admin.our_activities.index') ? 'active' : '' }}"> 
                        <a href="{{ route('admin.our_activities.index') }}" ><i class="fa fa-archive" aria-hidden="true"></i><span>Our Activities</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.our_activities.index') ? 'active' : '' }}"><a href="{{ route('admin.our_activities.index') }}">Our Activities</a></li>
                            <li class="{{ Route::is('admin.our_activities.create') ? 'active' : '' }}"><a href="{{ route('admin.our_activities.create') }}">Add Activity</a></li>
                        </ul>
                    </li>








                    <li class="{{ Route::is('admin.all_sliders_index.index ') ? 'active' : '' }}">
                        <a href="{{ route('admin.all_sliders_index.index') }}" ><i class="fa fa-angellist" aria-hidden="true"></i><span>All Sliders</span></a>
                        {{-- <ul>
                            <li class="{{ Route::is('admin.all_sliders_index.index') ? 'active' : '' }}"><a href="{{ route('admin.all_sliders_index.index') }}">Sliders</a></li>
                        </ul> --}}
                        {{-- <ul class="collapse">
                            <li class="{{ Route::is('admin.sliders.create') ? 'active' : '' }}"><a href="{{ route('admin.sliders.create') }}">Home Slider Create</a></li>
                            <li class="{{ Route::is('admin.sliders.index') ? 'active' : '' }}"><a href="{{ route('admin.sliders.index') }}">Home Slider</a></li>
                        </ul>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.nav_sliders.create') ? 'active' : '' }}"><a href="{{ route('admin.nav_sliders.create') }}">Nav Slider Create</a></li>
                            <li class="{{ Route::is('admin.nav_sliders.index') ? 'active' : '' }}"><a href="{{ route('admin.nav_sliders.index') }}">Nav Slider</a></li>
                        </ul> --}}
                    </li>




                    <li class="{{ Route::is('admin.settings.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.create') }}" > <i class="fa fa-bell" aria-hidden="true"></i><span>Settings</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.settings.index') ? 'active' : '' }}"><a href="{{ route('admin.settings.index') }}">Site Settings</a></li>
                            <li class="{{ Route::is('admin.admin_profile_settings.index') ? 'active' : '' }}"><a href="{{ route('admin.admin_profile_settings.index') }}">Profile Settings</a></li>
                            <li class="{{ Route::is('admin.footer_settings.index') ? 'active' : '' }}"><a href="{{ route('admin.footer_settings.index') }}">Footer Settings</a></li>
                        </ul>
                    </li>
 
                </ul>
            </nav>
        </div>
    </div>
</div>
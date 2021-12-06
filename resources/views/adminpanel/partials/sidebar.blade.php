<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle"
                            src="{{ asset('storage') }}/images/users/{{ Auth::user()->profile_image }}"
                            style="width: 70px; height: 70px" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong
                                    class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">{{ Auth::user()->type }}<b
                                    class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        {{-- <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li> --}}
                        <li><a href="{{route('admin.setting')}}">Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('admin.logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <div class="logo-element">
                    BB
                </div>
            </li>
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa fa-th-large">
                    </i> <span class="nav-label">Dashboard
                    </span>
                </a>

            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Candidates </span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.candidate.index') }}">Registered List</a></li>
                    <li><a href="{{ route('admin.candidate.candidatecv') }}">Download CV</a></li>
                    <li><a href="{{ route('admin.candidate.index_imported') }}">Uploaded List</a></li>
                    <li><a href="{{ route('admin.candidate.import') }}">Import Excel</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Company</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.company.index') }}">List</a></li>
                    <li><a href="">Create</a></li>
                    <li><a href="{{ route('admin.company.packageCompanies') }}">Package Plan</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Bizer</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="">Create</a></li>
                    <li><a href="">List</a></li>
                </ul>
            </li>



            <li>
                <a href="{{ route('admin.contact_us.index') }}"><i class="fa fa-bar-chart-o"></i> <span
                        class="nav-label">Contact Us</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.contact_us.index') }}">New Mesages List</a></li>
                    <li><a href="{{ route('admin.contact_us.index_reviewed') }}">Reviewd List</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.user.index') }}"><i class="fa fa-bar-chart-o"></i> <span
                        class="nav-label">Users</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.user.index') }}">List</a></li>
                    <li><a href="{{ route('admin.user.deactivated_list') }}">Deactivated Users</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.news.index') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">News
                        Management</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.news.create') }}">Create</a></li>
                    <li><a href="{{ route('admin.news.index') }}">List</a></li>
                </ul>
            </li>
            <!-- =====FAQS===== -->
            <li>
                <a href="{{ route('admin.faqs.index') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">FAQ's</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.faqs.create') }}">Create</a></li>
                    <li><a href="{{ route('admin.faqs.index') }}">List</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.list') }}"><i class="fa fa-bar-chart-o"></i> <span
                        class="nav-label">Admins</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.list') }}">List</a></li>
                    <li><a href="{{ route('admin.deactivated_list') }}">Deactivated Admins</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span
                        class="nav-label">Packages</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.packages.create') }}">Create</a></li>
                    <li><a href="{{ route('admin.packages.index') }}">List</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span
                        class="nav-label">News Letter</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.news_letter.list') }}">List</a></li>
                </ul>
            </li>


        </ul>

    </div>
</nav>

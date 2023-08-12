<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('adm/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

{{--    <a href="#" class="brand-link">--}}
{{--        <img src="{{asset('storage/avatar/'.$user->avatar)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light">{{$user->name}}  {{$user->lastname}}</span>--}}
{{--    </a>--}}


    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.main.index')}}" class="nav-link">
                        <i class=" nav-icon fas fa-home"></i>
                        <p>
                            Main
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-poll-h"></i>
                        <p>
                            Categories

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>All Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.category.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-poll-h"></i>
                        <p>
                            Posts

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.post.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.post.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            USERS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.user.index')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-poll-h"></i>
                        <p>
                            Role

                        </p>
                    </a>

{{--                    nav-treeview--}}
                    <ul class="nav ">
                        <li class="nav-item">
                            <a href="{{route('admin.role.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>All Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.role.create')}}" class="nav-link">
                                <i class=" nav-icon fas fa-plus"></i>
                                <p>Add Role</p>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
    </div>
</aside>

@php $user = auth('admin')->user() @endphp
<div class="sidebar" data-color="green" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-3.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('NigerKit') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @if($user->hasPermissionTo("Create_Admin") ||
                $user->hasPermissionTo("Update_Admin") ||
                $user->hasPermissionTo("Update_Admin_Status") ||
                $user->hasPermissionTo("Update_Admin_Permission") ||
                $user->hasPermissionTo("Update_Admin_Role") ||
                $user->hasPermissionTo("Read_Admin") ||
                $user->hasPermissionTo("Delete_Admin") ||
                $user->hasPermissionTo("Create_Client") ||
                $user->hasPermissionTo("Update_Client") ||
                $user->hasPermissionTo("Update_Client_Status") ||
                $user->hasPermissionTo("Read_Client") ||
                $user->hasPermissionTo("Delete_Client") ||
                $user->hasPermissionTo("Create_Subscriber") ||
                $user->hasPermissionTo("Update_Subscriber") ||
                $user->hasPermissionTo("Update_Subscriber_Status") ||
                $user->hasPermissionTo("Read_Subscriber") ||
                $user->hasPermissionTo("Delete_Subscriber"))
            <li
                class="nav-item {{ ($activePage == 'admin-management' || $activePage == 'user-management' || $activePage == 'subscriber-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    {{--<i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>--}}
                    <p>{{ __('Users') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        @if($user->hasPermissionTo("Create_Admin") ||
                            $user->hasPermissionTo("Update_Admin") ||
                            $user->hasPermissionTo("Update_Admin_Status") ||
                            $user->hasPermissionTo("Update_Admin_Permission") ||
                            $user->hasPermissionTo("Update_Admin_Role") ||
                            $user->hasPermissionTo("Read_Admin") ||
                            $user->hasPermissionTo("Delete_Admin"))
                        <li class="nav-item{{ $activePage == 'admin-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <span class="sidebar-mini"> AM </span>
                                <span class="sidebar-normal"> {{ __('Admin Management') }} </span>
                            </a>
                        </li>
                        @endif

                        @if($user->hasPermissionTo("Create_Client") ||
                            $user->hasPermissionTo("Update_Client") ||
                            $user->hasPermissionTo("Update_Client_Status") ||
                            $user->hasPermissionTo("Read_Client") ||
                            $user->hasPermissionTo("Delete_Client"))
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                        @endif
                        @if($user->hasPermissionTo("Create_Subscriber") ||
                            $user->hasPermissionTo("Update_Subscriber") ||
                            $user->hasPermissionTo("Update_Subscriber_Status") ||
                            $user->hasPermissionTo("Read_Subscriber") ||
                            $user->hasPermissionTo("Delete_Subscriber"))
                        <li class="nav-item{{ $activePage == 'subscriber-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('subscriber.index') }}">
                                <span class="sidebar-mini"> SM </span>
                                <span class="sidebar-normal"> {{ __('Subscriber Management') }} </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif
            @if($user->hasPermissionTo("Create_Tag") ||
                $user->hasPermissionTo("Update_Tag") ||
                $user->hasPermissionTo("Read_Tag") ||
                $user->hasPermissionTo("Delete_Tag")||
                $user->hasPermissionTo("Create_Category") ||
                $user->hasPermissionTo("Update_Category") ||
                $user->hasPermissionTo("Read_Category") ||
                $user->hasPermissionTo("Delete_Category"))
            <li
                class="nav-item {{ ($activePage == 'tag-management' || $activePage == 'category-management') ? 'active open' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#tagzanomies">
                    {{--<i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>--}}
                    <p>{{ __('Tags & Categories') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="tagzanomies">
                    <ul class="nav">
                        @if($user->hasPermissionTo("Create_Tag") ||
                            $user->hasPermissionTo("Update_Tag") ||
                            $user->hasPermissionTo("Read_Tag") ||
                            $user->hasPermissionTo("Delete_Tag"))
                        <li class="nav-item{{ $activePage == 'tag-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('tag.index') }}">
                                <span class="sidebar-mini"> TM </span>
                                <span class="sidebar-normal"> {{ __('Tags Management') }} </span>
                            </a>
                        </li>
                        @endif
                        @if($user->hasPermissionTo("Create_Category") ||
                            $user->hasPermissionTo("Update_Category") ||
                            $user->hasPermissionTo("Read_Category") ||
                            $user->hasPermissionTo("Delete_Category"))
                        <li class="nav-item{{ $activePage == 'category-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('Category Management') }} </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            @if($user->hasPermissionTo("Create_Product") ||
                $user->hasPermissionTo("Update_Product") ||
                $user->hasPermissionTo("Update_Product_Status") ||
                $user->hasPermissionTo("Read_Product") ||
                $user->hasPermissionTo("Delete_Product"))
            <li class="nav-item{{ $activePage == 'product-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <i class="material-icons">blur_on</i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            @endif
            @if($user->hasPermissionTo("Create_Post") ||
                $user->hasPermissionTo("Update_Post") ||
                $user->hasPermissionTo("Update_Post_Status") ||
                $user->hasPermissionTo("Read_Post") ||
                $user->hasPermissionTo("Delete_Post"))
            <li class="nav-item{{ $activePage == 'post-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="material-icons">post_add</i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li>
            @endif
            
            <li class="nav-item{{ $activePage == 'orders' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('order.index') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Orders') }}</p>
                </a>
            </li>
            {{-- <li class="nav-item{{ $activePage == 'review' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('review') }}">
                <i class="material-icons">view_comfy</i>
                <p>{{ __('Review') }}</p>
            </a>
            </li> --}}
            {{-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('notifications') }}">
                <i class="material-icons">notifications</i>
                <p>{{ __('Notifications') }}</p>
            </a>
            </li> --}}

            @if($user->hasPermissionTo("Create_Banner") ||
                $user->hasPermissionTo("Update_Banner") ||
                $user->hasPermissionTo("Update_Banner_Status") ||
                $user->hasPermissionTo("Read_Banner") ||
                $user->hasPermissionTo("Delete_Banner")||
                $user->hasPermissionTo("Create_Role") ||
                $user->hasPermissionTo("Update_Role") ||
                $user->hasPermissionTo("Update_Role_Status") ||
                $user->hasPermissionTo("Update_Role_Permission") ||
                $user->hasPermissionTo("Read_Role") ||
                $user->hasPermissionTo("Delete_Role")||
                $user->hasPermissionTo("Create_Permission") ||
                $user->hasPermissionTo("Update_Permission") ||
                $user->hasPermissionTo("Update_Permission_Status") ||
                $user->hasPermissionTo("Read_Permission") ||
                $user->hasPermissionTo("Delete_Permission")||
                $user->hasPermissionTo("Create_Setting") ||
                $user->hasPermissionTo("Update_Setting") ||
                $user->hasPermissionTo("Read_Setting"))
            <li class="nav-item {{ ($activePage == 'banner-management'||
                                    $activePage == 'settings-management'||
                                    $activePage == 'role-management'||
                                    $activePage == 'permission-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="true">
                    <p>{{ __('Settings') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="settings">
                    <ul class="nav">
                        @if($user->hasPermissionTo("Create_Banner") ||
                            $user->hasPermissionTo("Update_Banner") ||
                            $user->hasPermissionTo("Update_Banner_Status") ||
                            $user->hasPermissionTo("Read_Banner") ||
                            $user->hasPermissionTo("Delete_Banner"))
                        <li class="nav-item{{ $activePage == 'banner-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('banner.index') }}">
                                <span class="sidebar-mini"> BM </span>
                                <span class="sidebar-normal">{{ __('Banner Management') }} </span>
                            </a>
                        </li>
                        @endif
                        @if($user->hasPermissionTo("Create_Role") ||
                            $user->hasPermissionTo("Update_Role") ||
                            $user->hasPermissionTo("Update_Role_Status") ||
                            $user->hasPermissionTo("Update_Role_Permission") ||
                            $user->hasPermissionTo("Read_Role") ||
                            $user->hasPermissionTo("Delete_Role"))
                        <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('role.index') }}">
                                <span class="sidebar-mini"> RM </span>
                                <span class="sidebar-normal">{{ __('Role Management') }} </span>
                            </a>
                        </li>
                        @endif
                        @if($user->hasPermissionTo("Create_Permission") ||
                            $user->hasPermissionTo("Update_Permission") ||
                            $user->hasPermissionTo("Update_Permission_Status") ||
                            $user->hasPermissionTo("Read_Permission") ||
                            $user->hasPermissionTo("Delete_Permission"))
                        <li class="nav-item{{ $activePage == 'permission-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('permission.index') }}">
                                <span class="sidebar-mini"> PM </span>
                                <span class="sidebar-normal">{{ __('Permission Management') }} </span>
                            </a>
                        </li>
                        @endif
                        @if($user->hasPermissionTo("Create_Setting") ||
                            $user->hasPermissionTo("Update_Setting") ||
                            $user->hasPermissionTo("Read_Setting"))
                        <li class="nav-item{{ $activePage == 'settings-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('settings.index') }}">
                                <span class="sidebar-mini"> BR </span>
                                <span class="sidebar-normal">{{ __('Setting Management') }} </span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif
        </ul>
    </div>
</div>

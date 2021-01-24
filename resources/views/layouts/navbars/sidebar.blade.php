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
                        <li class="nav-item{{ $activePage == 'admin-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <span class="sidebar-mini"> AM </span>
                                <span class="sidebar-normal"> {{ __('Admin Management') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'subscriber-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('subscriber.index') }}">
                                <span class="sidebar-mini"> SM </span>
                                <span class="sidebar-normal"> {{ __('Subscriber Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
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
                        <li class="nav-item{{ $activePage == 'tag-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('tag.index') }}">
                                <span class="sidebar-mini"> TM </span>
                                <span class="sidebar-normal"> {{ __('Tags Management') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'category-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('Category Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item{{ $activePage == 'product-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <i class="material-icons">blur_on</i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'post-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="material-icons">post_add</i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li>
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

            <li class="nav-item {{ ($activePage == 'banner-management'||$activePage == 'settings-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="true">
                    <p>{{ __('Settings') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="settings">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'banner-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('banner.index') }}">
                                <span class="sidebar-mini"> BR </span>
                                <span class="sidebar-normal">{{ __('Banner Manager') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'settings-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('settings.index') }}">
                                <span class="sidebar-mini"> BR </span>
                                <span class="sidebar-normal">{{ __('Setting Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

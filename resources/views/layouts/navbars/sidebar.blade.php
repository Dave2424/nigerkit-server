<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-3.jpg">
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
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
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
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('category') }}">
          <i class="material-icons">category</i>
          <p>{{ __('Categories') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="material-icons">blur_on</i>
          <p>{{ __('Product') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'post' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts') }}">
          <i class="material-icons">post_add</i>
          <p>{{ __('Posts') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'orders' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('orders') }}">
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

      <li class="nav-item {{ ($activePage == 'banner') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="true">
          <p>{{ __('Settings') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="settings">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'banner' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('banner') }}">
            <span class="sidebar-mini"> BR </span>
            <span class="sidebar-normal">{{ __('Banner') }} </span>
            </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
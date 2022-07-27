<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('SIGO') }}
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
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="sidebar-mini"></span>
                    <span class="sidebar-normal">{{ __('Mi Perfil') }} </span>
                </a>
            </li>         

            <li class="nav-item {{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#lxx" aria-expanded="true">
                  <i class="fa fa-cogs" aria-hidden="true"></i>
                  {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
                  <p>{{ __('Config. Sistema') }}
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse show" id="lxx">
                  <ul class="nav">
                      @can('user_index')
                          <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                              <a class="nav-link" href="{{ route('users.index') }}">

                                  <i class="fa fa-user" aria-hidden="true"></i>
                                  <p>Usuarios</p>
                              </a>
                          </li>
                      @endcan
                      @can('permission_index')
                      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('permissions.index') }}">
                            <i class="fa fa-server" aria-hidden="true"></i>
                            <p>{{ __('Permissions') }}</p>
                        </a>
                    </li>
                      @endcan
                      @can('role_index')
                          <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
                              <a class="nav-link" href="{{ route('roles.index') }}">
                                  <i class="fa fa-cogs" aria-hidden="true"></i>
                                  <p>{{ __('Roles') }}</p>
                              </a>
                          </li>
                      @endcan
                  </ul>
              </div>
          </li>
         
        </ul>
    </div>
</div>

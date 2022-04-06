<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">Corporate Platform</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">CPF</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="/" class="nav-link "><i class="iconify" data-icon="bx:bxs-dashboard" style="font-size: 20px" ></i><span style="padding: 10px"> Dashboard </span></a>
          </li>

        <!-- Authentication Links -->
        @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @else

          <li class="nav-item dropdown">
            @can('task-list')
            <a href="{{ route('tasks.index') }}"  class="nav-link " ><i class='eos-icons'>project</i>
            </i><span style="margin-right: 10px">Project</span></a>
            @endcan
            </li>


            <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown "><i class="fas fa-users" style="font-size: 20px"></i><span>Manage User</span></a>
            <ul class="dropdown-menu">
            @can('user-list')
            <li><a href="{{ route('users.index') }}" class="nav-link "><i class="iconify" data-icon="bx:bxs-user-circle" style="font-size: 25px" ></i> <span style="padding: 10px"> Users</span></a></li>
            @endcan
            @can('role-list')
            <li> <a href="{{ route('roles.index') }}" class="nav-link "><i class='eos-icons'>role_binding</i>Roles</a></li>
            @endcan
            </li>
            @endguest


            </ul>
            <li class="nav-item dropdown">
                @can('task-list')
                <a href="{{ route('tasks.index') }}" class="nav-link "><i class="iconify" data-icon="ant-design:setting-filled" style="font-size: 20px" ></i><span style="padding: 10px"> Setting</span></a>
                
                @endcan
                </li>
        </ul>
    </aside>
  </div>

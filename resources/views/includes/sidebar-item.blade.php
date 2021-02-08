<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/jasamarga*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-bookmark"></i></span>
    <span class="menu-text"> JASAMARGA </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/devices*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/devices" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Devices </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/intercomes*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/intercomes" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Intercomes </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/locations*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/locations" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Locations </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/maintenances*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/maintenances" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Maintenances </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/officials*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/officials" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Officials </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/users*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/users" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/jmtm*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-bookmark"></i></span>
    <span class="menu-text"> JMTM </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/jmtm/devices*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jmtm/devices" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Devices </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jmtm/maintenances*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jmtm/maintenances" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Maintenances </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jmtm/users*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jmtm/users" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<!-- <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/vms*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-bookmark"></i></span>
    <span class="menu-text"> VMS </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/vms/areas*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/vms/areas" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Areas </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/vms/directories*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/vms/directories" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Directories </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/vms/types*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/vms/types" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Types </span>
        </a>
      </li>
    </ul>
  </div>
</li> -->

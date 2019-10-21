<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('default-avatar.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
  @guest
  @else
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ (Request::segment(2) == 'home') ? 'treeview active' : ''}}">
          <a href="{{ route('home') }}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
          </a>
        </li>

         
        <li class="{{ ( Request::segment(2) == 'article' || Request::segment(2) == 'category' || Request::segment(2) == 'tag') ? 'active treeview menu-open' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::segment(2) == 'article') ? 'active' : '' }}"><a href="{{ route('article.index') }}"><i class="fa fa-circle-o"></i>Articles</a></li>
            <li class="{{ (Request::segment(2) == 'category') ? 'active' : '' }}"><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>Categories</a></li>
            <li class="{{ (Request::segment(2) == 'tag') ? 'active' : '' }}"><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i>Tags</a></li>
          </ul>
        </li>

        <li class="{{ ( Request::segment(2) == 'service' || Request::segment(2) == 'catservice' || Request::segment(2) == 'other-service') ? 'active treeview menu-open' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::segment(2) == 'service') ? 'active' : '' }}"><a href="{{ route('service.index') }}"><i class="fa fa-circle-o"></i>Service</a></li>
            <li class="{{ (Request::segment(2) == 'catservice') ? 'active' : '' }}"><a href="{{ route('catservice.index') }}"><i class="fa fa-circle-o"></i>Category Service</a></li>
            <li class="{{ (Request::segment(2) == 'other-service') ? 'active' : '' }}"><a href="{{ route('other-service.index') }}"><i class="fa fa-circle-o"></i>Other Service</a></li>
          </ul>
        </li>

        <li class="{{ (Request::segment(2) == 'gallery') ? 'treeview active' : ''}}">
          <a href="{{ route('gallery.index') }}">
            <i class="fa fa-camera"></i> <span>Gallery</span>
          </a>
        </li>

         <li class="{{ (Request::segment(2) == 'about') ? 'treeview active' : ''}}">
          <a href="{{ route('about.index') }}">
            <i class="fa fa-info-circle"></i> <span>About</span>
          </a>
        </li>

         <li class="{{ (Request::segment(2) == 'positionavailables' || Request::segment(2) == 'platforms') ? 'active treeview menu-open' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Career</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::segment(2) == 'positionavailables') ? 'active' : '' }}"><a href="{{ route('positionavailable.index') }}"><i class="fa fa-circle-o"></i>Position Available</a></li>
            <li class="{{ (Request::segment(2) == 'platforms') ? 'active' : '' }}"><a href="{{ route('platforms.index') }}"><i class="fa fa-circle-o"></i>Platforms</a></li>
          </ul>
        </li>

         <li class="{{ ( Request::segment(2) == 'users' || Request::segment(2) == 'roles') ? 'active treeview menu-open' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Manage ACL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::segment(2) == 'users') ? 'active' : '' }}"><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>Manage Users</a></li>
            <li class="{{ (Request::segment(2) == 'roles') ? 'active' : '' }}"><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i>Manage Roles</a></li>
          </ul>
        </li>
        <li class="{{ ( Request::segment(2) == 'sliders' || Request::segment(2) == 'office' || Request::segment(2) == 'works' || Request::segment(2) == 'logo' || Request::segment(2) == 'platforms' || Request::segment(2) == 'team') ? 'active treeview menu-open' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-globe"></i>
            <span>Website Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::segment(2) == 'sliders') ? 'active' : '' }}"><a href="{{ route('sliders.index') }}"><i class="fa fa-circle-o"></i>Sliders</a></li>
            <li class="{{ (Request::segment(2) == 'office') ? 'active' : '' }}"><a href="{{ route('office.index') }}"><i class="fa fa-circle-o"></i>Office Address</a></li>
            <li class="{{ (Request::segment(2) == 'works') ? 'active' : '' }}"><a href="{{ route('works.index') }}"><i class="fa fa-circle-o"></i>Works</a></li>
            <li class="{{ (Request::segment(2) == 'logo') ? 'active' : '' }}"><a href="{{ route('logo.index') }}"><i class="fa fa-circle-o"></i>Logo</a></li>
            <li class="{{ (Request::segment(2) == 'team') ? 'active' : '' }}"><a href="{{ route('team.index') }}"><i class="fa fa-circle-o"></i>Team</a></li>
          </ul>
        </li>
         <li class="{{ (Request::segment(2) == 'activitylogs') ? 'treeview active' : ''}}">
          <a href="{{ route('activitylogs.index') }}">
            <i class="fa fa-cogs"></i> <span>Logs</span>
          </a>
        </li>
          @endguest
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>  
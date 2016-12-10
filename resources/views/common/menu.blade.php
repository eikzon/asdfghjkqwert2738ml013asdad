<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
    <div class="user-profile">
      <div class="dropdown user-pro-body">
        <div>
          <img src="{{ asset('images/component/sitecontrol/varun.jpg') }}" alt="user-img" class="img-circle">
        </div>
        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrator <span class="caret"></span>
        </a>
        <ul class="dropdown-menu animated flipInY">
          <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
      </div>
    </div>

      <ul class="nav" id="side-menu">
          <li class="sidebar-search hidden-sm hidden-md hidden-lg">
              <div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
      <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
    </span> </div>
          </li>
          <li>
              <div class="hide-menu t-earning">
                <small class="db">Menu Control</small>
              </div>
          </li>
          <li>
            <a href="{{ action('SiteControl\HomeController@index') }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="Q"></i>
              <span class="hide-menu">
                Dashboard
              </span>
            </a>
          </li>
          <li>
            <a href="{{ action('SiteControl\ProductController@index') }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="&#xe001;"></i>
              <span class="hide-menu">
                Product
                <span class="label label-rouded label-custom pull-right"> 1,230 </span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ action('SiteControl\OrderController@index') }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="a"></i>
              <span class="hide-menu">
                Order
                <span class="label label-rouded label-danger pull-right"> 190 </span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ action('SiteControl\MemberController@index') }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="&#xe028;"></i>
              <span class="hide-menu">
                Member
                <span class="label label-rouded label-info pull-right"> 987 </span>
              </span>
            </a>
          </li>
          <li>
              <div class="hide-menu t-earning">
                <small class="db">Optional</small>
              </div>
          </li>
          <li>
            <a href="{{ route('sitecontrol.group.index') }}" class="waves-effect">
              <i class="linea-icon linea-aerrow" data-icon="&#xe078;"></i>
              <span class="hide-menu">
                Product Group
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('sitecontrol.variant.index') }}" class="waves-effect">
              <i class="linea-icon linea-aerrow" data-icon="&#xe078;"></i>
              <span class="hide-menu">
                Variant Product
              </span>
            </a>
          </li>
          <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
      </ul>
  </div>
</div>


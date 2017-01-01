<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
    <div class="user-profile">
      <div class="dropdown user-pro-body">
        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Administrator</strong>
          {{-- <span class="caret"></span> --}}
        </a>
        <ul class="dropdown-menu animated flipInY">
          {{-- <li><a href=""><i class="ti-settings"></i> Account Setting</a></li> --}}
          <li role="separator" class="divider"></li>
          <li>
            <a data-url="{{ route('st-logout') }}" class="action-logout">
              <i class="fa fa-power-off"></i> Logout
            </a>
          </li>
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
            <a href="{{ route('st-home') }}" class="waves-effect">
              <i class="linea-icon linea-ecommerce fa-fw" data-icon="U"></i>
              <span class="hide-menu">
                Dashboard
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('sitecontrol.product.index') }}" class="waves-effect">
              <i class="linea-icon linea-ecommerce fa-fw" data-icon="P"></i>
              <span class="hide-menu">
                Product
                <span class="label label-rouded label-custom pull-right">{{ $count['product'] }}</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ action('SiteControl\OrderController@index') }}" class="waves-effect">
              <i class="linea-icon linea-ecommerce fa-fw" data-icon="A"> </i>
              <span class="hide-menu">
                Order
                <span class="label label-rouded label-danger pull-right">{{ $count['order'] }}</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ action('SiteControl\MemberController@index') }}" class="waves-effect">
              <i class="ti-user fa-fw"></i>
              <span class="hide-menu">
                Member
                <span class="label label-rouded label-info pull-right">{{ $count['member'] }}</span>
              </span>
            </a>
          </li>
          <li>
              <div class="hide-menu t-earning">
                <small class="db">Optional</small>
              </div>
          </li>
          <li>
            <a href="{{ route('sitecontrol.category.index') }}" class="waves-effect">
              <i class="linea-icon linea-aerrow fa-fw" data-icon="&#xe078;"></i>
              <span class="hide-menu">
                Category
                <span class="label label-rouded label-default pull-right">5</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('sitecontrol.group.index') }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="&#xe006;"></i>
              <span class="hide-menu">
                Group SKU
                <span class="label label-rouded label-default pull-right">{{ $count['sku'] }}</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('sitecontrol.variant.index') }}" class="waves-effect">
              <i class="linea-icon linea-music fa-fw" data-icon="m"></i>
              <span class="hide-menu">
                Variant Product
                <span class="label label-rouded label-default pull-right">{{ $count['variant'] }}</span>
              </span>
            </a>
          </li>
          <li>
            <a href="{{ route('sitecontrol.platform.edit', 1) }}" class="waves-effect">
              <i class="linea-icon linea-basic fa-fw" data-icon="&#xe006;"></i>
              <span class="hide-menu">
                Platform Student
              </span>
            </a>
          </li>
          <li>
            <a data-url="{{ route('st-logout') }}" class="action-logout waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a>
          </li>
      </ul>
  </div>
</div>


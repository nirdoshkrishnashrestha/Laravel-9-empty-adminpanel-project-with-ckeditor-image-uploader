<!--		Below Div is for toggle 3 lines and search	-->
<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>  
      <div class="app-header__content">
      
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <ul class="header-menu nav">

                <li class="btn-group nav-item">
                    <a href="{{ url('/') }}" class="nav-link" target="__blank">
                        <i class="nav-link-icon fas fa-home"></i>
                        View Site
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/website-detail') }}" class="nav-link">
                        <i class="nav-link-icon fa fa-tools"></i>
                        Website Details
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/social-media') }}" class="nav-link">
                        <i class="nav-link-icon fas fa-network-wired"></i>
                        Social Media
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/account-setting') }}" class="nav-link">
                        <i class="nav-link-icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
                
                <li class="dropdown nav-item">
                    <a href="{{ url('admin/logout') }}" class="nav-link">                      
                        <i class="nav-link-icon fas fa-power-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
                        </div>
                    </div>
                </div>
            </div>       
         </div>
    </div>
</div> 
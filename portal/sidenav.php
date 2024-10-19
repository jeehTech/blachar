        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="./" class="app-brand-link">
              <img
              class="img-fluid"
              src="../assets/img/bil.png"
              alt=""
              style="width: 15vh;"
            />
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?php if(!isset($_GET['trx_name'])){echo 'active';}?>">
              <a href="./" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <li class="menu-item <?php if(isset($_GET['trx_name']) && ($_GET['trx_name']== 'blachar_admins'||$_GET['trx_name']== 'tamsya_leaders')){echo 'active open';}?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Staff</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?php if(isset($_GET['trx_name']) && $_GET['trx_name']== 'blachar_admins'){echo 'active';}?>">
                  <a href="./?trx_name=blachar_admins" class="menu-link">
                    <div data-i18n="Account">Admins</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item <?php if(isset($_GET['trx_name']) && $_GET['trx_name']== 'account_settings'){echo 'active open';}?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?php if(isset($_GET['trx_name']) && $_GET['trx_name']== 'account_settings'){echo 'active';}?>">
                  <a href="./?trx_name=account_settings" class="menu-link">
                    <div data-i18n="Account">Manage Account</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Services</span>
            </li>
            <li class="menu-item <?php if(isset($_GET['trx_name']) && ($_GET['trx_name']== 'blachar_projects' || $_GET['trx_name']== 'tamsya_programs' || $_GET['trx_name']== 'tamsya_projects' || $_GET['trx_name']== 'tamsya_banners' )){echo 'active open';}?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Authentications">Media</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?php if(isset($_GET['trx_name']) && $_GET['trx_name']== 'blachar_projects'){echo 'active';}?>">
                  <a href="./?trx_name=blachar_projects" class="menu-link">
                    <div data-i18n="Basic">Projects</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a
                href="./process/?logout=true"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->
        
        <!-- Layout container -->
        <div class="layout-page">
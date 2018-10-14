<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ route('showHome') }}/{{ Auth::user()->image }}" class="img-circle" alt="{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu Principal</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Utilisateurs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('showAdminManageUsers') }}"><i class="fa fa-circle-o"></i> Liste</a></li>
                    <li><a href="{{ route('showAdminManagePhotographs') }}"><i class="fa fa-user"></i> Photographes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>Shootings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{ route('showAdminManageShootings') }}"><i class="fa fa-circle-o"></i> Liste </a></li>
                    <li><a href="{{ route('showAdminManageShootingCategories') }}"><i class="fa fa-search"></i> Catégories</a></li>
                </ul>
            </li>
            <li><a href="{{ route('showAdminManageBilling') }}"><i class="fa fa-dollar"></i> Finances</a></li>

            <li><a href="{{ route('showAdminManageLanguages') }}"><i class="fa fa-flag"></i> Langues</a></li>
            <li><a href="{{ route('showAdminManageTools') }}"><i class="fa fa-gears"></i> Matériaux</a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
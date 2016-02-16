<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php print $this->baseUrl('/admin/dashboard'); ?>">
                    <i class="fa fa-dashboard fa-fw"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Account Management<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php print $this->baseUrl('/admin/users'); ?>">Users</a>
                    </li>
                    <li>
                        <a href="<?php print $this->baseUrl('/admin/groups'); ?>">Groups</a>
                    </li>
                    <li>
                        <a href="<?php print $this->baseUrl('/admin/resources'); ?>">Resources</a>
                    </li>
                    <li>
                        <a href="<?php print $this->baseUrl('/admin/account-controls'); ?>">Account Controls</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

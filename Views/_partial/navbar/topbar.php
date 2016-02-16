<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php $this->baseUrl('/admin'); ?>">
        <?php print $this->e($applicationTitle); ?>
    </a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="<?php print $this->baseUrl('/account/profile'); ?>">
                    <i class="fa fa-user fa-fw"></i> <?php print $this->authenticatedUser()->getFullName(); ?>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="<?php print $this->baseUrl('/account/logout'); ?>">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                </a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

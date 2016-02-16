<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <!-- Topbar -->
    <?php $this->insert('Admin::_partial/navbar/topbar', ['applicationTitle' => $applicationTitle]); ?>

    <!-- Sidebar -->
    <?php $this->insert('Admin::_partial/navbar/sidebar'); ?>
</nav>

<?php $this->layout('Admin::_layout/default', ['title' => 'Users - List']); ?>

<form class="form-horizontal" method="post" role="form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-filter fa-fw"></i> Filter
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-sm" name="username" value="<?php print $filters->get('username', ''); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-sm" name="email" value="<?php print $filters->get('email', ''); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-sm" name="name" value="<?php print $filters->get('name', ''); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="state">State</label>
                <div class="col-sm-10">
                    <select name="state">
                        <option value="">[ select one ]</option>
                        <?php foreach ($states as $key => $state): ?>
                            <option value="<?php print $key; ?>" <?php print $filters->get('state') == $key ? 'selected' : '' ?>><?php print $state; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="formAction" value="filter">submit</button>
                    <button type="submit" class="btn btn-default" name="formAction" value="reset">reset</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>State</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($paginator as $user): ?>
                <tr>
                    <td><?php print ++$no; ?></td>
                    <td><?php print $user->getUsername(); ?></td>
                    <td><?php print $user->getEmail(); ?></td>
                    <td><?php print $user->getFirstName(); ?></td>
                    <td><?php print $user->getMiddleName(); ?></td>
                    <td><?php print $user->getLastName(); ?></td>
                    <td><?php print $user->getState(true); ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->insert('Admin::_partial/pagination', ['paginator' => $paginator]); ?>

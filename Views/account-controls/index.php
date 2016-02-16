<?php $this->layout('Admin::_layout/default', ['title' => 'Account Controls - List']); ?>

<form class="form-horizontal" method="post" role="form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-filter fa-fw"></i> Filter
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-sm-2" for="resource">Resource</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control input-sm" name="resource" value="<?php print $filters->get('resource', ''); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="group">Group</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="group" value="<?php print $filters->get('group', ''); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="user">User</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control input-sm" name="user" value="<?php print $filters->get('user', ''); ?>" />
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
                <th>Resource</th>
                <th>Action</th>
                <th>User</th>
                <th>Group</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($paginator->count() > 0): ?>
                <?php $no = 0; ?>
                <?php foreach ($paginator as $accountControl): ?>
                    <tr>
                        <td><?php print ++$no; ?></td>
                        <td><?php print $accountControl->getResource()->getName(); ?></td>
                        <td><?php print $accountControl->getAction(); ?></td>
                        <td><?php print ($accountControl->getUser()) ? $accountControl->getUser()->getUserame() : ''; ?></td>
                        <td><?php print ($accountControl->getGroup()) ? $accountControl->getGroup()->getCode() : ''; ?></td>
                        <td><?php
                            print ($accountControl->isAuthorized())
                                ? '<span class="text-success">authorized</span>'
                                : '<span class="text-danger">blocked</span>'
                            ;
                        ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="0">Empty data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $this->insert('Admin::_partial/pagination', ['paginator' => $paginator]); ?>

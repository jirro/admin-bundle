<?php $this->layout('Admin::_layout/default', ['title' => 'Resources - List']); ?>

<form class="form-horizontal" method="post" role="form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-filter fa-fw"></i> Filter
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control input-sm" name="name" value="<?php print $filters->get('name', ''); ?>" />
                </div>
            </div>
        </div>
        <div class="panel-footer">
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
                <th>Name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($paginator as $resource): ?>
                <tr>
                    <td><?php print ++$no; ?></td>
                    <td><?php print $resource->getName(); ?></td>
                    <td><?php print $resource->getDescription(); ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->insert('Admin::_partial/pagination', ['paginator' => $paginator]); ?>

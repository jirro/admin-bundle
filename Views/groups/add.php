<?php $this->layout('Admin::_layout/default', ['title' => 'Groups - Add']); ?>

<form class="form-horizontal" role="form" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="code">Code</label>
        <div class="col-lg-3 col-sm-6">
            <input type="text" class="form-control" name="code" maxlength="10" />
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" />
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description"></textarea>
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
            <button
                type="button"
                class="btn btn-default"
                onclick="javascript:document.location.href = '<?php print $this->request()->getBasePath() . '/admin/groups'; ?>'"
            >
                Cancel
            </button>
        </div>
    </div>
</form>
</div>

<?php $this->layout('Admin::_layout/default', ['title' => 'Exception']); ?>
<div class="text-center">
    <h3>
    <?php
        if (isset($message)) {
            print $message;
        } else {
            print 'You are not allowed to access this page!';
        }
    ?>
    </h3>
</div>

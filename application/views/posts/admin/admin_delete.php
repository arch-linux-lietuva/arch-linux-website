<?php echo form_open('/posts/admin_delete'); ?>
<?php echo form_hidden('id', $id) ?>

<p>Patvirtinkite pašalinimą</p>

<p>
<?php echo form_submit('submit', 'Submit') ?>
</p>

<?php echo form_close(); ?>

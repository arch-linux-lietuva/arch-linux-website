<?php echo form_open('/users/register'); ?>

<p>
<label for="username">Vartotojo vardas</label>
<br />
<?php echo form_input('username'); ?>
</p>

<p>
<label for="password">Vartotojo slaptažodis</label>
<br />
<?php echo form_password('password') ?>
</p>

<p>
<?php echo form_submit('submit', 'Submit'); ?>
</p>

<?php echo form_close() ?>

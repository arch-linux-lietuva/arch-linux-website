<?php 
if ( isset ( $message ) ):
?>
<p>
<?php echo $message ?>
</p>

<?php endif; ?>

<?php echo form_open('/users/login'); ?>

<p>
<label for="">Vartotojo vardas: </label>
<br />
<?php echo form_input('username'); ?>
</p>

<p>
<label for="password">Slaptažodis</label>
<br />
<?php echo form_password('password'); ?>
</p>

<p>
<?php echo form_submit('submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>

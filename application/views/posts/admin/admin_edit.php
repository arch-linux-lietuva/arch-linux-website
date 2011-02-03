<?php
if ( isset ( $post ) )
{
	echo form_open('/posts/admin_edit');
}
else
{
	echo form_open('/posts/admin_add');
}
?>

<?php
if ( isset ( $post ) )
{
	echo form_hidden('id', $post->id );
}
?>

<p>
<label for="title">Antraštė</label>
<br />
<?php 
if ( isset( $post ) )
{
	echo form_input('title', $post->title); 
}
else
{
	echo form_input('title');
}
?>
</p>

<p>
<label for="body">Turinys</label>
<br />
<?php 
if ( isset ( $post ) )
{
	echo form_textarea('body', $post->body); 
}
else
{
	echo form_textarea('body');
}
?>
</p>
</p>
<label for="publish">Paskelbti</label>
<br />
<?php 
if ( isset ( $post ) )
{
	echo form_checkbox('publish', '1', $post->publish);
}
else
{
	echo form_checkbox('publish', '1');
}
?>
</p>

<p>
<?php echo form_submit('submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>

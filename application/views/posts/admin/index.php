
<table>
	<tr>
		<th>Id</th>
		<th>Pubished</th>
		<th>Title</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ( $posts as $post ): ?>
	<tr>
		<td><?php echo $post->id ?></td>
		<td><?php echo $post->publish ?></td>
		<td><?php echo $post->title ?></td>
		<td><?php echo anchor('/posts/admin_view/?id='.$post->id, 'view'); ?></td>
		<td><?php echo anchor('/posts/admin_edit/?id='.$post->id, 'edit'); ?></td>
		<td><?php echo anchor('/posts/admin_delete/?id='.$post->id, 'delete'); ?></td>
	</tr>
	<?php endforeach; ?>

</table>

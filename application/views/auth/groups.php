<?php $this->load->view('header'); ?>

<div class="container">
	
	<h1>Groups <small>The list of the groups</small>
		<a href="<?php echo site_url('auth/create_group'); ?>" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Create Group</a>
	</h1>

	<?php if($message): ?>
	<div class="alert alert-info">
		<?php echo $message; ?>
	</div>
	<?php endif; ?>

	<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>Group Name</th>
			<th>Description</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($groups as $group):?>
		<tr>
			<td><?php echo $group->name;?></td>
			<td><?php echo $group->description;?></td>
			<td>
				<div class="pull-right">
				<?php echo anchor("auth/edit_group/".$group->id, '<i class="glyphicon glyphicon-edit"></i> Edit', 'class="btn btn-xs btn-warning"') ;?>
				<?php if(!in_array($group->id, array(1,2))): ?>
				<?php echo anchor("auth/delete_group/".$group->id, '<i class="glyphicon glyphicon-remove"></i> Delete', 'class="btn btn-xs btn-danger" onclick="return confirm(\'Are you sure want to delete this?\')"') ;?>
				<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>

</div>
<?php $this->load->view('footer'); ?>
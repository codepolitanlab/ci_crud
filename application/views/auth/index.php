<?php $this->load->view('header'); ?>

<div class="container">
	
	<h1><?php echo lang('index_heading');?> <small><?php echo lang('index_subheading');?></small>
		<a href="<?php echo site_url('auth/create_user'); ?>" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Create User</a>
	</h1>

	<?php if($message): ?>
	<div class="alert alert-info">
		<?php echo $message; ?>
	</div>
	<?php endif; ?>

	<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th><?php echo lang('index_fname_th');?></th>
			<th><?php echo lang('index_lname_th');?></th>
			<th><?php echo lang('index_email_th');?></th>
			<th><?php echo lang('index_groups_th');?></th>
			<th><?php echo lang('index_status_th');?></th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
				<span class="label label-default"><?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?> </span> &nbsp;
				<?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td>
				<div class="pull-right">
				<?php echo anchor("auth/edit_user/".$user->id, '<i class="glyphicon glyphicon-edit"></i> Edit', 'class="btn btn-xs btn-warning"') ;?>
				<?php if($user->id != 1): ?>
				<?php echo anchor("auth/delete_user/".$user->id, '<i class="glyphicon glyphicon-remove"></i> Delete', 'class="btn btn-xs btn-danger" onclick="return confirm(\'Are you sure want to delete this?\')"') ;?>
				<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>

</div>
<?php $this->load->view('footer'); ?>
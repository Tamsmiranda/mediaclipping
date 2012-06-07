<div class="subjects view">
<h2><?php  __('Subject');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subject['Subject']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subject', true), array('action' => 'edit', $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subject', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clipps', true), array('controller' => 'clipps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clipp', true), array('controller' => 'clipps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Clipps');?></h3>
	<?php if (!empty($subject['Clipp'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Publish Date'); ?></th>
		<th><?php __('Resume'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Evaluation Id'); ?></th>
		<th><?php __('Status Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created By'); ?></th>
		<th><?php __('Modified By'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Publisher Type Id'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subject['Clipp'] as $clipp):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $clipp['id'];?></td>
			<td><?php echo $clipp['title'];?></td>
			<td><?php echo $clipp['publish_date'];?></td>
			<td><?php echo $clipp['resume'];?></td>
			<td><?php echo $clipp['content'];?></td>
			<td><?php echo $clipp['evaluation_id'];?></td>
			<td><?php echo $clipp['status_id'];?></td>
			<td><?php echo $clipp['created'];?></td>
			<td><?php echo $clipp['modified'];?></td>
			<td><?php echo $clipp['created_by'];?></td>
			<td><?php echo $clipp['modified_by'];?></td>
			<td><?php echo $clipp['customer_id'];?></td>
			<td><?php echo $clipp['publisher_type_id'];?></td>
			<td><?php echo $clipp['publisher_id'];?></td>
			<td><?php echo $clipp['section_id'];?></td>
			<td><?php echo $clipp['subject_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'clipps', 'action' => 'view', $clipp['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'clipps', 'action' => 'edit', $clipp['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'clipps', 'action' => 'delete', $clipp['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clipp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clipp', true), array('controller' => 'clipps', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

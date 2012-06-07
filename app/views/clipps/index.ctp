<div class="clipps index">
	<h2><?php __('Clipps');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('publish_date');?></th>
			<th><?php echo $this->Paginator->sort('resume');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('evaluation_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('publisher_type_id');?></th>
			<th><?php echo $this->Paginator->sort('publisher_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('subject_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($clipps as $clipp):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $clipp['Clipp']['id']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['title']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['publish_date']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['resume']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['content']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clipp['Evaluation']['name'], array('controller' => 'evaluations', 'action' => 'view', $clipp['Evaluation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clipp['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $clipp['Status']['id'])); ?>
		</td>
		<td><?php echo $clipp['Clipp']['created']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['modified']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['created_by']; ?>&nbsp;</td>
		<td><?php echo $clipp['Clipp']['modified_by']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clipp['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $clipp['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clipp['PublisherType']['name'], array('controller' => 'publisher_types', 'action' => 'view', $clipp['PublisherType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clipp['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $clipp['Publisher']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clipp['Section']['name'], array('controller' => 'sections', 'action' => 'view', $clipp['Section']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clipp['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $clipp['Subject']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $clipp['Clipp']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $clipp['Clipp']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $clipp['Clipp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clipp['Clipp']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Clipp', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publisher Types', true), array('controller' => 'publisher_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher Type', true), array('controller' => 'publisher_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
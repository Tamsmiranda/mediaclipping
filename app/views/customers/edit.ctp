<div class="customers form">
<?php echo $this->Form->create('Customer');?>
	<fieldset>
		<legend><?php __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Customer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clipps', true), array('controller' => 'clipps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clipp', true), array('controller' => 'clipps', 'action' => 'add')); ?> </li>
	</ul>
</div>
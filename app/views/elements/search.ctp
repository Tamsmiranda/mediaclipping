<div id="busca">
<h2> Busca</h2><!-- Search Form -->
	<?php echo $this->Form->create('Clipps',array('type' => 'get','url'=>array('action'=>'index','plugin'=>'clipping')));?>
	<?php
		
		echo $this->Form->input('title');
		//echo $this->Form->input('status_id',array('empty'=>__('Select', true)));
		//echo $this->Form->input('customer_id',array('empty'=>__('Select', true)));
		echo $this->Form->input('publisher_type_id',array('empty'=>__('Select', true)));
		echo $this->Form->input('publisher_id',array('empty'=>__('Select', true)));
		echo $this->Form->input('subject_id',array('empty'=>__('Select', true)));
		echo $this->Form->input(
			'start_date',
			array(
				'dateFormat'=>'DMY',
				//'timeFormat'=>'NONE',
				'type' => 'date',
				'selected'=>strtotime('-1 month'),
				));
		echo $this->Form->input('end_date',array('type'=>'date','dateFormat' => 'DMY','type' => 'date', 'selected'=>strtotime('1 day')));
	?>
	<?php echo $this->Form->end(__('Submit', true));?>
	<!-- Search Form -->
</div>
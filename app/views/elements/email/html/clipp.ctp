<div class="clipps view">
<a style="text-decoration:none;color:#333333" href="http://extranet.rttvclipping.com.br<?php echo $this->Html->url(array('admin' => false,'plugin'=>'clipping','controller'=>'clipps','action'=>'view',$clipp['Clipp']['id']));?>">
<p><?php echo $clipp['Clipp']['title']; ?><br />
</a>
<a style="text-decoration:none;color:#999999" href="http://extranet.rttvclipping.com.br<?php echo $this->Html->url(array('admin' => false,'plugin'=>'clipping','controller'=>'clipps','action'=>'view',$clipp['Clipp']['id']));?>">
	  <?php $i = 0; $class = ' class="altrow"';?>
	<?php echo $clipp['Publisher']['name']; ?>&nbsp;-&nbsp;
	<?php echo $clipp['Section']['name']; ?>&nbsp;-&nbsp;
	<?php echo $clipp['PublisherType']['name']; ?>&nbsp;-&nbsp;
	<?php // Impresso ?>				
	<?php if ($clipp['Publisher']['publisher_type_id'] == '4e64fc9f-9c14-4d75-9f7b-1260737253ea') : ?>
		<strong>Páginas :&nbsp;</strong><?php echo $clipp['Clipp']['observation']; ?>&nbsp;-&nbsp;
	<?php endif; ?>
	<?php // Televisão ?>				
		<?php if ($clipp['Publisher']['publisher_type_id'] == '4e64fcca-5014-4d13-b2fb-1260737253ea') : ?>
			<strong>Duração :&nbsp;</strong><?php echo $clipp['Clipp']['observation']; ?>&nbsp;-&nbsp;
		<?php endif; ?>
    <?php echo date('d/m/Y',strtotime($clipp['Clipp']['publish_date']));?>&nbsp;-&nbsp;
    <?php echo $clipp['Section']['name']; ?>
</p>
</a>
</div>
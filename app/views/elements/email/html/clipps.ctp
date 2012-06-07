<?php foreach ($clipp as $oneclipp) : ?>
<div class="clipps view">
<a style="text-decoration:none;color:#333333" href="http://extranet.rttvclipping.com.br<?php echo $this->Html->url(array('admin' => false,'plugin'=>'clipping','controller'=>'clipps','action'=>'view',$oneclipp['Clipp']['id']));?>">
<p><?php echo $oneclipp['Clipp']['title']; ?><br />
</a>
<a style="text-decoration:none;color:#999999" href="http://extranet.rttvclipping.com.br<?php echo $this->Html->url(array('admin' => false,'plugin'=>'clipping','controller'=>'clipps','action'=>'view',$oneclipp['Clipp']['id']));?>">
	  <?php $i = 0; $class = ' class="altrow"';?>
	<?php echo $oneclipp['Publisher']['name']; ?>&nbsp;-&nbsp;
	<?php echo $oneclipp['Section']['name']; ?>&nbsp;-&nbsp;
	<?php echo $oneclipp['PublisherType']['name']; ?>&nbsp;-&nbsp;
	<?php // Impresso ?>				
	<?php if ($oneclipp['Publisher']['publisher_type_id'] == '4e64fc9f-9c14-4d75-9f7b-1260737253ea') : ?>
		<strong>Páginas :&nbsp;</strong><?php echo $oneclipp['Clipp']['observation']; ?>&nbsp;-&nbsp;
	<?php endif; ?>
	<?php // Televisão ?>				
		<?php if ($oneclipp['Publisher']['publisher_type_id'] == '4e64fcca-5014-4d13-b2fb-1260737253ea') : ?>
			<strong>Duração :&nbsp;</strong><?php echo $oneclipp['Clipp']['observation']; ?>&nbsp;-&nbsp;
		<?php endif; ?>
    <?php echo date('d/m/Y',strtotime($oneclipp['Clipp']['publish_date']));?>&nbsp;-&nbsp;
    <?php echo $oneclipp['Section']['name']; ?>
</p>
</a>
</div>
<?php endforeach ?>
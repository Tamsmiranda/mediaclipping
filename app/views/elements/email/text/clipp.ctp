<?php  __('Clipp');?> - <?php echo $clipp['Clipp']['title']; ?>
<?php __('Publish Date'); ?>:<?php echo $clipp['Clipp']['publish_date']; ?>
<?php __('Content'); ?>:<br /><?php echo $clipp['Clipp']['content']; ?>
<?php __('Evaluation'); ?>:<?php echo $clipp['Evaluation']['name']; ?>
<?php __('Status'); ?>:<?php echo $clipp['Status']['name']; ?>
<?php __('Publisher Type'); ?>:<?php echo $clipp['PublisherType']['name']; ?>
<?php __('Publisher'); ?>:<?php echo $clipp['Publisher']['name']; ?>
<?php __('Section'); ?>:<?php echo $clipp['Section']['name']; ?>
<?php __('Subject'); ?>:<?php echo $clipp['Subject']['name']; ?>
O Clipp completo pode ser visualizado em:<?php echo $this->Html->url(array('admin'=>false,'plugin'=>'clipping','controller'=>'clipps','action'=>'view',$clipp['Clipp']['id']),true);?>
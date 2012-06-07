<div class="users2">
<?php
		$customer = $this->requestAction('/clipping/customers/set_logo');
		if ($customer['Customer']['picture']) {
		?><div style="height:90px;width:300px;float:left;padding:5px;">
			<img style="float:left" src="<?php echo $this->Html->url('/',true)?>files/customer/<?php echo $customer['Customer']['picture'];?>"/>
			</div>
		<?php
		} ?>
	<h2>Acesso ao sistema</h2>
<?php
		echo sprintf(__("Você está logado como: %s", true), $this->Session->read('Auth.User.username'));
		echo ' <span>|</span> ';
		echo $this->Html->link(__("Sair", true), array('plugin' => null, 'controller' => 'users', 'action' => 'logout'));
	?>
</div>
<div style="clear:both"></div>
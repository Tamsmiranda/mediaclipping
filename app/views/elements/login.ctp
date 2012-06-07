<div class="users form">
	<div style="height:90px;width:300px;float:left;padding:5px;">
	</div>
    <h2>Acesso ao sistema</h2>
    <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'),'id'=>'login_form'));?>
        <fieldset>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
        </fieldset>
    <?php echo $this->Form->end('Entrar');?>
</div><div style="clear:both"></div>
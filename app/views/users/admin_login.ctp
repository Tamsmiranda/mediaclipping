<div class="users form">
    <div id="logotipo">
<img src="<?php	echo $this->webroot . DS . 'img' . DS. 'logotype2.png'; ?>" border="0" />
</div>

    <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
        <fieldset>
        <?php
            echo $this->Form->input('username',array('label'=>'Usuário'));
            echo $this->Form->input('password',array('label'=>'Senha'));
        ?>
        </fieldset>
    <div style="clear:both"></div><?php echo $this->Form->end(__('Submit',true));?><div style="clear:both"></div>
</div><div style="clear:both"></div>



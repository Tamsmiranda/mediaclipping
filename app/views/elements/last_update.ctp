<?php
$lastnews = $this->requestAction('/clipping/clipps/last_update');
?>
<div class="block-body">
<p id="tituloAtualizacoes">Últimas Atualizações</p>
<ul>
<?php foreach ($lastnews as $news): ?>
<li><p><span class=textoAtualizacoes><?php echo $news['Clipp']['publish_date'];?><br /><?php echo $news['Clipp']['title'];?></span></p>
<?php endforeach;?>
</ul>
</div>
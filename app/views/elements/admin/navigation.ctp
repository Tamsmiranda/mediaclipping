<div id="nav">
    <ul class="sf-menu">
		<!--
        <li>
            <?php //echo $this->Html->link(__('Content', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?>
			<ul>
                <li><?php //echo $this->Html->link(__('List', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'index')); ?></li>
                <li>
                    <?php //echo $this->Html->link(__('Create', true), array('plugin' => null, 'controller' => 'nodes', 'action' => 'create')); ?>
                    <ul>
                        <?php //foreach ($types_for_admin_layout AS $t) { ?>
                        <li><?php //echo $this->Html->link($t['Type']['title'], array('plugin' => null, 'controller' => 'nodes', 'action' => 'add', $t['Type']['alias'])); ?></li>
                        <?php //} ?>
                    </ul>
                </li>
                <li><?php //echo $this->Html->link(__('Content types', true), array('plugin' => null, 'controller' => 'types', 'action' => 'index')); ?></li>
                <li>
                    <?php //echo $this->Html->link(__('Taxonomy', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'index')); ?>
                    <ul>
                        <li><?php //echo $this->Html->link(__('List', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'index')); ?></li>
                        <li><?php //echo $this->Html->link(__('Add new', true), array('plugin' => null, 'controller' => 'vocabularies', 'action' => 'add'), array('class' => 'separator')); ?></li>
                        <?php //foreach ($vocabularies_for_admin_layout AS $v) { ?>
                        <li><?php //echo $this->Html->link($v['Vocabulary']['title'], array('plugin' => null, 'controller' => 'terms', 'action' => 'index', $v['Vocabulary']['id'])); ?></li>
                        <?php //} ?>
                    </ul>
                </li>
                <li>
                    <?php //echo $this->Html->link(__('Comments', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index')); ?>
                    <ul>
                        <li><?php //echo $this->Html->link(__('Published', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index', 'filter' => 'status:1;')); ?></li>
                        <li><?php //echo $this->Html->link(__('Approval', true), array('plugin' => null, 'controller' => 'comments', 'action' => 'index', 'filter' => 'status:0;')); ?></li>
                    </ul>
                </li>
            </ul>
        </li> -->
		<!--
        <li>
            <?php //echo $this->Html->link(__('Menus', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'index')); ?>
            <ul>
                <li><?php //echo $this->Html->link(__('Menus', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('Add new', true), array('plugin' => null, 'controller' => 'menus', 'action' => 'add'), array('class' => 'separator')); ?></li>
                <?php //foreach ($menus_for_admin_layout AS $m) { ?>
                <li><?php //echo $this->Html->link($m['Menu']['title'], array('plugin' => null, 'controller' => 'links', 'action' => 'index', $m['Menu']['id'])); ?></li>
                <?php //} ?>
            </ul>
        </li>
		-->
		<!--
        <li>
            <?php //echo $this->Html->link(__('Blocks', true), array('plugin' => null, 'controller' => 'blocks', 'action' => 'index')); ?>
            <ul>
                <li><?php //echo $this->Html->link(__('Blocks', true), array('plugin' => null, 'controller' => 'blocks', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('Regions', true), array('plugin' => null, 'controller' => 'regions', 'action' => 'index')); ?></li>
            </ul>
        </li>
		-->
		<li><a href="#"  class="sf-with-ul">Cadastro<span class="sf-sub-indicator"> »</span></a>
			<ul>
		        <li>
					<?php echo $this->Html->link(__('Users', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?>
					<ul>
						<li><?php echo $this->Html->link(__('Users', true), array('plugin' => null, 'controller' => 'users', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Roles', true), array('plugin' => null, 'controller' => 'roles', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Permissions', true), array('plugin' => 'acl', 'controller' => 'acl_permissions', 'action' => 'index')); ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link(__('Clipps',true),array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Customers',true),array('plugin' => 'clipping', 'controller' => 'customers', 'action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Publishers',true),array('plugin' => 'clipping', 'controller' => 'publishers', 'action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Sections',true),array('plugin' => 'clipping', 'controller' => 'sections', 'action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Subjects',true),array('plugin' => 'clipping', 'controller' => 'subjects', 'action' => 'index'));?></li>
				<li><?php echo $this->Html->link(__('Outros',true),array('#'));?>
				<ul>
					<li><?php echo $this->Html->link(__('Status',true),array('plugin' => 'clipping', 'controller' => 'statuses', 'action' => 'index'));?></li>	
					<li><?php echo $this->Html->link(__('Evaluations',true),array('plugin' => 'clipping', 'controller' => 'evaluations', 'action' => 'index'));?></li>
				</ul>
				</li>
			</ul>
		</li>
		<li><a href="#"  class="sf-with-ul">Publicações<span class="sf-sub-indicator"> »</span></a>
			<ul>
				<li><?php echo $this->Html->link('Impresso',array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'add','publisher_type_id'=>'4e64fc9f-9c14-4d75-9f7b-1260737253ea'));?></li>
				<li><?php echo $this->Html->link('Televisão',array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'add','publisher_type_id'=>'4e64fcca-5014-4d13-b2fb-1260737253ea'));?></li>
				<li><?php echo $this->Html->link('Radio',array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'add','publisher_type_id'=>'4e64fcc2-4698-40e8-ac45-1260737253ea'));?></li>
				<li><?php echo $this->Html->link('Web',array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'add','publisher_type_id'=>'4e64fcab-94c4-4403-8480-1260737253ea'));?></li>
				<li><?php echo $this->Html->link('Relatório',array('plugin' => 'clipping', 'controller' => 'clipps', 'action' => 'add','publisher_type_id'=>'4e70ab99-f600-4db6-90c6-7b8bbb2dd26c'));?></li>
			</ul>
		</li>
		<li><a href="#"  class="sf-with-ul">Estatísticas<span class="sf-sub-indicator"> »</span></a>
			<ul>
				<li><?php echo $this->Html->link('Acessos',array('plugin' => 'clipping', 'controller' => 'logins', 'action' => 'index'));?></li>
			</ul>
		</li>
		<!--
        <li>
            <?php //echo $this->Html->link(__('Extensions', true), array('plugin' => 'extensions', 'controller' => 'extensions_plugins', 'action' => 'index')); ?>
            <ul>
                <li><?php //echo $this->Html->link(__('Themes', true), array('plugin' => 'extensions', 'controller' => 'extensions_themes', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('Locales', true), array('plugin' => 'extensions', 'controller' => 'extensions_locales', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('Plugins', true), array('plugin' => 'extensions', 'controller' => 'extensions_plugins', 'action' => 'index'), array('class' => Configure::read('Admin.menus') ? 'separator' : '', 'escape' => false)); ?></li>
                <?php
                //if (Configure::read('Admin.menus')) {
                   // foreach (array_keys(Configure::read('Admin.menus')) AS $p) {
                      //  echo '<li>';
                       // echo $this->element('admin_menu', array('plugin' => $p));
                       // echo '</li>';
                //    }
               // }
                ?>
            </ul>
        </li>
		-->
		<!--
        <li>
            <?php //echo $this->Html->link(__('Media', true), array('plugin' => null, 'controller' => 'attachments', 'action' => 'index')); ?>
            <ul>
                <li><?php //echo $this->Html->link(__('Attachments', true), array('plugin' => null, 'controller' => 'attachments', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('File Manager', true), array('plugin' => null, 'controller' => 'filemanager', 'action' => 'index')); ?></li>
            </ul>
        </li>
		-->
		<!--
        <li>
            <?php //echo $this->Html->link(__('Contacts', true), array('plugin' => null, 'controller' => 'contacts', 'action' => 'index')); ?>
            <ul>
                <li><?php //echo $this->Html->link(__('Contacts', true), array('plugin' => null, 'controller' => 'contacts', 'action' => 'index')); ?></li>
                <li><?php //echo $this->Html->link(__('Messages', true), array('plugin' => null, 'controller' => 'messages', 'action' => 'index')); ?></li>
            </ul>
        </li>
		-->
		<!--
        <li>
            <?php echo $this->Html->link(__('Settings', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Site')); ?>
            <ul>
                <li><?php echo $this->Html->link(__('Site', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Site')); ?></li>
                <li><?php echo $this->Html->link(__('Meta', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Meta')); ?></li>
                <li><?php echo $this->Html->link(__('Reading', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Reading')); ?></li>
                <li><?php echo $this->Html->link(__('Writing', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Writing')); ?></li>
                <li><?php echo $this->Html->link(__('Comment', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Comment')); ?></li>
                <li><?php echo $this->Html->link(__('Service', true), array('plugin' => null, 'controller' => 'settings', 'action' => 'prefix', 'Service')); ?></li>
                <li><?php echo $this->Html->link(__('Languages', true), array('plugin' => null, 'controller' => 'languages', 'action' => 'index')); ?></li>
            </ul>
        </li>
		-->
    </ul>
</div>
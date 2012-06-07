<?php
/**
 * Default Theme for Croogo CMS
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link http://www.croogo.org
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
    <?php
        echo $this->Layout->meta();
        echo $this->Layout->feed();
        echo $this->Html->css(array(
            'reset',
            '960',
            'theme',
        ));
        echo $this->Layout->js();
        echo $this->Html->script(array(
            'jquery/jquery.min',
            'jquery/jquery.hoverIntent.minified',
            'jquery/superfish',
            'jquery/supersubs',
            'theme',
        ));
        echo $scripts_for_layout;
    ?>
</head>
<body>
    <div id="wrapper">
        <div id="header" class="container_16">
            <div class="grid_4">
               <h1 class="site-title"><span class="site-tagline"><img src="<?php	echo $this->webroot .'img' . DS. 'logotype.png'; ?>" alt="" /></span>                </h1>
            </div>
			<div class="grid_12">
				<?php echo $this->Layout->blocks('header'); ?>
			</div>
            <div class="clear"></div>
        </div>
		<div id="nav">
            <div class="container_16">
                <?php echo $this->Layout->menu('main', array('dropdown' => true)); ?>
            </div>
        </div>
<div id="banner"><img src="<?php echo $this->webroot . 'img' . DS. 'slider.png'; ?>" alt="" width="960" height="300" /></div>
        <div id="main" class="container_16">
            <div id="content" class="grid_11">
			<br />
            <?php
                $this->Layout->sessionFlash();
                echo $content_for_layout;
            ?>
            </div>
<div id="sidebar" class="grid_5"><?php echo $this->Layout->blocks('right'); ?></div>
            <div class="clear"></div>
        </div><div class="clear"></div>        <div id="footer">
            <div class="container_16">
                <div class="grid_8 left" style="color:#FFF; font-family:Verdana, Geneva, sans-serif">
                    Powered by <a style="color:#FFF" href="http://www.h8si.com.br">H8 - Soluções Inteligentes</a>.
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    </body>
</html>

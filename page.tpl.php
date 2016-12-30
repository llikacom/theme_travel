- Insertar logo con enlace a HOME
<?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
<?php endif; ?>
- Insertar menu
<?php if ($main_menu): ?>
    <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('list-inline', 'clearfix'),
            ),
            'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
            ),
        )); ?>
    </div> <!-- /#main-menu -->
<?php endif; ?>
- Render a region
<?php print render($page['region_name']); ?>
- Mensaje de Drupal
<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
    <?php print $messages; ?>
    </div></div>
<?php endif; ?>
- Insertar breadcrumb
<?php if ($breadcrumb): ?>
    <?php print $breadcrumb; ?>
<?php endif; ?>
- Insertar titulo, tabs, contenido
<?php print render($title_prefix); ?>
<?php if ($title): ?>
<h1 class="title"><span class="line-center"><?php print $title; ?></span></h1>
<?php endif; ?>
<?php print render($title_suffix); ?>
<?php if ($tabs): ?>
<div class="tabs"><?php print render($tabs); ?></div>
<?php endif; ?>
<?php print render($page['content']); ?>

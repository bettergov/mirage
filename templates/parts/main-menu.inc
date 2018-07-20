<?php
/**
 * @file
 * Returns the main menu HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="layout-swap__top layout-3col__full">

      <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-menu" tabindex="-1">Back to top</a>

      <?php if ($main_menu): ?>
        <nav class="main-menu" role="navigation">
          <?php
// This code snippet is hard to modify. We recommend turning off the
// "Main menu" on your sub-theme's settings form, deleting this PHP
// code block, and, instead, using the "Menu block" module.
// @see https://drupal.org/project/menu_block
print theme('links__system_main_menu', array(
    'links' => $main_menu,
    'attributes' => array(
        'class' => array('navbar', 'clearfix'),
    ),
    'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('visually-hidden'),
    ),
));?>
        </nav>
      <?php endif;?>

      <?php print render($page['navigation']);?>

    </div>
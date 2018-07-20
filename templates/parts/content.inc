<?php
/**
 * @file
 * Returns the main content HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<main class="<?php print $content_class;?>" role="main">
  <?php print render($page['highlighted']);?>
  <?php //print $breadcrumb;?>
  <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to top</a>
  <?php print render($title_prefix);?>
  <?php if (!$node && $title): ?>
    <h1><?php print $title;?></h1>
  <?php endif;?>
  <?php print render($page['content']);?>
  <?php print $feed_icons;?>
</main>
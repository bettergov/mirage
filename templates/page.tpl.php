<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<?php include 'parts/header.inc.php';?>

<div class="layout-center">

  <div class="layout-3col layout-swap">

    <?php
// Render the sidebars to see if there's anything in them.
$sidebar_first = render($page['sidebar_first']);
$sidebar_second = render($page['sidebar_second']);
// Decide on layout classes by checking if sidebars have content.
$content_class = 'layout-3col__full';
$sidebar_first_class = $sidebar_second_class = '';
if ($sidebar_first && $sidebar_second):
    $content_class = 'layout-3col__right-content';
    $sidebar_first_class = 'layout-3col__first-left-sidebar';
    $sidebar_second_class = 'layout-3col__second-left-sidebar';
elseif ($sidebar_second):
    $content_class = 'layout-3col__left-content';
    $sidebar_second_class = 'layout-3col__right-sidebar';
elseif ($sidebar_first):
    $content_class = 'layout-3col__right-content';
    $sidebar_first_class = 'layout-3col__left-sidebar';
endif;
?>

    <?php include 'parts/content.inc.php';?>

    <?php //include 'parts/main-menu.inc.php';?>

    <?php if ($sidebar_first): ?>
      <aside class="<?php print $sidebar_first_class;?>" role="complementary">
        <?php print $sidebar_first;?>
      </aside>
    <?php endif;?>

    <?php if ($sidebar_second): ?>
      <aside class="<?php print $sidebar_second_class;?>" role="complementary">
        <?php print $sidebar_second;?>
      </aside>
    <?php endif;?>

  </div>

  <?php print render($page['footer']);?>

</div>

<?php print render($page['bottom']);?>

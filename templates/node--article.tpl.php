<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="<?php print $classes;?> clearfix node-<?php print $node->nid;?>"<?php print $attributes;?>>

  <?php if ($display_submitted || $unpublished || $preview): ?>
    <header>
      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture;?>
          <?php print $submitted;?>
        </p>
      <?php endif;?>

      <?php if ($unpublished): ?>
        <mark class="watermark"><?php print t('Unpublished');?></mark>
      <?php elseif ($preview): ?>
        <mark class="watermark"><?php print t('Preview');?></mark>
      <?php endif;?>
    </header>
  <?php endif;?>

  <?php
// We hide the comments and links now so that we can render them later.
hide($content['comments']);
hide($content['links']);
?>

<?php if ($title_prefix || $title_suffix): ?>
<?php print render($title_prefix);?>
<?php if (!$page && $title): ?>
  <h2 class="field-title" <?php print $title_attributes;?>><a href="<?php print $node_url;?>"><?php print $title;?></a></h2>
<?php endif;?>
<?php print render($title_suffix);?>
<?php endif;?>

<?php
print render($content);
// print render($content['links']);
// print render($content['comments']);
?>

</article>

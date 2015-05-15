<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="masonryWrapper ideaGroup">
   <div class="column"></div>
    <div class="gutter"></div>
    <?php if (!empty($title)): ?>
      <h3><?php print $title; ?></h3>
    <?php endif; ?>
    <?php foreach ($rows as $id => $row): ?>
      <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' masonryBlock ideaBlock"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
</div>
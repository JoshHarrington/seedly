<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<div class="views-exposed-form seedlyFilter filter-form">
 
  <div class="views-exposed-widgets clearfix">
   
     <span class="collapseBtn">
        <svg class="more">
            <use xlink:href="#_expand-less"></use>  
        </svg>
        <svg class="less"> 
            <use xlink:href="#_expand-more"></use>
        </svg>
      </span>

   
    <?php foreach ($widgets as $id => $widget): ?>
       <h2>
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id; ?>">
            <?php print $widget->label; ?>
          </label>
        <?php endif; ?>
       </h2>
       
       
       <div class="fieldBtnWrap">
           
          <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget fieldBtnWrap-input views-widget-<?php print $id; ?>">
            <?php if (!empty($widget->operator)): ?>
              <div class="views-operator">
                <?php print $widget->operator; ?>
              </div>
            <?php endif; ?>
            <div class="views-widget">
              <?php print $widget->widget; ?>
            </div>
            <?php if (!empty($widget->description)): ?>
              <div class="description">
                <?php print $widget->description; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <?php if (!empty($sort_by)): ?>
          <div class="views-exposed-widget views-widget-sort-by">
            <?php print $sort_by; ?>
          </div>
          <div class="views-exposed-widget views-widget-sort-order">
            <?php print $sort_order; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($items_per_page)): ?>
          <div class="views-exposed-widget views-widget-per-page">
            <?php print $items_per_page; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($offset)): ?>
          <div class="views-exposed-widget views-widget-offset">
            <?php print $offset; ?>
          </div>
        <?php endif; ?>
        <div class="views-exposed-widget fieldBtnWrap-submit views-submit-button">
          <?php print $button; ?>
        </div>
        <?php if (!empty($reset_button)): ?>
          <div class="views-exposed-widget views-reset-button">
            <?php print $reset_button; ?>
          </div>
        <?php endif; ?>
       </div>
  </div>
</div>



<section class="conductCode">
    <h2>Code of conduct</h2>
    <p>When posting on here please bear in mind that this is a place for new ideas and constructive criticism, not abuse. Bluntness is very welcome, just consider people's feelings before posting! Thanks.</p>
    <a href="#na" class="conductBtn">Got it</a>
</section>






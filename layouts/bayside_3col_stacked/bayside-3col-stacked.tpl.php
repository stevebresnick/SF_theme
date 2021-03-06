<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<?php !empty($css_id) ? print '<div id="' . $css_id . '">' : ''; ?>
  <?php if ($content['top']): ?>
      <div class="top-bayside top-region">
				<?php print $content['top']; ?>
      </div>
  <?php endif; ?>
  <?php if ($content['secondary']): ?>
    <div class="row">
      <div class="large-12 columns secondary-region">
        <?php print $content['secondary']; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="large-4 columns left-region">
      <?php print $content['left']; ?>
    </div>
        <div class="large-4 columns center-region">
      <?php print $content['center']; ?>
    </div>
    <div class="large-4 columns right-region">
      <?php print $content['right']; ?>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <div class="bottom-wrapper">
      <div class="row">
        <div class="large-12 columns bottom-region">
  				<?php print $content['bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php !empty($css_id) ? print '</div>' : ''; ?>

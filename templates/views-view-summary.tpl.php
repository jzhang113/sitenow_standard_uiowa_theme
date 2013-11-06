<?php
/**
 * @file views-view-summary.tpl.php
 * Default simple view template to display a list of summary lines
 *
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <ul class="views-summary">
  <?php foreach ($rows as $id => $row): ?>
    <li>
		<a href="<?php print $row->url; ?>"<?php print !empty($row_classes[$id]) ? ' class="'. $row_classes[$id] .'"' : ''; ?>><?php print $row->link; ?>
		<?php if (!empty($options['count'])): ?>
	        <span class="summary-count"><?php print $row->count?></span>
    	<?php endif; ?>
		</a>
    </li>
  <?php endforeach; ?>
  </ul>
</div>

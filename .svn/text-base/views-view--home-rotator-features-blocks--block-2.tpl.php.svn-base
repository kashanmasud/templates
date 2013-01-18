<?php
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<!-- Rotator Block -->
<link rel="stylesheet" href="/sites/default/files/feature_rotator_v2/css/global.css">
<script type="text/javascript" src="/sites/default/files/feature_rotator_v2/js/slides.min.jquery.js"></script>

<script>
jQuery(function(){
	jQuery('#slides').slides({
		container: 'slides-container',
		preload: true,
		preloadImage: '/sites/default/files/feature_rotator_v2/img/loading.gif',
		play: 5000,
		pause: 5000,
		generatePagination: false,
		hoverPause: true,
		effect: 'fade',
        crossfade: true	
	});
});
</script>

<div class="<?php print $classes; ?>" id="dcss2_container">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <div id="slides"> 
  <?php if ($attachment_before): ?>
  		<?php print $attachment_before; ?>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <a href="#" class="prev"><img src="/sites/default/files/feature_rotator_v2/img/arrow-prev.png" alt="Arrow Prev"></a>
	  <a href="#" class="next"><img src="/sites/default/files/feature_rotator_v2/img/arrow-next.png" alt="Arrow Next"></a>
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>
  </div><!-- end slides -->

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>


</div>
<!-- End Rotator Block -->
<?php /* class view */ ?>
<?php

/**
 * @file
 * dc_agency's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php 
	//The line below shows the content array
	//print_r(array_keys($content));
  ?>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php hide($content['title']); ?>	
  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content); Disable default page render
	  print render($content['field_image']); //display agency lead image	    
	  
	  ?>
	  <div class="agency-content fields"> <!-- wrapper div for remaining agency fields in order to float left of image and remove white space under address div.  -->
	  <?php
	  print render($content['field_suite_number']);//display suite number
	  print render($content['field_address']); //display address
	  print render($content['field_office_hours']);//display office hours
	 
	  //provide mailtto link for the email field
	 if (!empty($content['field_email'])){ ?>
	 <div class="field field-name-field-email field-type-text field-label-above">
	 	<div class="field-label">Agency Contact Email:&nbsp;</div>
	 	<div class="field-name-field-email">
	 		<div class="field-item"><a href="mailto:<?php print render($content['field_email'][0]);?>" title="<?php print render($content['field_email'][0]);?>"><?php print render($content['field_email'][0]);?></a></div>
	 	</div>
	 </div>
	<?php 
	 }  
	  print render($content['field_phone']); //display phone
	  print render($content['field_fax']); //display fax
	  print render($content['field_tty']); //display tty

	  ?><br />
	  <?php  
	  print render($content['field_foia_contact']); //display foia contact
	     //provide mailtto link for the email field
	 if (!empty($content['field_email'])){ ?>
	 <div class="field field-name-field_foia_email field-type-text field-label-above">
	 	<div class="field-label">FOIA Contact Email:&nbsp;</div>
	 	<div class="field-name-field_foia_email">
	 		<div class="field-item"><a href="mailto:<?php print render($content['field_foia_email'][0]);?>" title="<?php print render($content['field_foia_email'][0]);?>"><?php print render($content['field_foia_email'][0]);?></a></div>
	 	</div>
	 </div>
	<?php 
	 }  
	  print render($content['field_foia_address']); //display foia address
	  print render($content['field_foia_office_hours']);//display foia office hours
	  print render($content['field_foia_suite_number']);//display foia suite number
	  print render($content['field_foia_phone']);//display foia phone
	  print render($content['field_foia_fax']);//display foia fax
	  print render($content['field_foia_tty']);//display foia tty
	  
	  ?><br />
	  <?php 
	  print render($content['field_leadership_bios']);//display leadership bios
	  print render($content['field_performance']);//display performance
	  print render($content['field_askthedirector']);//display ask the director
	  ?>
	  <div class="social-media-icons">
  <?php 
  //Display social media icons if a social media link exists
	  if (!empty($content['field_socialmedia1_link'])){ ?>
	 	<div class="field field-name-field_socialmedia1_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia1_link'][0]);?>" title="<?php print render($content['field_socialmedia1_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia1_type'][0]);?>.png" title="<?php print render($content['field_socialmedia1_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	 
	  if (!empty($content['field_socialmedia2_link'])){ ?>
	 	<div class="field field-name-field_socialmedia2_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia2_link'][0]);?>" title="<?php print render($content['field_socialmedia2_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia2_type'][0]);?>.png" title="<?php print render($content['field_socialmedia2_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia3_link'])){ ?>
	 	<div class="field field-name-field_socialmedia3_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia3_link'][0]);?>" title="<?php print render($content['field_socialmedia3_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia3_type'][0]);?>.png" title="<?php print render($content['field_socialmedia3_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia4_link'])){ ?>
	 	<div class="field field-name-field_socialmedia4_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia4_link'][0]);?>" title="<?php print render($content['field_socialmedia4_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia4_type'][0]);?>.png" title="<?php print render($content['field_socialmedia4_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia5_link'])){ ?>
	 	<div class="field field-name-field_socialmedia5_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia5_link'][0]);?>" title="<?php print render($content['field_socialmedia5_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia5_type'][0]);?>.png" title="<?php print render($content['field_socialmedia5_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia6_link'])){ ?>
	 	<div class="field field-name-field_socialmedia6_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia6_link'][0]);?>" title="<?php print render($content['field_socialmedia6_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia6_type'][0]);?>.png" title="<?php print render($content['field_socialmedia6_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia7_link'])){ ?>
	 	<div class="field field-name-field_socialmedia7_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia7_link'][0]);?>" title="<?php print render($content['field_socialmedia7_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia7_type'][0]);?>.png" title="<?php print render($content['field_socialmedia7_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia8_link'])){ ?>
	 	<div class="field field-name-field_socialmedia8_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia8_link'][0]);?>" title="<?php print render($content['field_socialmedia8_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia8_type'][0]);?>.png" title="<?php print render($content['field_socialmedia8_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia9_link'])){ ?>
	 	<div class="field field-name-field_socialmedia9_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia9_link'][0]);?>" title="<?php print render($content['field_socialmedia9_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia9_type'][0]);?>.png" title="<?php print render($content['field_socialmedia9_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	  if (!empty($content['field_socialmedia10_link'])){ ?>
	 	<div class="field field-name-field_socialmedia10_link social_icon">
	 		<div class="field-item"><a href="<?php print render($content['field_socialmedia10_link'][0]);?>" title="<?php print render($content['field_socialmedia10_link'][0]);?>"><img src="/sites/default/files/dc/shared_assets/social_icons/<?php print render($content['field_socialmedia10_type'][0]);?>.png" title="<?php print render($content['field_socialmedia10_type'][0]);?>"></a></div>
	 	</div>
	 	<?php 
	 } 
	
	?>
	</div>
	  
  </div>
  
  </div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>

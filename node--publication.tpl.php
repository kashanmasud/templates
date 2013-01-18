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
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

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
	  //print render($content['field_publication_type']); //commented this line per IDD-529 -kjala
	
    ?>
	<br/>
    <?php
	  print render($content['field_date']); //display publication date
	  //display publication number field if not empty
	  if (!empty($content['field_publication_number'])){
	  print render($content['field_publication_number']); 
	  }
	  print render($content['body']); //display publication body
	  if (stripos(render($content['field_attachment']), "field-item ") !== false) {
	  	print render($content['field_attachment']); //display publication attachments
	 //$ext = $content['field_attachment']; get filename
	// print $ext;//print filename
	  	
	  
	  } //end of if
	?>
	
	<?php if (!empty($content['field_disclaimer_type'])){ ?> 
		<div class="dcHorizRuleFull"> </div>
			<ul class="dcDisclaimerContent">
				<?php if(strripos(render($content['field_disclaimer_type']),"PDF Disclaimer [PDF]") !== false): ?>
					<li>	
				  		<div class="publication-disclaimer"><sup>[PDF]</sup> This document is presented in Portable Document Format (PDF). A PDF reader is required for viewing. <a href="http://www.adobe.com/" target="_blank" title="Download a PDF Reader">Download a PDF Reader</a> or <a href="http://www.adobe.com/support/index.html" target="_blank" title="learn more about PDFs">learn more about PDFs</a>.</div>
					</li>	 
				<?php endif; ?>
				<?php if(strripos(render($content['field_disclaimer_type']),"Excel Disclaimer [XLS]") !== false): ?>
					<li>	
				  		<div class="publication-disclaimer"><sup>[XLS]</sup> This document is presented as Microsoft Excel. If you are unable to open the document, <a alt="download the viewer" href="http://www.microsoft.com/downloads/details.aspx?familyid=1CD6ACF9-CE06-4E1C-8DCF-F33F669DBC3A&amp;displaylang=en" target="_blank" title="download the viewer">download the viewer</a>.</div>
					</li>	 
				<?php endif; ?>
				<?php if(strripos(render($content['field_disclaimer_type']),"MSWord Disclaimer [DOC]") !== false): ?>
					<li>	
				  		<div class="publication-disclaimer"><sup>[DOC]</sup> [DOC] This document is presented as a Microsoft Word. If you unable to open the document, <a alt="download the viewer" href="http://www.microsoft.com/download/en/details.aspx?DisplayLang=en&amp;id=4" target="_blank" title="download the viewer">download the viewer</a>.</div>
					</li>	 
				<?php endif; ?>
				<?php if(strripos(render($content['field_disclaimer_type']),"Powerpoint Disclaimer [PPT]") !== false): ?>
					<li>	
				  		<div class="publication-disclaimer"><sup>[PPT]</sup> [PPT] This document is presented as a Microsoft Powerpoint. If you unable to open the document, <a alt="download the viewer" href="http://www.microsoft.com/downloads/details.aspx?displaylang=en&amp;FamilyID=048dc840-14e1-467d-8dca-19d2a8fd7485" target="_blank" title="download the viewer">download the viewer</a>.</div>
					</li>	 
				<?php endif; ?>
			</ul>	
	<?php } ?>	 
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

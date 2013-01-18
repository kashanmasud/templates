<?php
function dc_agency_css_alter(&$css) {
  // Remove all css files.
  foreach ($css as $key => $value) {
    $exclude[$key] = FALSE;
  }
  $css = array_diff_key($css, $exclude);
}
function dc_agency_js_alter(&$js) {
  // Remove all js files.
  foreach ($js as $key => $value) {
    $exclude[$key] = FALSE;
  }
  $js = array_diff_key($js, $exclude);
}
?>
<script>
	document.title = "<?php print $site_slogan; ?>";
</script>
<dcfooter>
<div id="fulldcFooter">
<style>
#skip-link {
left: 50%;
margin-left: -5.25em;
margin-top: 0px;
position: absolute;
width: auto;
z-index: 50;
}
.element-invisible {
    display: none;
}
#fulldcFooter * {
    font-family: Arial,Helvetica,sans-serif;
}
#fulldcFooter {
    margin: 0 auto;
    position: relative;
    width: 972px;
}
#fulldcFooter .dcFooter {
    clear: both;
    font-size: 11px;
    line-height: 19px;
    padding-bottom: 24px;
    text-align: left;
}
#fulldcFooter .dcFooter li {
    display: inline;
}
#fulldcFooter .dcFooter li.dcDivider {
    color: #959595;
    margin: 0 10px;
}
#fulldcFooter .dcFooter .dcBar {
    border-color: #CDCCCA;
    border-right: 0 solid #CDCCCA;
    border-style: solid;
    border-width: 1px 0 0;
}
#fulldcFooter .dcFooter .dcLinks {
    margin-right: 75px;
}
#fulldcFooter .dcFooter a, #fulldcFooter #footer-wrapper a {
    color: #0157B0;
    font-family: Arial,Helvetica,sans-serif;
    text-decoration: none;
}
#fulldcFooter .dcFooter a:visited {
    color: #0157B0;
}
#fulldcFooter .dcFooter a:hover, #footer-wrapper a:hover {
    text-decoration: underline;
}
#fulldcFooter .dcFooterList {
    display: inline-block;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 10px;
    margin: 6px 18px;
    text-align: left;
    vertical-align: top;
}
#fulldcFooter .dcFooterList h4 {
    margin: 0;
    padding: 0;
}
#fulldcFooter .dcFooterList ul {
    margin: 0;
    padding: 0;
}
#fulldcFooter .dcFooterList li {
    display: list-item;
    list-style-type: none;
}
#fulldcFooter .dcFooterList ul li.dcFirstChild {
    font-weight: bolder;
    list-style-type: none;
}
#fulldcFooter .dcFooterLabel {
    color: #4F4F4F;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 11px;
    font-weight: bold;
}
#fulldcFooter .dcFooterListLower {
    display: inline-block;
    margin: 6px 18px;
}
#fulldcFooter .dcFooterListLower ul {
    margin: 0;
    padding: 0;
}
#fulldcFooter .dcFooter {
    text-align: center !important;
}
#fulldcFooter .dcFooter .dcBar {
    margin-left: auto;
    margin-right: auto;
    width: 972px;
}
</style>
<?php
// load footer drupal block (block id 2)
$block = module_invoke('block', 'block_view', '2');
// The following line renders the header region of the template and passes that as the source string to a regex
// search and replace function which looks for all instances of an href that contains a relative URL and replaces
// it with an absolute URL. That resulting string is then printed as the new header code. This enables RUI to work
// on other sites with different domain names. 
print preg_replace("#(<\s*a\s+[^>]*href\s*=\s*[\"'])(?!http)([^\"'>]+)([\"'>]+)#", '$1http://'.$_SERVER['HTTP_HOST'].'$2$3', $block['content']);
?>
</div>
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
<dcheader>
<div id="fulldcHeader"><div id="page-wrapper"><div id="page">
<!--[if lt IE 7]>
    <script language="JavaScript">
    function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
    {
       var arVersion = navigator.appVersion.split("MSIE")
       var version = parseFloat(arVersion[1])
       if ((version >= 5.5) && (document.body.filters)) 
       {
          for(var i=0; i<document.images.length; i++)
          {
             var img = document.images[i]
             var imgName = img.src.toUpperCase()
             if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
             {
                var imgID = (img.id) ? "id='" + img.id + "' " : ""
                var imgClass = (img.className) ? "class='" + img.className + "' " : ""
                var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
                var imgStyle = "display:inline-block;" + img.style.cssText 
                if (img.align == "left") imgStyle = "float:left;" + imgStyle
                if (img.align == "right") imgStyle = "float:right;" + imgStyle
                if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
                var strNewHTML = "<span " + imgID + imgClass + imgTitle
                + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
                + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
                + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
                img.outerHTML = strNewHTML
                i = i-1
             }
          }
       }    
    }
    window.attachEvent("onload", correctPNG);
    </script>
<![endif]-->
<style>
#skip-link {
left: 50%;
margin-left: -5.25em;
margin-top: 0px;
position: absolute;
width: auto;
z-index: 50;
}
/* DC Header */
#fulldcHeader {
    BORDER-TOP: #b50100 3px solid; BACKGROUND: url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/dcHeaderBg_ver2.jpg) repeat-x 0px 0px; WIDTH: 972px;
    position:relative; z-index:2;
}
#fulldcHeader .flagCell {
    BACKGROUND: url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/dcFlag_ver2.jpg) no-repeat 0px 0px; FLOAT: left; MARGIN-LEFT: 94px; MARGIN-TOP: 2px; WIDTH: 272px; HEIGHT: 100px;
}
#fulldcHeader .rightHeader {
    MARGIN-TOP: 12px; FLOAT: left; MARGIN-LEFT: 160px; WIDTH: 105px; POSITION:relative;
}
#fulldcHeader .rightHeader .logo2HeaderBox {
    position:absolute;
    top:-10px;
}
#fulldcHeader .dcLogo {
    PADDING-LEFT: 14px; padding-top:2px; FLOAT: left; WIDTH: 233px;
}
#fulldcHeader .dcSearchBar * {
    padding: 0px; margin: 0px;
}
#fulldcHeader .dcSearchBar {
    PADDING-RIGHT: 26px; FLOAT: right; PADDING-TOP: 12px; TEXT-ALIGN: right;
}
#fulldcHeader .dcSearchBar FIELDSET {
    border: none; MARGIN: 0px; VERTICAL-ALIGN: top; padding:0px;
}
#fulldcHeader .dcSearchForm_leftCap IMG {
    margin:0px; padding:0px;
}
#fulldcHeader .dcSearchForm {
    BACKGROUND-POSITION: left top; BACKGROUND-IMAGE: url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/gsearchbar_repeat_ver2.jpg); WIDTH: 175px; BACKGROUND-REPEAT: repeat-x; HEIGHT: 22px; padding-top:5px; padding-bottom:0px; margin:0px;
}
#fulldcHeader .dcSearchFormInput {
    border-width: 0px; PADDING-LEFT: 10px; FONT-SIZE: 13px; WIDTH: 175px; margin:0px;
}
#fulldcHeader .dcSearchButton {
    padding:0px;
    margin:0px;
}
#fulldcHeader .inner_site-filter,
#fulldcHeader .inner_site-filter td {
    color: #FFFFFF;
    font-size: 11px;
    font-weight: bold;
    line-height: 19px;
    padding-left: 5px;
    padding-top: 3px;
}
#fulldcHeader #block-menu-block-2 {
    FONT-SIZE: 11px; COLOR: #ffffff; PADDING-TOP: 6px; FONT-FAMILY: Arial,Helvetica,sans-serif; TEXT-ALIGN: right;
}
#fulldcHeader #block-menu-block-2 UL {
    text-align:right; padding-right:6px; padding:0; margin:0;
}
#fulldcHeader #block-menu-block-2 LI {
    PADDING-RIGHT: 2px; DISPLAY: inline; PADDING-LEFT: 2px; PADDING-BOTTOM: 0; PADDING-TOP: 0; border-right:1px solid #FFF;
}
#fulldcHeader #block-menu-block-2 LI.last {
    border-right:none;
}
#fulldcHeader #block-menu-block-2 a {
    color:#FFFFFF;
    margin:0;
    padding:0;
    text-decoration:none;
    font-family:Arial,Helvetica,sans-serif;
    font-size:11px;
    font-weight:bold;
}
#fulldcHeader #block-menu-block-2 a:visited {
    color:#FFFFFF;
}
#fulldcHeader #block-menu-block-2 a:hover {
    color:#FFFFFF;
    text-decoration:underline;
}
/* New Top Nav and Mega Menus */
#fulldcHeader #block-domain-conf-domain-main-links ul.menu {
    background:url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/topMainMenuBg.jpg) top repeat-x;
    height:36px;
    margin:0px !important;
    padding:0px !important;
    clear:both;
    list-style:none;
    position:relative;
    z-index:2;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li {
    float:left;
    margin:0px !important;
    padding:0px !important;
    line-height:36px;
    position:relative;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li a,
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li a:visited {
    color:#F5F5F5;
    text-decoration:none;
    font-family:Arial, Helvetica, sans-serif;
    font-size:13px;
    font-weight:bold;
    padding: 0 14px;
    border-right:#679dcc solid 1px;
    display:block;
}
#fulldcHeader #block-domain-conf-domain-main-links div.content>ul.menu>li:hover {
    background:url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/topMainMenuBg_over.jpg) top repeat-x;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li ul.menu {
    opacity:.95;
    position:absolute;
    display: none;
    background: none repeat scroll 0 0 #F4F4F4;
    border-right:#679dcc solid 1px;
    border-left:#679dcc solid 1px;
    border-bottom:#679dcc solid 1px;
    height:auto;
    width:510px;
    text-align: left;
    list-style: none;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li ul.menu li {
    float:left;
    min-height: 52px; /* Allow short title menu items to float left  */
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu ul.menu li a,
#fulldcHeader #block-domain-conf-domain-main-links ul.menu ul.menu li a:visited {
    color:#0157B0;
    font-family:Arial, Helvetica, sans-serif;
    font-size:13px;
    font-weight:bold;
    padding: 10px !important;
    width:150px;
    display:block;
    font-size:12px;
    font-weight:normal;
    line-height: 16px;
    border:none;
    background:none;
}
#fulldcHeader #block-domain-conf-domain-main-links .menu .menu li a:hover {
    text-decoration:underline;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu li:hover ul.menu {
    display:block;
}
#fulldcHeader #block-domain-conf-domain-main-links ul.menu ul.menu ul.menu { /* hides menu levels 3 and beyond */
    display:none !important;
}
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1812 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1806 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1802 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1385 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1386 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1381 ul.menu,
#fulldcHeader #block-domain-conf-domain-main-links li.menu-1492 ul.menu { /* Makes right most main menu items align to the right instead based on their menu id */
    right:0;
}
/* end new top nav */
.contentContainer {
    MARGIN-LEFT: auto; WIDTH: 972px; MARGIN-RIGHT: auto; text-align:left;
}
.dcMasthead {
    MARGIN-LEFT: auto !important; MARGIN-RIGHT: auto !important;
    height:102px;
}
.subHeader {
    MARGIN-LEFT: auto !important; MARGIN-RIGHT: auto !important;
    background:url(http://dcremoteui.dc.gov/sites/all/themes/dc_agency/images/header_title_row_bg.jpg) repeat-x top #023256;
    min-height:74px;
    text-align:left;
}
.subHeader .agency_title {
    padding-top:10px;
    padding-bottom:10px;
    padding-left:14px;
    font-size:24px;
    font-weight:bold;
    max-width:680px;
    color: #FFFEFF;
}
.element-invisible {
    display: none;
}
#fulldcHeader * {
    font-family: Arial,Helvetica,sans-serif;
}
#fulldcHeader {
    margin: 0 auto;
    position: relative;
    width: 972px;
}
</style>
	<?php if ($site_name || $site_slogan): ?>
		<div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

			<?php if ($site_slogan): ?>
				<div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
					<?php print $site_slogan; ?>
				</div>
			<?php endif; ?>
			<?php if ($site_name): ?>
            	<div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
            	  <span id="site-name-only"><?php print $site_name; ?></span>
          	  </div>
       		<?php endif; ?>

		</div> <!-- /#name-and-slogan -->
	<?php endif; ?>
	
	<?php // The following line renders the header region of the template and passes that as the source string to a regex
		  // search and replace function which looks for all instances of an href that contains a relative URL and replaces
		  // it with an absolute URL. That resulting string is then printed as the new header code. This enables RUI to work
		  // on other sites with different domain names. 
		  print preg_replace("#(<\s*a\s+[^>]*href\s*=\s*[\"'])(?!http)([^\"'>]+)([\"'>]+)#", '$1http://'.$_SERVER['HTTP_HOST'].'$2$3', render($page['header']));
	?>

  </div></div></div>
  </dcheader><!-- /.section, /#fulldcHeader -->

<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - index";
$heading        = "FVWM - Man page - index";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_index";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for index in unstable branch (2.7.1)"); ?>

	<h1>Index</h1>
	<hr>
	These pages were last generated on 15-Apr-2011 by n6tadam,
	from the 2.7.x man pages.<!-- in directory ../../../fvwm. -->

	<hr>
	Start of man pages in section 1.
	<ul>
			<li><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a>
			<li><a href="<?php echo conv_link_target('./FvwmAnimate.php');?>">FvwmAnimate</a>
			<li><a href="<?php echo conv_link_target('./FvwmAuto.php');?>">FvwmAuto</a>
			<li><a href="<?php echo conv_link_target('./FvwmBacker.php');?>">FvwmBacker</a>
			<li><a href="<?php echo conv_link_target('./FvwmBanner.php');?>">FvwmBanner</a>
			<li><a href="<?php echo conv_link_target('./FvwmButtons.php');?>">FvwmButtons</a>
			<li><a href="<?php echo conv_link_target('./FvwmCommand.php');?>">FvwmCommand</a>
			<li><a href="<?php echo conv_link_target('./FvwmConsole.php');?>">FvwmConsole</a>
			<li><a href="<?php echo conv_link_target('./FvwmConsoleC.pl.php');?>">FvwmConsoleC.pl</a>
			<li><a href="<?php echo conv_link_target('./FvwmCpp.php');?>">FvwmCpp</a>
			<li><a href="<?php echo conv_link_target('./FvwmDebug.php');?>">FvwmDebug</a>
			<li><a href="<?php echo conv_link_target('./FvwmDragWell.php');?>">FvwmDragWell</a>
			<li><a href="<?php echo conv_link_target('./FvwmEvent.php');?>">FvwmEvent</a>
			<li><a href="<?php echo conv_link_target('./FvwmForm.php');?>">FvwmForm</a>
			<li><a href="<?php echo conv_link_target('./FvwmGtk.php');?>">FvwmGtk</a>
			<li><a href="<?php echo conv_link_target('./FvwmGtkDebug.php');?>">FvwmGtkDebug</a>
			<li><a href="<?php echo conv_link_target('./FvwmIconBox.php');?>">FvwmIconBox</a>
			<li><a href="<?php echo conv_link_target('./FvwmIconMan.php');?>">FvwmIconMan</a>
			<li><a href="<?php echo conv_link_target('./FvwmIdent.php');?>">FvwmIdent</a>
			<li><a href="<?php echo conv_link_target('./FvwmM4.php');?>">FvwmM4</a>
			<li><a href="<?php echo conv_link_target('./FvwmPager.php');?>">FvwmPager</a>
			<li><a href="<?php echo conv_link_target('./FvwmPerl.php');?>">FvwmPerl</a>
			<li><a href="<?php echo conv_link_target('./FvwmProxy.php');?>">FvwmProxy</a>
			<li><a href="<?php echo conv_link_target('./FvwmRearrange.php');?>">FvwmRearrange</a>
			<li><a href="<?php echo conv_link_target('./FvwmSave.php');?>">FvwmSave</a>
			<li><a href="<?php echo conv_link_target('./FvwmSaveDesk.php');?>">FvwmSaveDesk</a>
			<li><a href="<?php echo conv_link_target('./FvwmScript.php');?>">FvwmScript</a>
			<li><a href="<?php echo conv_link_target('./FvwmScroll.php');?>">FvwmScroll</a>
			<li><a href="<?php echo conv_link_target('./FvwmTabs.php');?>">FvwmTabs</a>
			<li><a href="<?php echo conv_link_target('./FvwmTaskBar.php');?>">FvwmTaskBar</a>
			<li><a href="<?php echo conv_link_target('./FvwmTheme.php');?>">FvwmTheme</a>
			<li><a href="<?php echo conv_link_target('./FvwmWharf.php');?>">FvwmWharf</a>
			<li><a href="<?php echo conv_link_target('./FvwmWinList.php');?>">FvwmWinList</a>
			<li><a href="<?php echo conv_link_target('./FvwmWindowMenu.php');?>">FvwmWindowMenu</a>
			<li><a href="<?php echo conv_link_target('./focus-link.php');?>">focus-link</a>
			<li><a href="<?php echo conv_link_target('./fvwm-bug.php');?>">fvwm-bug</a>
			<li><a href="<?php echo conv_link_target('./fvwm-config.php');?>">fvwm-config</a>
			<li><a href="<?php echo conv_link_target('./fvwm-convert-2.2.php');?>">fvwm-convert-2.2</a>
			<li><a href="<?php echo conv_link_target('./fvwm-convert-2.4.php');?>">fvwm-convert-2.4</a>
			<li><a href="<?php echo conv_link_target('./fvwm-convert-2.6.php');?>">fvwm-convert-2.6</a>
			<li><a href="<?php echo conv_link_target('./fvwm-menu-desktop.php');?>">fvwm-menu-desktop</a>
			<li><a href="<?php echo conv_link_target('./fvwm-menu-directory.php');?>">fvwm-menu-directory</a>
			<li><a href="<?php echo conv_link_target('./fvwm-menu-headlines.php');?>">fvwm-menu-headlines</a>
			<li><a href="<?php echo conv_link_target('./fvwm-menu-xlock.php');?>">fvwm-menu-xlock</a>
			<li><a href="<?php echo conv_link_target('./fvwm-perllib.php');?>">fvwm-perllib</a>
			<li><a href="<?php echo conv_link_target('./fvwm-root.php');?>">fvwm-root</a>
		</ul>

	<hr>
	<p>Return to the branch <a href="<?php echo conv_link_target('./../index.php');?>">index</a>.


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Apr-2011 -->

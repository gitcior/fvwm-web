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
if (strlen("$navigation_check") > 0) return;

$rel_path = "@parent@/../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - @topic@";
$heading        = "FVWM - Man page - @topic@";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for @topic@ in @branch@ branch (@version@)"); ?>

@body@

<?php decoration_window_end(); ?>

<!-- Automatically generated by @script@ on @date@ -->

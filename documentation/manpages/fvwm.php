<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/manpage_template.php_
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//-  Last modified : <09.04.2003 19:39:03 uwe>
//--------------------------------------------------------------------

// this is a template file for a manpage file
// Please use the script in this directory to generate the php files
// from the fvwm manpages

//--------------------------------------------------------------------
// this manpages should not apear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if( strlen("$navigation_check") > 0 ) return;


if (strlen($rel_path) == 0) $rel_path = "../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include($rel_path.'/definitions.inc'); 

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page @MAN_NAME@";            
$heading        = "FVWM - Man page @MAN_NAME@";            
$link_name      = "Man page";                   
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

// Since manpages shall not apear in the navigation structure this 
// page must identify itself with another name. It says here that 
// it's name is manpages which belongs actually to the table of 
// content page for all man pages. The layout file will therefore 
// mark the navigation entry for the toc file as choosen althougth 
// it is actually not choosen.
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if( strlen("$site_has_been_loaded") == 0 ) {
  $site_has_been_loaded = "true";
  if( strlen($layout) > 0 ) {
    $file = $rel_path."/layout_".$layout.".inc";
    if( file_exists($file) ) $layout_file = $file;
  }
  include(sec_filename("$layout_file"));
  exit();
}
?>

<?php decoration_window_start("@MAN_NAME@"); ?>  

<!-- maybe a link to the table of contents for fvwm manual pages is insert here -->
<a href="index.php">Back to fvwm man pages</a>

<?php if(file_exists("fvwm.inc")) include("fvwm.inc") ?>

<?php decoration_window_end(); ?>
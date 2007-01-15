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
$title          = "FVWM - Man page - fvwm-convert-2.6";
$heading        = "FVWM - Man page - fvwm-convert-2.6";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_fvwm-convert-2.6";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-convert-2.6 in unstable branch (2.5.20)"); ?>

<H1>fvwm-convert-2.6</H1>
Section: FVWM Modules (1)<BR>Updated: 15 January 2006 (2.5.20)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-convert-2.6 - convert FVWM 2.4.x configuration file to FVWM 2.6.x style
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-convert-2.6</u></B>

[<I>source</I>]

[<I>dest</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-convert-2.6</u></B>

is ...
<A NAME="lbAE">&nbsp;</A>
<H2>AUTHOR</H2>

fvwm-workers
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 09:42:50 GMT, January 15, 2007


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Jan-2007 -->

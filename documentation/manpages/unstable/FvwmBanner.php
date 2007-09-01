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
$title          = "FVWM - Man page - FvwmBanner";
$heading        = "FVWM - Man page - FvwmBanner";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmBanner";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmBanner in unstable branch (2.5.24)"); ?>

<H1>FvwmBanner</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.5.24)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmBanner - the Fvwm Banner module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

Module FvwmBanner
<P>
<I>FvwmBanner</I> can only be invoked by fvwm.
Command line invocation of the <I>FvwmBanner</I> module will not work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmBanner displays an Fvwm Logo in the center of the screen
for 3 seconds.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

None.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

Nothing interesting.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmBanner can be invoked by the command 'Module FvwmBanner'.
This can be bound to
a menu or key-stroke in the .fvwm2rc file,
but more likely you would do this in the StartFunction or InitFunction,
for example:


<P>


<blockquote><PRE>AddToFunc InitFunction &quot;I&quot; Module FvwmBanner</PRE></blockquote>
<P>



<P>
You can also give it an
optional file parameter, like 'FvwmBanner doomface.xpm' or specify an
alternate default pixmap via configuration options
(see &quot;*FvwmBanner: Pixmap&quot; below).
Fvwm will search the ImagePath
to find the image, or you can use the full path to the image.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<P>
<DL COMPACT>
<DT>*FvwmBanner: NoDecor<DD>
Tells FvwmBanner to create a window that Fvwm will not manage and not decorate.
<P>
<DT>*FvwmBanner: Pixmap <I>file</I><DD>
Tells FvwmBanner to display <I>file</I> instead of the built in pixmap.
<P>
<DT>*FvwmBanner: Timeout <I>sec</I><DD>
Tells FvwmBanner to display for <I>sec</I> seconds instead of default
of 3 seconds.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>AUTHOR</H2>

Robert Nation
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 20:58:02 GMT, September 01, 2007


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Sep-2007 -->
